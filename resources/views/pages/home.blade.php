@extends('layouts.app')

@section('content')
    <section class="hero">
        <p class="eyebrow">Laravel POS Application</p>
        <h1>Simple tools for a smoother point of sale.</h1>
        <p class="lead">A four-page Laravel foundation for organizing customers, users, and future POS features in one clear workspace.</p>
        <div class="actions">
            <a class="button" href="{{ route('customers.index') }}">View customers</a>
            <a class="button secondary" href="{{ route('about') }}">Learn about the project</a>
        </div>
    </section>

    <section class="card-grid">
        <article class="feature-card"><h2>Customer Accounts</h2><p>Review customer contact details and account status from a dedicated listing page.</p><a href="{{ route('customers.index') }}">Open page &rarr;</a></article>
        <article class="feature-card"><h2>User Accounts</h2><p>Keep track of staff accounts, roles, and access status for the POS team.</p><a href="{{ route('users.index') }}">Open page &rarr;</a></article>
        <article class="feature-card"><h2>Laravel Structure</h2><p>Routes, controllers, Blade views, migrations, and seeders are organized using Laravel conventions.</p><a href="{{ route('about') }}">Read more &rarr;</a></article>
    </section>
@endsection
