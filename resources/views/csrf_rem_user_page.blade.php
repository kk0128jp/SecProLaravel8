@extends('layouts.csrf_template')

@section('cont')
    <h2>アカウント情報</h2>
    <p>ユーザー名</p>
    {{ $name }}
    <p>メールアドレス</p>
    {{ $email }}
    <button><a href="{{ route('get_csrf_rem_edit') }}">編集</a></button>
    <button><a href="{{ route('get_csrf_rem_fake') }}">罠サイト</a></button>
    @isset( $msg )
        {{ $msg }}
    @endisset
    <a href="{{ route('get_csrf_login') }}">ログインページへ</a>
@endsection