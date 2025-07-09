<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        @include('layouts.navigation')

        <!-- HEADER -->
        <header class="header">
            <span class="header__span">We Make Your Feel Comfortable</span>
            <div class="header__div">
                <div class="header__div__hamburguer" id="hamburguerMenu">
                    <span class="header__div__hamburguer__span"></span>
                    <span class="header__div__hamburguer__span"></span>
                    <span class="header__div__hamburguer__span"></span>
                </div>
                <a href="{{ url('/') }}">
                    <img
                        class="header__div__logo"
                        src="./assets/images/title.svg"
                        alt="Hotel Miranda"
                        />
                </a>
                <nav class="header__div__nav">
                    <ul class="header__div__nav__list">
                        <li class="header__div__nav__list__item">
                            <a
                                href="{{ url('/about') }}"
                                class="header__div__nav__list__link"
                                >About Us</a
                            >
                        </li>
                        <li class="header__div__nav__list__item">
                            <a href="{{ url('/rooms') }}" class="header__div__nav__list__link"
                               >Rooms</a
                            >
                        </li>
                        <li class="header__div__nav__list__item">
                            <a href="{{ url('/offers') }}" class="header__div__nav__list__link"
                               >Offers</a
                            >
                        </li>
                        <li class="header__div__nav__list__item">
                            <a
                                href="{{ url('/contact') }}"
                                class="header__div__nav__list__link"
                                >Contact</a
                            >
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header__icons">
                <img
                    src="assets/images/icons/human.svg"
                    class="header__icons__icon"
                    alt="User Icon"
                    />
                <img
                    src="assets/images/icons/lupa.svg"
                    class="header__icons__icon"
                    alt="Search Icon"
                    />
            </div>
        </header>

        <!-- Page Content -->
        <main>
            @yield('content')
        </main>        

    </body>

</html>

<script type="module" src="{{ asset('js/script.js')}}"></script>
