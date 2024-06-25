<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/115af40c39.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css'])
</head>
<body>
    <x-admin.header/>
    <div class="container">
        <div class="admin-block">
        <x-admin.aside/>
        <div class="admin-wrap">
            @yield('content')
        </div>
    </div>
    </div>
    @yield('scripts')
</body>
</html>
