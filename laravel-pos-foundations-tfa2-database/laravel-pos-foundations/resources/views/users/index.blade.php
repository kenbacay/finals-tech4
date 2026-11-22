@extends('layouts.app')

@section('content')
    <div class="page-heading compact"><p class="eyebrow">Accounts</p><h1>User Accounts</h1><p class="lead">User records retrieved from the database using Eloquent.</p></div>
    <section class="table-panel">
        <div class="panel-header"><h2>POS users</h2><span class="count">{{ $users->count() }} records</span></div>
        <div class="table-wrap"><table><thead><tr><th>ID</th><th>Username</th><th>Full Name</th></tr></thead><tbody>
            @foreach ($users as $user)
                <tr><td>{{ $user->id }}</td><td class="strong">{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>
            @endforeach
        </tbody></table></div>
    </section>
@endsection
