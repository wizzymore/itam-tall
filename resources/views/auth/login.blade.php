<x-guest-layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
            <div class="max-w-3xl mx-auto text-center pb-8 sm:pb-12 md:pb-14">
                <h1 class="text-5xl sm:text-6xl font-semibold mb-4 sm:mb-6 lg:mb-8">
                    Welcome back.
                </h1>
            </div>
            <div class="max-w-sm mx-auto">

                <x-jet-validation-errors class="mb-4 bg-red-200 rounded-md p-2"/>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <x-jet-label for="email" value="{{ __('Email') }}"/>
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                         :value="old('email')"
                                         required autofocus/>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <div class="flex justify-between">
                                <x-jet-label for="password" value="{{ __('Password') }}"/>
                                @if (Route::has('password.request'))
                                    <a class="text-sm font-medium text-blue-600 hover:underline"
                                       href="{{ route('password.request') }}">
                                        {{ __('Having trouble signing in?') }}
                                    </a>
                                @endif
                            </div>
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                         required
                                         autocomplete="current-password"/>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <div class="flex justify-between">
                                <label class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember"/>
                                    <span class="ml-2 text-gray-600">{{ __('Keep me signed in') }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mt-6">
                        <div class="w-full px-3">
                            <button class="py-3 text-white rounded-md bg-blue-600 hover:bg-blue-700 w-full">
                                {{__('Sign in')}}
                            </button>
                        </div>
                    </div>
                </form>
                @if (Route::has('register'))
                    <div class="text-gray-600 text-center mt-6">
                        {{__('Don’t have an account?')}}
                        <a class="text-blue-600 hover:underline transition duration-150 ease-in-out"
                           href="{{ route('register') }}">
                            {{__('Sign up')}}
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-guest-layout>
