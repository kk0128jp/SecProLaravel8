@extends('layouts.csrf_template')

@section('cont')
    <h2>アカウント情報</h2>
    <p>ユーザー名</p>
    {{ $name }}
    <p>メールアドレス</p>
    {{ $email }}
    <br>
    <button class="submit-button"><a href="{{ route('get_csrf_edit') }}">編集</a></button>
    <button class="submit-button"><a href="{{ route('get_csrf_fake') }}">罠サイト</a></button>
    @isset( $msg )
        {{ $msg }}
    @endisset
    <br>
    <a href="{{ route('get_csrf_login') }}">ログインページへ</a>
@endsection