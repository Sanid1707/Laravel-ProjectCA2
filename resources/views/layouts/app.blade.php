<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
    <header class="bg-white py-6">
    <div class="container mx-auto flex justify-between items-center px-6">
        <nav class="space-x-4 text-black text-lg sm:text-xl">
            <a class="no-underline hover:underline" href="/">Home</a>
            <a class="no-underline hover:underline" href="/blog">Blog</a>
        </nav>
        <h1 class="text-4xl font-semibold text-black text-center">
            Travel Blog
        </h1>
        <nav class="space-x-4 text-black text-lg sm:text-xl">
            @guest
                <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                @endif
            @else
                <a href="/profile/{{ Auth::user()->username }}" class="no-underline hover:underline">{{ Auth::user()->name }}</a>

                <a href="{{ route('logout') }}"
                   class="no-underline hover:underline"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            @endguest
        </nav>
    </div>
</header>


        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
    </div>
</body>
</html>
