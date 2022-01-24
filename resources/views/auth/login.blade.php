<x-guest-layout>
    <div class="w-full max-w-xs sm:max-w-md mb-10 px-6 py-4 border border-indigo-600 rounded-lg bg-white overflow-hidden">
        <h1 class="text-3xl text-center m-4 text-indigo-700">{{ __('Connexion') }}</h1>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Username / Email') }}" />
                <!-- Too allow Username / Email -->
                <!-- type="username" name="email" -->
                <x-jet-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Mot de passe') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                </label>
            </div>

            <div class="flex flex-col items-center justify-end mt-4">
                <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">
                    {{ __('Connexion') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié ?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-guest-layout>
