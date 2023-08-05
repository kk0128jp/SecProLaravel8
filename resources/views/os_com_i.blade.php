@extends('layouts.template')

@section('title')
    OSコマンドインジェクション
@endsection

@section('level')
    <span style="color: red;">高</span>
@endsection

@section('damage-list')
    <li>サーバ内ファイルの閲覧、改ざん、削除</li>
    <li>不正なシステム操作</li>
    <li>不正なプログラムのダウンロード、実行</li>
    <li>他のシステムへの攻撃の踏み台</li>
@endsection

@section('example')
    powershell -Command "ping 8.8.8.8"
@endsection

@section('bad-cont')
    <form action="{{ route('post_os_com_i') }}" method="post">
        @csrf
        <p>OSコマンドを入力してね</p>
        <input type="text" name="command">
        <input type="submit" value="実行">
    </form>
    @isset( $command )
        <p>コマンド</p>
        <p>{{ $command }}</p>
        <p>結果</p>
        <pre>{{ $result }}</pre>
    @endisset
@endsection

@section('good-cont')
    <h2>良い例</h2>
    <ul>
        <li>シェルを起動できる言語機能の利用を避ける。</li>
        <li>外部からコマンドの引数を受け取らない</li>
    </ul>
@endsection

@section('link')
    <p><a href="{{ route('home') }}">ホームへ</a></p>
@endsection