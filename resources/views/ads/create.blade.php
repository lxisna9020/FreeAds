<x-layout>
  <x-slot name="header">
      <x-header/>
  </x-slot>




  @if (Auth::guest())
          <div>
            <span class="text-xs text-gray-600">tu n'es pas connecté (e) voyons! ?</span>
            <a href="http://127.0.0.1:8000/" title="Retour Accueil" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">
            Retour a la page d'accueil, pour te connecter ou creer ton compte Amigo/Amiga </a>
          </div>        
  @endif


  
  @if(Auth::check())
  <div class="bg-white shadow">
      <div class="flex justify-between max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter une annonce
          </h2>

          <div>
            <span class="text-xs text-gray-600">Not ready pour me separer de lui/elle ?</span>
            <a href="{{route ('ads.index')}}" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">
            Retour aux annonces </a>
          </div>
      </div>
  </div>

  <div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

    @if ($errors->any())
      <div class="bg-red-600 text-white p-4 text-sm mb-4">
        @foreach ($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    <form class="flex flex-wrap w-full" method="post" action="{{ route('ads.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="w-full md:w-1/3">
        <label class="block font-medium text-sm text-gray-700" for="image">Photo :</label>
        <input type="file" class="block my-2" id="image" name="image" accept="image/png, image/jpeg" required>
      </div>

      <div class="w-full md:w-2/3">
        <div class="">
          <label class="block font-medium text-sm text-gray-700" for="email">Nom de l'Ane once :</label>
          <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="text" name="name" required />
        </div>
        
        <div class="mt-4">
          <label class="block font-medium text-sm text-gray-700">Type :</label>
          <select name="type" id="type" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
              @php
                  $options = ['Chat', 'Chien', 'VolailleOiseau', 'Nac', 'Rongeur'];
              @endphp

              @foreach ($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
              @endforeach
          </select>
        </div>

        <div class="mt-4">
          <label class="block font-medium text-sm text-gray-700">Âge :</label>
          <select name="ageanimal" id="ageanimal" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            @php
                $options = ['Jeune', 'Adulte'];
            @endphp

            @foreach ($options as $option)
              <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
          </select>
        </div>

        <div class="mt-4">
          <label class="block font-medium text-sm text-gray-700">Taille :</label>
          <select name="taille" id="taille" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            @php
                $options = ['Petit', 'Moyen', 'Grand'];
            @endphp

            @foreach ($options as $option)
              <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
          </select>
        </div>

        <div class="mt-4">
          <label class="block font-medium text-sm text-gray-700">Sexe :</label>
          <select name="sexe" id="sexe" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
            @php
                $options = ['Femelle', 'Male'];
            @endphp

            @foreach ($options as $option)
              <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
          </select>
        </div>

        <div class="mt-4">
          <label class="block font-medium text-sm text-gray-700" for="description">Description: <span class="text-sm text-gray-600">(ex: Un chien vaut mieux que deux tu l'auras)</span></label>
          <textarea name="description" cols="30" rows="10" class="mt-1 h-40 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
        </div>

        <div class="mt-4 mb-8">
          <label class="block font-medium text-sm text-gray-700" for="price">Prix :</label>
          <input type="number" min="0" max="2999.5" step="0.50" class="block w-40 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="price" required/>
        </div>
        
        <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Ajouter</button>
      </form>
  </div>
</div>
@endif


  <x-slot name="footer">
    <x-footer/>
  </x-slot>
</x-layout>