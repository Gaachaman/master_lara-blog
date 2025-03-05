<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class MypageController extends Controller
{
    public function __construct()
    {
        // ログインユーザーのみアクセス可能
        $this->middleware('auth');
    }

    public function index($id)
    {
                // 現在のユーザーのIDを取得
                $currentUserId = Auth::id();

                // IDに基づいてユーザーを取得
                $user = User::findOrFail($id);
        
                // 認証ユーザーが自分のプロフィール以外を見ようとしている場合
                if ($user->id !== $currentUserId) {
                    abort(403, 'Unauthorized action.'); // 403 Forbiddenエラーを返す
                }
        
                // ビューにユーザーのデータを渡す
                return view('auth.mypage', ['user' => $user]);
    }
}
