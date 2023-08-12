@extends('layouts.csrf_template')

@section('head-link')
    <link rel="stylesheet" href="{{ asset('/css/csrf_edit.css') }}">
@endsection

@section('cont')
    <h2>アカウント情報　編集</h2>
    <form action="{{ route('post_csrf_rem_edit') }}" method="post">
        @csrf
        <p>ユーザー名</p>
        <input type="text" name="new_name" value="{{ $name }}">
        <p>メールアドレス</p>
        <input type="text" name="new_email" value="{{ $email }}">
        <p>パスワード</p>
        <input type="password" name="password" required>
        <br>
        <button class="submit-button" type="submit">編集</button>
    </form>
@endsection