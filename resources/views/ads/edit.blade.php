<x-layout>
  <x-slot name="header">
      <x-header/>
  </x-slot>

  <div class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <h1 class="font-semibold text-xl text-gray-800 leading-tight">
            Modifier ton annonce
          </h1>
      </div>
  </div>

  <div class="container max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    
    @if(session('success'))
        <div class="bg-green-600 text-white p-4 mb-4 text-sm">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
      <div class="bg-red-600 text-white p-4 mb-4 text-sm">{{ session('success') }}</div>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
      </div>
    @endif

    @if ($ad->user_id == Auth::id())
      <form class="flex flex-wrap w-full" method="post" action="{{ route('ads.update', $ad->id ) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="w-full md:w-1/3">
          <label class="block font-medium text-sm text-gray-700" for="image">Photo :</label>
          <div class="flex-none w-44 h-40 mb-4 relative">
            <img src="{{ asset('storage/' . $ad->image['image']) }}" alt="Image representant l'animal de type {{$ad->type}} de sexe {{$ad->sexe}} correspondant a l'annonce nommée {{$ad->name}}" class="absolute inset-0 w-full h-full object-cover rounded-lg" />
          </div>

          <label class="block font-medium text-sm text-gray-700" for="image">Remplacer la photo :</label>
          <input type="file" class="block my-2" id="image" name="image" accept="image/png, image/jpeg">
        </div>

        <div class="w-full md:w-2/3">
            <div class="">
              <label class="block font-medium text-sm text-gray-700" for="email">Nom :</label>
              <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="email" type="text" name="name" value="{{ $ad->name }}" />
            </div>
            
            <div class="mt-4">
              <label class="block font-medium text-sm text-gray-700">Type :</label>
              <select name="type" id="type" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                  @php
                      $options = ['Chat', 'Chien', 'VolailleOiseau', 'Nac', 'Rongeur'];
                  @endphp

                  @foreach ($options as $option)
                    <option value="{{ $option }}"
                    @if ($ad->type === $option)
                      selected
                    @endif
                    >{{ $option }}</option>
                  @endforeach
              </select>
            </div>

            <div class="mt-4">
              <label class="block font-medium text-sm text-gray-700">Âge :</label>
              <select name="ageanimal" id="ageanimal" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @php
                    $options = ['Jeune', 'Adulte'];
                @endphp

                @foreach ($options as $option)
                  <option value="{{ $option }}"
                  @if ($ad->ageanimal === $option)
                    selected
                  @endif
                  >{{ $option }}</option>
                @endforeach
              </select>
            </div>

            <div class="mt-4">
              <label class="block font-medium text-sm text-gray-700">Taille :</label>
              <select name="taille" id="taille" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @php
                    $options = ['Petit', 'Moyen', 'Grand'];
                @endphp

                @foreach ($options as $option)
                  <option value="{{ $option }}"
                  @if ($ad->taille === $option)
                    selected
                  @endif
                  >{{ $option }}</option>
                @endforeach
              </select>
            </div>

            <div class="mt-4">
              <label class="block font-medium text-sm text-gray-700">Sexe :</label>
              <select name="sexe" id="sexe" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @php
                    $options = ['Femelle', 'Male'];
                @endphp

                @foreach ($options as $option)
                  <option value="{{ $option }}"
                  @if ($ad->sexe === $option)
                    selected
                  @endif
                  >{{ $option }}</option>
                @endforeach
              </select>
            </div>

            <div class="mt-4">
              <label class="block font-medium text-sm text-gray-700" for="description">Description:</label>
              <textarea name="description" cols="30" rows="10" class="mt-1 h-40 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ $ad->description }}</textarea>
            </div>

            <div class="mt-4 mb-8">
              <label class="block font-medium text-sm text-gray-700" for="price">Prix :</label>
              <input type="number" min="0" max="2999.5" step="0.50" class="block w-40 mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="price" value="{{ $ad->price }}" required/>
            </div>
            
            <button type="submit" class="mb-4 px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Modifier</button>
      </form>

      @else
        <div>
          <p class="text-center">
            Coquinou lapinou 🐰, <br>tu essaies de modifier une annonce qui ne t'appartient pas 🙅‍♀️🙅‍♂️<br>
            <a href="/profile/ads" title ="Retour a la section Mes annonces" class="inline-block mt-4 px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">
            Voir mes annonces</a>
          </p>
        </div>
      @endif


    </div>
  </div>


  <x-slot name="footer">
    <x-footer/>
  </x-slot>
</x-layout>