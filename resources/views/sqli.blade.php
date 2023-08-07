@extends('layouts.template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/sql.css') }}">
@endsection

@section('title')
    SQLインジェクション
@endsection('title')

@section('level')
    <span style="color: red;">高</span>
@endsection

@section('damage-list')
    <li class="damage-list">情報漏洩、改ざん、妨害</li>
@endsection

@section('example')
    ' or 1 = 1 or ';
@endsection

@section('bad-cont')
    <p class="user-info">ユーザー名: badtaro　パスワード: taro</p>
    <p>ログインしてください</p>
    <form action="{{ route('post_sqli') }}" method="post">
        @csrf
        <p>ユーザー名</p>
        <input type="text" name="name">
        <p>パスワード</p>
        <input type="password" name="passwd">
        <input type="hidden" value="unmeasured" name="measures"><br>
        <button class="submit-button" type="submit">ログイン</button>
    </form>
    @isset ( $measures )
        @if ( $measures === 'unmeasured' )
            <p class="result">{{ $result }}</p>
        @endif
    @endisset
@endsection

@section('good-cont')
    <p>ユーザー名: goodhanako　パスワード: hanako</p>
    <p>ログインしてください</p>
    <form action="{{ route('post_sqli') }}" method="post">
        @csrf
        <p>ユーザー名</p>
        <input type="text" name="name">
        <p>パスワード</p>
        <input type="password" name="passwd">
        <input type="hidden" value="remedied" name="measures"><br>
        <button class="submit-button" type="submit">ログイン</button>
    </form>
    @isset ( $measures )
        @if ( $measures === 'remedied' )
            <p class="result">{{ $result }}</p>
        @endif
    @endisset
@endsection

@section('link')
    <p><a href="{{ route('home') }}">ホームへ</a></p>
@endsection