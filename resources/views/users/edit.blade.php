@extends('layouts.app')
@section('content')<h1>Edit User</h1><form method="POST" enctype="multipart/form-data" action="{{ route('users.update', $user) }}">@method('PUT')@include('users.form', ['showAvatar' => true])</form>@endsection
