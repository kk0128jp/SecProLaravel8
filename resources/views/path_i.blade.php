@extends('layouts.template')

@section('title')
    ディレクトリトラバーサル
@endsection

@section('level')
    <span style="color: red;">高</span>
@endsection

@section('damage-list')
    <li>不正なファイル閲覧、改ざん、削除</li>
@endsection
        
@section('example')
    ../.env
@endsection

@section('bad-cont')
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <p>ファイルパスを入れてね</p>
        <input type="text" name="path">
        <input type="hidden" name="measures" value="unmeasured">
        <input type="submit" value="送信">
    </form>
@endsection
    
@section('good-cont')
    <ul>
        <li>外部からファイルパスを受け取らない</li>
        <li>basename()の使用</li>
    </ul>
    <form action="{{ route('post_path_i') }}" method="post">
        @csrf
        <input type="text" name="path">
        <input type="hidden" name="measures" value="remedied">
        <input type="submit" value="送信">
    </form>
    @isset( $e_msg )
        {{ $e_msg }}
    @endisset

@endsection

@section('link')
    <p><a href="{{ route('home') }}">ホームへ</a></p>
@endsection