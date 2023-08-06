@extends('layouts.csrf_template')

@section('cont')
    <h2>アカウント情報　編集</h2>
    <form action="{{ route('post_csrf_edit') }}" method="post">
        <p>ユーザー名</p>
        <input type="text" name="new_name" value="{{ $name }}">
        <p>メールアドレス</p>
        <input type="text" name="new_email" value="{{ $email }}">
        <input type="submit" value="編集">
    </form>
@endsection