<x-layout>
  <x-slot name="header">
      <x-header/>
  </x-slot>

  <div class="bg-white shadow">
      <div class="flex justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $annonce->type }} à adopter
          </h1>
          <div>
              <a href="/search" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">
              Retour à la liste des annonces </a>
          </div>
      </div>
  </div>

  <div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    <div class="flex">
      <div class="flex-none w-full md:w-2/3 relative">
        <img src="{{ asset('storage/' . $annonce->image['image']) }}" alt="Image representant l'animal de type {{$annonce->type}} de sexe {{$annonce->sexe}} correspondant a l'annonce nommée {{$annonce->name}}" class="w-full h-full rounded-lg" />
      </div>
      <div class="flex pl-6 items-center">
        <div class="flex flex-wrap items-baseline">
          <p class="text-xs">Annonce créée le : {{$annonce->created_at}}</p>
          <h1 class="w-full text-4xl flex-none font-bold uppercase">{{ $annonce->name }}</h1>
          <p class="w-full text-gray-500">
              {{ $annonce->type }} 
              @if ($annonce->sexe === "Femelle")
                  🚺
              @else
                  🚹
              @endif
          </p>
          <p class="w-full text-gray-500">Taille : {{ $annonce->taille }}</p>
          <p class="w-full text-gray-500 mb-2.5">Age : {{ $annonce->ageanimal }}</p>
          
          <div class="w-full text-2xl mb-4 font-bold text-indigo-600">
              {{ $annonce->price }}€
          </div>

          <p class="w-full mb-8"><span class="text-sm text-gray-600">En savoir plus :</span><br>{{ $annonce->description }}</p>

          <a href="" class="px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Je l'adopte !</a>
        </div>
      </div>
    </div>
  </div>


  <x-slot name="footer">
    <x-footer/>
  </x-slot>
</x-layout>