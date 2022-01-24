<x-guest-layout>
    <div class="w-full max-w-xs sm:max-w-md mb-10 px-6 py-4 border border-indigo-600 rounded-lg bg-white overflow-hidden">
        <h1 class="text-3xl text-center m-4 text-indigo-700">{{ __('Mot de passe oublié ?') }}</h1>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Saisissez votre email, nous vous enverrons un lien de réinitialisation de votre mot de passe si un compte est associé à cet email.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex flex-col items-center justify-end mt-4">
                <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">
                    {{ __('Réinitialiser mon mot de passe') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
