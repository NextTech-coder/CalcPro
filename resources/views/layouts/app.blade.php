<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content=@yield('description') />
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:title" content=@yield('title') />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:description" content=@yield('description') />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <script src="https://kit.fontawesome.com/115af40c39.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css'])
</head>

<body class="public-body">
    <x-app.navbar />

    <x-app.sidebar />

    <main class="main-content">
        @yield('content')
    </main>

    <x-app.footer />

    @vite(['resources/js/app.js'])
    @yield('scripts')
</body>

</html>
