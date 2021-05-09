<x-guest-layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
            <div class="max-w-3xl mx-auto text-center pb-8 sm:pb-12 md:pb-14">
                <h1 class="text-5xl sm:text-6xl font-semibold mb-4 sm:mb-6 lg:mb-8">
                    Let’s get you back up on your feet
                </h1>
                <p class="sm:text-xl text-gray-600">
                    Enter the email address you used when you signed up for your account, and we’ll email you a link to
                    reset your password.
                </p>
            </div>
            <div class="max-w-sm mx-auto">
                @if ($errors->any())
                    <div class="mb-4 font-medium text-sm text-red-600">
                        {{ $errors->all()[0] }}
                    </div>
                @endif

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-4">
                        <div class="w-full px-3">
                            <x-jet-label for="email">
                                {{ __('Email') }} <span class='text-red-600'>*</span>
                            </x-jet-label>
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                         :value="old('email')"
                                         required/>
                        </div>
                    </div>
                    <x-button>
                        {{ __('Send reset link') }}
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
