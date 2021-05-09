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
        <x-jet-validation-errors class="mb-4 bg-red-200 rounded-md p-2"/>
        <form method="POST" action="{{ route('password.update') }}">
          @csrf

          <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <div class="block">
            <x-jet-label for="email" value="{{ __('Email') }}"/>
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                         :value="old('email', $request->email)" required autofocus/>
          </div>

          <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}"/>
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                         autocomplete="new-password"/>
          </div>

          <div class="mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"/>
            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                         name="password_confirmation" required autocomplete="new-password"/>
          </div>

          <x-button>
            {{ __('Reset Password') }}
          </x-button>
        </form>
      </div>
</x-guest-layout>
