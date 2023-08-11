@extends('layouts.csrf_template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/csrf_user_page.css') }}">
@endsection

@section('cont')
    <h2>アカウント情報</h2>
    <p class="acc-info">ユーザー名</p>
    {{ $name }}
    <p class="acc-info">メールアドレス</p>
    {{ $email }}
    <br>
    <button class="submit-button"><a href="{{ route('get_csrf_edit') }}">編集</a></button>
    <button class="submit-button"><a href="{{ route('get_csrf_fake') }}">罠サイト</a></button>
    <br>
    @isset( $msg )
        <p>{{ $msg }}</p>
    @endisset
    <br>
    <a class="to-login-link" href="{{ route('get_csrf_login') }}">ログインページへ</a>
@endsection