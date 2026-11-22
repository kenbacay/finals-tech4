@extends('layouts.app')

@section('content')
    <section class="page-heading">
        <p class="eyebrow">About the application</p>
        <h1>Built with Laravel MVC.</h1>
        <p class="lead">This activity demonstrates how routes, controllers, and Blade templates work together to produce a small POS application.</p>
    </section>
    <section class="content-panel">
        <h2>How the application works</h2>
        <p>A route receives the browser request and sends it to the correct controller method. The controller prepares the response and passes data to a Blade view. The Blade view renders the final HTML page for the user.</p>
        <div class="process-list">
            <div><strong>01</strong><span><b>Routes</b><br>Connect URLs such as <code>/customers</code> to controller actions.</span></div>
            <div><strong>02</strong><span><b>Controllers</b><br>Store the temporary PHP arrays and select the correct view.</span></div>
            <div><strong>03</strong><span><b>Blade views</b><br>Display the pages and loop through records using <code>@foreach</code>.</span></div>
        </div>
    </section>
@endsection
