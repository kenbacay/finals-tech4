@extends('layouts.app')

@section('content')
    <div class="page-heading compact"><p class="eyebrow">Accounts</p><h1>Customer Accounts</h1><p class="lead">Customer records retrieved from the database using Eloquent.</p></div>
    <section class="table-panel">
        <div class="panel-header"><h2>All customers</h2><span class="count">{{ $customers->count() }} records</span></div>
        <div class="table-wrap"><table><thead><tr><th>ID</th><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
            @foreach ($customers as $customer)
                <tr><td>{{ $customer->id }}</td><td class="strong">{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
            @endforeach
        </tbody></table></div>
    </section>
@endsection
