<x-guest-layout>
    <div class="w-full max-w-xs sm:max-w-md mb-10 px-6 py-4 border border-indigo-600 rounded-lg bg-white overflow-hidden">
        <h1 class="text-3xl text-center m-4 text-indigo-700">{{ __('Restricted area') }}</h1>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex flex-col items-center justify-end mt-4">
                <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">
                    {{ __('Confirm') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
