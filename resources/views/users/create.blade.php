@extends('layouts.app')
@section('content')<h1>Create User</h1><form method="POST" action="{{ route('users.store') }}">@include('users.form', ['showAvatar' => false])</form>@endsection
