<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Todolist Laravel') }}</title>
    <!-- Fonts -->
    
<style type="text/css">
    .bodycontent{
        padding-left: 4rem !important;
        padding-right: 5rem !important;
    }
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <h1>Todo list</h1>
            </div>
        </nav>

        <main class="py-4 bodycontent">
            @yield('content')
        </main>
    </div>
</body>
</html>
