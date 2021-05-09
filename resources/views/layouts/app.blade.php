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

  @livewireStyles

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">
<x-jet-banner/>
<div class="flex h-screen bg-gray-200">
  <div class="flex">
    <div class="hidden fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
    <div class="-translate-x-full ease-in fixed z-30 inset-y-0 left-0 w-64 transition
            duration-300 transform bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0"
    >
      <div class="flex items-center justify-center mt-8">
        <div class="flex items-center">
          <span class="text-white text-2xl mx-2 font-semibold">EPTIC ITAM</span></div>
      </div>
      <nav class="mt-10">
        <a href="{{ route('dashboard') }}"
           class="router-link-exact-active flex items-center duration-200 mt-4 py-2 px-6 border-l-4 bg-gray-600 bg-opacity-25 text-gray-100 border-gray-100"
           aria-current="page"
        >
          <i class="fas fa-chart-pie"></i>
          <span class="mx-4">Dashboard</span>
        </a>
        <a href="{{ route('employees') }}"
           class="flex items-center duration-200 mt-4 py-2 px-6 border-l-4 border-gray-900
                   text-gray-500 hover:bg-gray-600 hover:bg-opacity-25 hover:text-gray-100"
        >
          <i class="fas fa-users"></i>
          <span class="mx-4">Employees</span>
        </a>
      </nav>
    </div>
  </div>

  <!-- Page Content -->
  <div class="flex-1 flex flex-col overflow-hidden">
    <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
      <div class="flex items-center">
        <button class="text-gray-500 focus:outline-none lg:hidden">
          <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round"></path>
          </svg>
        </button>
        <div class="relative mx-4 lg:mx-0"><span class="absolute inset-y-0 left-0 pl-3 flex items-center"><svg
              class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none"><path
                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round"></path></svg></span><input
            class="w-32 sm:w-64 rounded-md pl-10 pr-4 focus:border-indigo-600" type="text"
            placeholder="Search"></div>
      </div>
      <div class="flex items-center">
        <livewire:navbar-notifications/>
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" @click.away="open = false"
                  class="relative z-10 block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
            <img class="h-full w-full object-cover"
                 src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80"
                 alt="Your avatar">
          </button>
          <div x-show="open"
               x-transition:enter="transition ease-out duration-100"
               x-transition:enter-start="opacity-0 transform scale-95"
               x-transition:enter-end="opacity-100 transform scale-100"
               x-transition:leave="transition ease-in duration-75"
               x-transition:leave-start="opacity-100 transform scale-100"
               x-transition:leave-end="opacity-0 transform scale-95"
               class="absolute border border-gray-300 right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20"
               style="display: none;">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
              Profile
            </a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
              Products
            </a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button
                 class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">
                Log out
              </button>
            </form>
          </div>
        </div>
      </div>
    </header>
    <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
      <div class="container mx-auto px-6 py-8">
        {{ $slot }}
      </div>
    </main>
  </div>
</div>
</div>
@stack('modals')

@livewireScripts
</body>
</html>
