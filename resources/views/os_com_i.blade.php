@extends('layouts.template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/os_com_i.css') }}">
@endsection

@section('title')
    OSコマンドインジェクション
@endsection

@section('level')
    <span style="color: red;">高</span>
@endsection

@section('damage-list')
    <li class="damage-list">サーバ内ファイルの閲覧、改ざん、削除</li>
    <li class="damage-list">不正なシステム操作</li>
    <li class="damage-list">不正なプログラムのダウンロード、実行</li>
    <li class="damage-list">他のシステムへの攻撃の踏み台</li>
@endsection

@section('example')
    powershell -Command "ping 8.8.8.8"
@endsection

@section('bad-cont')
    <form action="{{ route('post_os_com_i') }}" method="post">
        @csrf
        <p class="ft">OSコマンドを入力してね</p>
        <input type="text" name="command">
        <button class="submit-button" type="submit">実行</button>
    </form>
    @isset( $command )
        <p class="command-text fw-bold">コマンド</p>
        <p class="command">{{ $command }}</p>
        <p class="fw-bold">結果</p>
        <pre>{{ $result }}</pre>
    @endisset
@endsection

@section('good-cont')
    <ul>
        <li class="good-list">シェルを起動できる言語機能の利用を避ける。</li>
        <li class="good-list">外部からコマンドの引数を受け取らない</li>
    </ul>
@endsection

@section('link')
    <p><a href="{{ route('home') }}">ホームへ</a></p>
@endsection