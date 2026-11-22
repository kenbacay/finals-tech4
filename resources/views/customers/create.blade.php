@extends('layouts.app')
@section('content')<h1>Create Customer</h1><form method="POST" action="{{ route('customers.store') }}">@include('customers.form')</form>@endsection
