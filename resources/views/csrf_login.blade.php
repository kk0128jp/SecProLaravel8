@extends('layouts.template')

@section('title')
    CSRF(クロスサイト・リクエスト・フォージェリ)
@endsection

@section('level')
    <span style="color: yellow;">中</span>
@endsection

@section('damage-list')
    <li>ログイン後の利用者のみが利用可能なサービスの悪用</li>
    <li>ログイン後の利用者のみが編集可能な情報の改ざん、新規登録</li>
@endsection

@section('example')
    ログイン後に罠サイトにアクセス
@endsection

@section('bad-cont')
    <p>ログインしてください</p>
    <form action="{{ route('post_csrf_login') }}" method="post">
        <p>ユーザー名: taro</p>
        <input type="text" name="name">
        <p>パスワード: taro</p>
        <input type="hidden" name="measures" value="unmeasured">
        <input type="password" name="password">
        <input type="submit" value="ログイン">
    </form>
    @isset( $msg )
        {{ $msg }}
    @endisset
@endsection

@section('good-cont')
    <p>ログインしてください</p>
    <form action="{{ route('post_csrf_rem_login') }}" method="post">
        @csrf
        <p>ユーザー名: hanako</p>
        <input type="text" name="name">
        <p>パスワード: hanako</p>
        <input type="password" name="password">
        <input type="hidden" name="measures" value="remedied">
        <input type="submit" name="ログイン">
    </form>
@endsection

@section('link')
    <p><a href="{{ route('home') }}">ホームへ</a></p>
@endsection