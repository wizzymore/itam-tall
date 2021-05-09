<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{ mix('css/fa.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
<div class="font-sans text-gray-900 antialiased">
    @if (Route::has('login') && !(request()->routeIs('login') || request()->routeIs('register')))
        <div class="fixed flex top-0 right-0 px-6 py-4 block">
            @auth
                You fucked up mate, you sure this is a guest page?
            @else
                <a class="font-medium text-gray-600 hover:text-gray-900 px-5 py-2 flex items-center transition duration-150 ease-in-out"
                   href="{{ route('login') }}" style="outline: currentcolor none medium;">Sign in</a>

                @if (Route::has('register'))
                    <a class="border border-transparent rounded inline-flex items-center justify-center font-semibold leading-5 px-4 text-gray-200 bg-gray-900 hover:bg-gray-800 ml-3"
                       href="{{ route('register') }}"
                       style="outline: currentcolor none medium;"><span>Sign up</span>
                        <svg class="w-3 h-3 fill-current text-gray-400 flex-shrink-0 ml-2 -mr-1" viewBox="0 0 12 12"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.707 5.293L7 .586 5.586 2l3 3H0v2h8.586l-3 3L7 11.414l4.707-4.707a1 1 0 000-1.414z"
                                fill-rule="nonzero"></path>
                        </svg>
                    </a>
                @endif
            @endauth
        </div>
    @endif
    {{ $slot }}
</div>
</body>
</html>
