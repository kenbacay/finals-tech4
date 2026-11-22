<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'POS Foundations' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="site-header">
        <nav class="navbar container">
            <a class="brand" href="{{ route('home') }}">POS<span>Foundations</span></a>
            <div class="nav-links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('about') }}">About</a>
                <a href="{{ route('customers.index') }}">Customers</a>
                <a href="{{ route('users.index') }}">Users</a>
            </div>
        </nav>
    </header>

    <main class="container page-content">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">Laravel POS Foundations &middot; IT0049 Web System Technologies</div>
    </footer>
</body>
</html>
