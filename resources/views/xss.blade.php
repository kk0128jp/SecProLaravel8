@extends('layouts.template')

@section('title')
    クロスサイト・スクリプティング(XSS)
@endsection

@section('level')
    <span style="color: yellow;">中</span>
@endsection

@section('damage-list')
    <li>ウェブページの改ざん</li>        
    <li>Cookieの漏洩</li>
@endsection

@section('bad-cont')
    <a href="{{ route('get_unm_xss') }}">脆弱</a>
@endsection
    
@section('good-cont')
    <a href="{{ route('get_rem_xss') }}">良い例</a>
@endsection    
    
@section('link')
    <p><a href="{{ route('home') }}">ホームへ</a></p>
@endsection