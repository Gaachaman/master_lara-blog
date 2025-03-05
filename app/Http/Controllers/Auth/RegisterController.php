<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/posts';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'avatar' => ['image'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {

        // コードの意味avatarフィールドの元々のファイル名をアバターの名前（$avatar)とします。
        // avatarフィールドの画像をpublic/imagesに、$avatarという名前で保存します。
        // getClientOriginalName()を使うと、アップロードしたファイルの元の名前を取ってこれます。
        // storeAs()は、ファイルに自分で名前を付けて保存ができるメソッドです。
        // 引数は、次のように設定します。
        // storeAs(ファイルの保存場所, ファイル名)

        $avatar = request()->file('avatar');

        if ($avatar) {
        // ユーザーが画像を指定した場合の処理
        $avatarName = $avatar->getClientOriginalName();
        request()->file( 'avatar')->storeAs('public/images', $avatar);
        // 画像を保存する処理など
        } else {
        // ユーザーが画像を指定しなかった場合の処理
        $avatarName = 'default-avatar.png';
        }

        // $avatar=request()->file( 'avatar')->getClientOriginalName();
        // request()->file( 'avatar')->storeAs('public/images', $avatar);


        // name, email, avatar, password フィールドの情報を使って、ユーザーを新規作成します。
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'avatar' => $avatarName,
            'password' => Hash::make($data['password']),
        ]);
    }
}
