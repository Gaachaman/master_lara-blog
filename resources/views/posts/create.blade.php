@extends('layouts.app_original')
@section('content')
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- {{ route('posts.store') }}という記述はweb.phpで'posts.store'を呼び出している --}}
            <form action="{{ route('posts.store') }}" method="POST">
                {{-- サニタイジングの記述がないとLaravelはインプット機能が使用できず、エラーになる。 --}}
                @csrf
                <div class="form-group">
                    <label>タイトル</label>
                    <input type="text" class="form-control" placeholder="タイトルを入力して下さい" name="title">
                </div>
                <div class="form-group">
                    <label>内容</label>
                    <textarea class="form-control" placeholder="内容" rows="5" name="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
  </div>

@endsection