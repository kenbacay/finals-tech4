@extends('layouts.app')
@section('content')<h1>Edit Customer</h1><form method="POST" action="{{ route('customers.update', $customer) }}">@method('PUT')@include('customers.form')</form>@endsection
