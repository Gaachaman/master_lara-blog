@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $user->name }}'s Mypage</h1>
                    <input type="text" value="{{ $user->name }}">
                    <input type="text" value="{{ $user->post }}">
                    <!-- その他のユーザーデータの表示 -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
