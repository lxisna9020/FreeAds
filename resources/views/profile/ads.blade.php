<x-layout>
    <x-slot name="header">
        <x-header/>
    </x-slot>
  
    <div class="bg-white shadow">
        <div class="flex justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Mes annonces
            </h1>
            <div>
                <a href="{{route ('ads.create')}}" title="Creation d'une annonce" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">
                Créer une annonce </a>
            </div>
        </div>
    </div>

    <div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        @if(session('success'))
            <div class="bg-green-600 text-white p-4 text-sm mb-4">{{ session('success') }}</div>
        @endif

        @if (Auth::guest())
            <div class="bg-red-600 text-white p-4 text-sm mb-4">
                Tu n'es pas connecté(e) voyons ! 🙅‍♂️🙅‍♀️
            </div>
            <p>Connecte-toi ou crée ton compte :</p>
            <a href="{{ route('login') }}" title="lien vers la page de Connexion si tu as deja un compte cree" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">Connexion</a>
            <a href="{{ route('register') }}" title="lien vers la page d'inscription si tu n'as pas encore de compte Pawrfect" class="px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Inscription</a>
        @endif

        @if(Auth::check())

            @if (count($annonces)<1)
                <p class="text-center my-6 mb-4">
                    Souris 🐭 <span class="text-sm text-gray-500">(ça veut dire désolé en anglais)</span>,<br> mais tu n'as pas encore créé d'annonce.<br>
                    <a href="{{ route('ads.create') }}" title="lien vers la page de creation d'annonces personnelles" class="mt-4 inline-block mx-auto px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Je crée ma première annonce</a>
                </p>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-4">
                    @foreach($annonces as $annonce)
                        <div class="flex">
                            <div class="flex-none w-44 relative">
                                <a href="{{ route('ads.show', $annonce->id)}}" title="Lien vers le detail de l'annonce" class="flex items-center justify-center">
                                    <img src="{{ asset('storage/' . $annonce->image['image']) }}" alt="Image representant ton animal de type {{$annonce->type}} de sexe {{$annonce->sexe}} correspondant a l'annonce nommée {{$annonce->name}}" class="absolute inset-0 w-full h-full object-cover rounded-lg" />
                                </a>
                            </div>
                            <div class="flex pl-6 items-center">
                                <div class="flex flex-wrap items-baseline">
                                    <h1 class="w-full text-xl flex-none font-bold uppercase">{{ $annonce->name }}</h1>
                                    <p class="w-full text-sm text-gray-500">
                                        {{ $annonce->type }} 
                                        @if ($annonce->sexe === "Femelle")
                                            🚺
                                        @else
                                            🚹
                                        @endif
                                    </p>
                                    <p class="w-full text-xs text-gray-500">Taille : {{ $annonce->taille }}</p>
                                    <p class="w-full text-xs text-gray-500 mb-2.5">Age : {{ $annonce->ageanimal }}</p>
                                    
                                    <div class="w-full text-2xl mb-4 font-bold text-indigo-600">
                                        {{ $annonce->price }}€
                                    </div>
                                    <div>
                                        <a href="{{ route('ads.edit', $annonce->id)}}" title="lien vers la page de modification de cette annonce" class="px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Modifier</a>
                                        <form action="{{ route('ads.destroy', $annonce->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="mt-4 text-sm text-indigo-600 hover:underline" type="submit">🗑 Supprimer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        {{-- <div>
            <span class="text-xs text-gray-600">Retour a la niche</span>
            <a href="{{route ('ads.index')}}" title="retour a la page principale" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">
            go back to reality</a>
        </div> --}}

        @endif
    </div>

    <x-slot name="footer">
      <x-footer/>
    </x-slot>
  </x-layout>