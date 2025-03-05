@extends('layouts.app_original')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card text-center">
            <div class="card-header">
                投稿一覧
            </div>
            @foreach($posts as $post)
            {{-- @はディレクティブと呼ばれHTML形式の中でPHPを呼び出すための記述 --}}
            
              <div class="card-body">
                  {{-- {{  }}カーリーと呼ばれ、何かを表示するためにはカーリーを使用（=phpのエコー） --}}
                  {{-- {{ 変数名->カラム名 }} --}}
                  <h5 class="card-title">タイトル : {{ $post->title }}</h5>
                  <p class="card-text">
                    内容 : {{ $post->body }}
                  </p>
                  <p class="card-text">投稿者：{{ $post->user->name }}</p>
                  <a href="{{ Route('posts.show', $post->id) }}" class="btn btn-primary">詳細へ</a>
                  {{-- ブックマークの登録画面 --}}
                  @if (!Auth::user()->is_bookmark($post->id))
                    <form action="{{ route('bookmark.store', $post) }}" method="post">
                    @csrf
                    <button class= "btn btn-primary">お気に入り登録</button>
                    </form>
                  @else
                    <form action="{{ route('bookmark.destroy', $post) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-primary">お気に入り解除</button>
                    </form>
                  @endif
              </div>
              <div class="card-footer text-muted">
                  投稿日時 : {{ $post->created_at }}
              </div>
            @endforeach
          </div>
          {{ $posts->links() }}
        </div>
        <div class="col-md-2">
          <a href="{{ route('posts.create') }}" class="btn btn-primary">
            新規投稿
          </a>
        </div>
    </div>
  </div>
  @endsection