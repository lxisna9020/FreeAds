<x-guest-layout>

    <div class="w-full max-w-xs sm:max-w-md mb-10 px-6 py-4 border border-indigo-600 rounded-lg bg-white overflow-hidden">
        <h1 class="text-3xl text-center m-4 text-indigo-700">{{ __('Vérifiez vos emails') }}</h1>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Merci de vous être inscrit, vérifiez vos emails pour valider votre compte en cliquant sur le lien. Si vous n\'avez pas reçu l\'email, vous pouvez faire une nouvelle demande.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nouveau lien a été envoyé par email.') }}
            </div>
        @endif

        <div class="flex flex-col items-center justify-end mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">
                        {{ __('Renvoyer un mail') }}
                    </button>
                </div>
            </form>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="text-sm text-indigo-600 hover:underline">
                    {{ __('Déconnexion') }}
                </button>
            </form>
        </div>
    </div>
</x-guest-layout>
