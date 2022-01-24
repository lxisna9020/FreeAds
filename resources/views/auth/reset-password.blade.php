<x-guest-layout>
    <div class="w-full max-w-xs sm:max-w-md mb-10 px-6 py-4 border border-indigo-600 rounded-lg bg-white overflow-hidden">
        <h1 class="text-3xl text-center m-4 text-indigo-700">{{ __('Réinitialiser le mot de passe') }}</h1>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirmer le mot de passe') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex flex-col items-center justify-end mt-4">
                <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">
                    {{ __('Réinitialiser le mot de passe') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
