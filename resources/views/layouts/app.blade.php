<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'My Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Tuongee</a>
        <div class="d-flex">
            <a href="{{ route('contact.create') }}" class="btn btn-light me-2">Contact</a>
            <a href="{{ route('messages.list') }}" class="btn btn-outline-light">Messages</a>
        </div>
    </div>
</nav>

<div class="container py-4">
    {{-- Page Content Will Go Here --}}
    @yield('content')
</div>

<footer class="text-center py-3 bg-light border-top">
    <small>© {{ date('Y') }} Tuongee. All rights reserved.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
