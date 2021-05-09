<x-guest-layout>
    <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="pt-32 pb-12 md:pt-40 md:pb-20">
            <div class="max-w-3xl mx-auto text-center pb-8 sm:pb-12 md:pb-14">
                <h1 class="text-5xl sm:text-6xl font-semibold mb-4 sm:mb-6 lg:mb-8">
                    Welcome.
                </h1>
            </div>

            <div class="max-w-sm mx-auto">

                <x-jet-validation-errors class="mb-4 bg-red-200 rounded-md p-2"/>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-jet-label for="name">
                            {{ __('Name') }} <span class='text-red-600'>*</span>
                        </x-jet-label>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                                     required
                                     autofocus autocomplete="name"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="email">
                            {{ __('Email') }} <span class='text-red-600'>*</span>
                        </x-jet-label>
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                     :value="old('email')"
                                     required/>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password">
                            {{ __('Password') }} <span class='text-red-600'>*</span>
                        </x-jet-label>
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                     autocomplete="new-password"/>
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation">
                            {{ __('Confirm Password') }} <span class='text-red-600'>*</span>
                        </x-jet-label>
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                     name="password_confirmation" required autocomplete="new-password"/>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif


                    <div class="flex flex-wrap -mx-3 mt-6">
                        <div class="w-full px-3">
                            <button class="py-3 text-white rounded-md bg-blue-600 hover:bg-blue-700 w-full">
                                {{__('Sign up')}}
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-gray-600 text-center mt-6">
                    {{__('Already have an account?')}}
                    <a class="text-blue-600 hover:underline transition duration-150 ease-in-out"
                       href="{{ route('login') }}">
                        {{__('Sign in')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
