@extends('layouts.xss_template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/xss_unm.css') }}">
@endsection

@section('level')
    <span style="color: yellow;">中</span>
@endsection

@section('title')
    クロスサイト・スクリプティング(XSS)
@endsection

@section('example')
    {{ $example }}
@endsection

@section('cont-example')
    対策例
@endsection

@section('cont')
    <p>テキストを投稿してね</p>
    <form action="{{ route('post_xss') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" name="mode" value="rem">
        <button class="submit-button" type="submit">投稿</button>
    </form>
    <p>投稿文</p>
    @isset ( $obj )
        <ul>
            @foreach ($obj as $data)
                <li class="post-list">{{ $data->comment }}</li>
            @endforeach
        </ul>
    @endisset
@endsection

@section('link')
    <a href="{{ route('get_xss') }}">XSS TOPページへ</a>
@endsection