@extends('layouts.csrf_template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/csrf_edit.css') }}">
@endsection

@section('cont')
    <h2>アカウント情報　編集</h2>
    <form action="{{ route('post_csrf_edit') }}" method="post">
        <p class="acc-info">ユーザー名</p>
        <input type="text" name="new_name" value="{{ $name }}">
        <p class="acc-info">メールアドレス</p>
        <input type="text" name="new_email" value="{{ $email }}">
        <br>
        <button class="submit-button" type="submit">編集</button>
    </form>
@endsection