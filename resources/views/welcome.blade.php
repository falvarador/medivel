<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif

</head>

<body>
    <section class="section">
        <div class="container">
            <h1 class="title">
                Medivel
            </h1>
            <p class="subtitle">
                It is a Medium clone, but more <strong>❤️🚀👌🏻</strong>
            </p>
            <a href="{{ route('login') }}" class="button">Login</a>
        </div>
    </section>
</body>

</html>