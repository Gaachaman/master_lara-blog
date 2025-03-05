<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //publicは省略化
    public function index()
    {
        //ここのPostはPostモデルを指している。（Postモデルからとってきている。）
        //ソダテク内の記述
        // $posts = Post::All();
        // dd($posts);

        //最新版に並び替えたい
        //$posts = Post::orderByDesc('created_at')->get();
        // dd($posts);

        //ページネーションを実装する
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        $data = ['posts' => $posts];
        return view('posts.index',  ['posts' => $posts]);

        //['posts' => $posts]はreturn viewに$postsの値を受け渡す記述
        //compact('posts')でもOK
        //return view('posts.index',['posts'=>$posts]);
    }

    function create()
    {
        return view ('posts.create');
    }

    //Request：Laravelで標準で入っている機能。ブラウザを通してユーザーから送られるオブジェクトを含んでいるもの。
    //Requestが入力された内容を取得して、$requestに受け渡している。
    function store(Request $request)
    {
        // dd($request);

        $post = new Post;
        //$requestに入っている値を、new Postでデーターベースに保存するという記述
        $post -> title=$request->title;
        //左辺：テーブル、右辺が送られてきた値（formから送られてきたnameが入っている）
        $post -> body= $request->body;
        //Auth::id()とは現在取得しているユーザーのidのこと。
        $post -> user_id = Auth::id();

        $post -> save();

        //save()が実行後、'posts.index'にページが遷移される
        return redirect()->route('posts.index');
    }

    //$idはindex.blade.phpから送られてきたid
    function show($id)
    {
        // dd($id);
        $post = Post::find($id);

        dd($post);
        return view('posts.show',['post'=>$post]);
    }

    function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',['post'=>$post]);
    }

    function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post -> title = $request -> title;
        $post -> body = $request -> body;
        $post -> save();
        
        return view('posts.show',['post'=>$post]);
    }

    function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();
        return redirect()->route('posts.index');
    }

    //ブックマークした記事の一覧を取得
    public function bookmark_posts()
    {
        $posts = Auth::user()->bookmark_posts()->orderBy('created_at', 'desc')->paginate(10);
        $data = [
            'posts' => $posts,
        ];
        return view('posts.bookmarks', $data);
    }
}
