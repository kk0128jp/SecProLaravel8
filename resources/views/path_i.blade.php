@extends('layouts.template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/path_i.css') }}">
@endsection

@section('title')
    ディレクトリトラバーサル
@endsection

@section('level')
    <span style="color: red;">高</span>
@endsection

@section('damage-list')
    <li class="damage-list">不正なファイル閲覧、改ざん、削除</li>
@endsection
        
@section('example')
    ../.env
@endsection

@section('bad-cont')
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <p class="cont-txt">ファイルパスを入れてね</p>
        <input type="text" name="path">
        <input type="hidden" name="measures" value="unmeasured">
        <button class="button" type="submit">入力</button>
    </form>
@endsection
    
@section('good-cont')
    <ul>
        <li class="good-list">外部からファイルパスを受け取らない</li>
        <li class="good-list">basename()の使用</li>
    </ul>
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <input type="text" name="path">
        <input type="hidden" name="measures" value="remedied">
        <button class="button" type="submit">入力</button>
    </form>
    @isset( $e_msg )
        <p class="e-msg">{{ $e_msg }}</p>
    @endisset

@endsection

@section('link')
    <p class="link"><a href="{{ route('home') }}">ホームへ</a></p>
@endsection