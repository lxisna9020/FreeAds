<x-layout>
  <x-slot name="header">
      <x-header/>
  </x-slot>

  <div class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight">
          Rechercher un animal à adopter
        </h1>
    </div>
  </div>

  <div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    @if ($errors->any())
      <div class="w-full bg-red-600 text-white p-4 mb-4 text-sm">{{ session('success') }}</div>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </div>
    @endif

    <div class="flex flex-wrap w-full">

      <div class="w-full md:w-1/3">
        <h2>Cat🐱égoriser :</h2>
        <form method="get" action="{{ route('search.filter') }}" enctype="multipart/form-data">
          <div class="form-group mb-0 mr-1">
            <input type="text" name="q" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" placeholder="Rechercher un nom">
          </div>

          <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">Type :</label>
            <select name="type" id="type" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              <option value="Tous" selected>Tous</option>
              <option value="Chat">Chat</option>
              <option value="Chien" >Chien</option>
              <option value="VolailleOiseau">VolailleOiseau</option>
              <option value="Nac">Nac</option>
              <option value="Rongeur">Rongeur</option>
            </select>
          </div>

          <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">Âge :</label>
            <select name="ageanimal" id="ageanimal" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              <option value="Tous" selected>Tous</option>
              <option value="Jeune">Jeune</option>
              <option value="Adulte">Adulte</option>
            </select>
          </div>
            
          <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">Taille :</label>
            <select name="taille" id="taille" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              <option value="Tous"selected>Tous</option>
              <option value="Petit">Petit</option>
              <option value="Moyen">Moyen</option>
              <option value="Grand">Grand</option>
            </select>
          </div>

          <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">Sexe :</label>
            <select name="sexe" id="sexe" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              <option value="Tous"selected >Tous</option>
              <option value="Femelle">Femelle</option>
              <option value="Male">Male</option>
            </select>
          </div>

          <div class="mt-4">
            <label class="block font-medium text-sm text-gray-700">Prix :</label>
            <select name="price" id="price" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
              <option value="A"selected>Tous</option>
              <option value="B">de 0 a 500</option>
              <option value="C">de 500 a 1000</option>
              <option value="D">de 1000 a 2000</option>
              <option value="E"> > à 2000</option>
            </select>
          </div>
          <div class="flex flex-wrap justify-between items-center mt-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Filtrer</button>
            <a href="/search" title="reinitialisation des filtres et affichage de toutes les annonces" class="text-sm text-indigo-600 hover:underline">Réinitialiser les filtres</a>
          </div>
        </form>
      </div>

      <div class="w-full pl-4  md:w-2/3">
        @if (count($annonces)<1)
          <p class="text-center my-6">Souris 🐭 <span class="text-sm text-gray-500">(ça veut dire désolé en anglais)</span>,<br> mais aucune poule 🐔 <span class="text-sm text-gray-500">(ni rien d'autres d'ailleurs)</span><br> ne corresPOND 🐣 à ta demande.</p>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-4">
          @foreach($annonces as $annonce)
            <div class="flex">
              <div class="flex-none w-44 relative">
                <a href="{{ route('ads.show', $annonce->id)}}" class="flex items-center justify-center">
                  <img src="{{ asset('storage/' . $annonce->image['image']) }}" alt="Image representant l'animal de type {{$annonce->type}} de sexe {{$annonce->sexe}} correspondant a l'annonce nommée {{$annonce->name}}" class="absolute inset-0 w-full h-full object-cover rounded-lg" />
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
                </div>
              </div>
            </div>
          @endforeach
        </div>
      <div>
    </div>
  </div>

  <x-slot name="footer">
    <x-footer/>
  </x-slot>
</x-layout>