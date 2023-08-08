@extends('layouts.template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/xss.css') }}">
@endsection

@section('title')
    クロスサイト・スクリプティング(XSS)
@endsection

@section('level')
    <span style="color: yellow;">中</span>
@endsection

@section('damage-list')
    <li class="damage-list">ウェブページの改ざん</li>        
    <li class="damage-list">Cookieの漏洩</li>
@endsection

@section('bad-cont')
    <p class="link"><a href="{{ route('get_unm_xss') }}">脆弱例</a></p>
@endsection
    
@section('good-cont')
    <p class="link"><a href="{{ route('get_rem_xss') }}">対策例</a></p>
@endsection    
    
@section('link')
    <p class="link"><a href="{{ route('home') }}">ホームへ</a></p>
@endsection