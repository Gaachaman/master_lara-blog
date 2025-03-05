<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\Auth\MypageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// =======================================================================================
// 認証機能関連
// =======================================================================================
Auth::routes();
// Auth::routes()は、Laravelフレームワークで提供されている認証関連のルートを一括で定義するためのメソッドです。このメソッドを呼ぶことで、ユーザー認証に関連する様々なルートが自動的に設定されます。

// 具体的には、以下のルートが生成されます:

// ユーザー登録フォームの表示と処理
// ログインフォームの表示と処理
// ログアウトの処理
// パスワードリセットのリクエストとリセットの処理
// このメソッドを呼ぶことで、これらの機能を素早く導入できます。例えば、Auth::routes();をweb.phpに追加すると、上記の機能がデフォルトのURIに基づいて定義されます。例えば、/loginがログインページになります。

// このメソッドを使用することで、基本的なユーザー認証機能を簡単に導入でき、これを基盤にアプリケーションの認証機能を拡張することができます。

Route::get('/mypage/{id}', [MypageController::class, 'index'])->name('mypage');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// =======================================================================================
// post関連
// =======================================================================================
//Laravel最重要7つのアクション！
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

//7つのアクションを一つのルートで全てオールインワンしてくれるもの
// Route::resource('posts',PostController::class);

// =======================================================================================
//コメント機能
// =======================================================================================
Route::get('/comments/create/{post_id}',[CommentController::class, 'create'])->name('comments.create');
Route::post('/comments',[CommentController::class, 'store'])->name('comments.store');

// =======================================================================================
//ブックマーク機能
// =======================================================================================
Route::post('/posts/{post}/bookmark', [BookmarkController::class, 'store'])->name('bookmark.store');
Route::delete('/posts/{post}/unbookmark', [BookmarkController::class, 'destroy'])->name('bookmark.destroy');

// Route::group(['middleware' => ['auth']], function () {
//     //Route::get('/home', [HomeController::class, 'index'])->name('home');
//     //Route::resource('/posts', PostController::class);
    

//     Route::get('/bookmarks', [PostController::class, 'bookmark_posts'])->name('bookmarks');
// });d