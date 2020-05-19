<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CIS2167 Coursework 2</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
<div id="app">
    <div class="grid-container full">
        <div class="grid-x grid-margin-x">
            <div class="small-12 cell">
                <div class="top-bar">
                    <div class="top-bar-left">
                        <ul class="menu">
                            <li class="menu-text"><a href="/">CIS2167 Coursework 2</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-right">
                        <ul class="menu">
                            <!-- Guest only Section -->
                            @guest
                            <li>
                            <!-- Login Link -->
                                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- If statement for if Route has Register View -->
                            @if (Route::has('register'))
                            <li>
                            <!-- Register Link -->
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif @else
                            <li>
                                <a>
                                    <!-- Calls for the User's Name -->
                                    {{ Auth::user()->name }}
                                </a>
                            <li>
                            <li>
                                <!-- On Click even for Loging Out -->
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                </a>
                            </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf <!-- Cross site Request -->
                                </form>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-x grid-padding-y">
        <div class="cell small-1">
        </div>
            <div class="cell small-10">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>