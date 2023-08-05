@extends('layouts.xss_template')

@section('title')
    クロスサイト・スクリプティング(XSS)
@endsection

@section('example')
    {{ $example }}
@endsection

@section('cont-example')
    脆弱例
@endsection

@section('cont')
    <p>テキストを投稿してね</p>
    <form action="{{ route('post_xss') }}" method="post">
        @csrf
        <input type="text" name="text">
        <input type="hidden" name="mode" value="unm">
        <input type="submit" value="投稿">
    </form>
    <p>投稿文</p>
    @isset ( $obj )
        <ul>
            @foreach ($obj as $data)
                <li>{!! $data->comment !!}</li>
            @endforeach
        </ul>
    @endisset
@endsection

@section('link')
    <a href="{{ route('get_xss') }}">XSS TOPページへ</a>
@endsection