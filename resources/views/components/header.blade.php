<header class="h-24">
    <!-- nav -->
    <nav class="fixed px-4 z-50 h-24 select-none w-full bg-white border-b border-gray-200 md:px-0" x-data="{ showMenu: false }">
        <div class="container flex flex-wrap items-center justify-between relative h-24 mx-auto max-w-7xl overflow-hidden font-medium md:overflow-visible lg:justify-end sm:px-4 md:px-8">
            
            {{-- Logo --}}
            <div class="flex items-center justify-start w-1/4 h-full pr-4">
                <a href="/" class="flex items-center flex-shrink-0 py-4 md:py-0 text-black">
                    <svg class="fill-current h-9 w-9 mr-2" width="54" height="54" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="m 40.315,55.809 c -1.08,2.737 -2.669,5.073 -3.778,5.556 -5.13,2.232 -8.208,7.634 -7.484,13.137 0.666,5.06 4.339,8.691 9.587,9.479 2.247,0.337 4.667,0.029 6.798,-0.868 0.686,-0.288 1.301,-0.618 1.897,-0.938 1.006,-0.54 1.882,-1.01 2.813,-1.123 0.931,0.113 1.807,0.583 2.813,1.124 0.596,0.319 1.211,0.65 1.895,0.938 1.563,0.657 3.279,1.003 4.965,1.004 0.615,0 1.233,-0.046 1.835,-0.136 5.247,-0.787 8.921,-4.419 9.586,-9.479 C 71.966,69 68.888,63.598 63.759,61.366 62.65,60.884 61.061,58.547 59.981,55.81 c -0.757,-1.918 -3.038,-7.697 -9.283,-8.119 -0.177,-0.033 -0.354,-0.042 -0.553,-0.028 -0.293,-0.014 -0.392,0 -0.541,0.028 -6.25,0.418 -8.531,6.199 -9.289,8.118 z m 9.734,-4.138 c 0.033,-10e-4 0.065,-0.003 0.098,-0.006 0.033,0.003 0.065,0.005 0.099,0.006 2.707,0.108 4.506,1.785 6.014,5.606 0.743,1.883 2.807,6.407 5.903,7.755 4.088,1.778 5.517,5.885 5.113,8.947 -0.206,1.568 -1.225,5.296 -6.214,6.044 -0.406,0.061 -0.823,0.092 -1.241,0.092 -1.158,0 -2.339,-0.239 -3.414,-0.691 -0.51,-0.214 -1.017,-0.486 -1.554,-0.774 -1.276,-0.685 -2.722,-1.46 -4.551,-1.603 -0.051,-0.004 -0.103,-0.006 -0.154,-0.006 -0.051,0 -0.104,0.002 -0.154,0.006 -1.829,0.142 -3.274,0.917 -4.55,1.602 -0.537,0.288 -1.045,0.561 -1.556,0.775 -1.463,0.615 -3.122,0.829 -4.654,0.599 -4.99,-0.748 -6.008,-4.476 -6.215,-6.044 -0.402,-3.063 1.026,-7.169 5.114,-8.948 3.097,-1.348 5.16,-5.872 5.903,-7.755 1.508,-3.82 3.307,-5.497 6.013,-5.605 z"/><path d="m 25.253,62.305 c 0.433,0 0.867,-0.039 1.292,-0.115 1.996,-0.359 3.779,-1.563 5.022,-3.388 1.715,-2.518 2.3,-5.953 1.606,-9.425 -1.119,-5.604 -5.21,-9.671 -9.728,-9.671 -0.433,0 -0.867,0.039 -1.292,0.115 -1.996,0.36 -3.78,1.563 -5.023,3.389 -1.714,2.518 -2.299,5.953 -1.605,9.424 1.12,5.603 5.21,9.671 9.728,9.671 z M 20.438,45.46 c 0.448,-0.659 1.233,-1.489 2.426,-1.704 0.191,-0.035 0.388,-0.052 0.583,-0.052 2.532,0 5.082,2.835 5.806,6.455 0.477,2.39 0.106,4.778 -0.991,6.39 -0.448,0.659 -1.232,1.488 -2.425,1.703 -2.674,0.486 -5.609,-2.504 -6.389,-6.403 -0.477,-2.388 -0.107,-4.777 0.99,-6.389 z" /><path d="m 39.176,44.721 c 0.191,0 0.385,-0.008 0.578,-0.024 5.021,-0.413 8.529,-5.913 7.986,-12.521 -0.54,-6.563 -4.878,-11.475 -9.926,-11.048 -5.021,0.413 -8.528,5.913 -7.985,12.522 0.52,6.311 4.538,11.071 9.347,11.071 z M 38.143,25.114 c 0.083,-0.007 0.167,-0.01 0.25,-0.01 2.62,0 5.025,3.32 5.361,7.399 0.348,4.228 -1.635,7.986 -4.328,8.208 -2.727,0.22 -5.264,-3.18 -5.61,-7.389 -0.348,-4.228 1.634,-7.987 4.327,-8.208 z" /><path d="m 68.433,58.801 c 1.242,1.826 3.026,3.029 5.021,3.388 0.425,0.077 0.859,0.115 1.292,0.115 0.001,0 0.001,0 0.001,0 4.517,0 8.607,-4.067 9.728,-9.671 0.693,-3.471 0.108,-6.906 -1.605,-9.424 -1.243,-1.826 -3.027,-3.029 -5.023,-3.389 -0.425,-0.077 -0.859,-0.115 -1.292,-0.115 -4.518,0 -8.608,4.067 -9.728,9.671 -0.694,3.472 -0.109,6.907 1.606,9.425 z m 2.315,-8.641 c 0.724,-3.62 3.273,-6.455 5.806,-6.455 0.195,0 0.392,0.017 0.583,0.052 1.192,0.215 1.978,1.045 2.426,1.704 1.097,1.612 1.467,4 0.99,6.389 -0.779,3.901 -3.727,6.884 -6.39,6.403 -1.191,-0.215 -1.977,-1.044 -2.424,-1.703 -1.097,-1.612 -1.468,-4.001 -0.991,-6.39 z" /><path d="m 60.245,44.697 c 0.193,0.016 0.387,0.024 0.578,0.024 10e-4,0 10e-4,0 10e-4,0 4.809,0 8.827,-4.759 9.347,-11.072 0.543,-6.608 -2.965,-12.108 -7.986,-12.521 -5.021,-0.42 -9.385,4.483 -9.925,11.048 -0.543,6.608 2.965,12.108 7.985,12.521 z M 56.246,32.503 c 0.336,-4.08 2.741,-7.4 5.36,-7.4 0.083,0 0.167,0.003 0.25,0.01 2.693,0.222 4.676,3.98 4.328,8.208 -0.347,4.209 -2.888,7.607 -5.611,7.389 -2.692,-0.221 -4.675,-3.98 -4.327,-8.207 z" /><path d="m 18.129,68.642 c -0.708,2.759 -0.891,5.637 -0.525,8.422 1.234,9.376 8.227,16.364 17.817,17.803 0.771,0.116 9.558,0.133 14.726,0.133 5.168,0 13.954,-0.017 14.732,-0.132 9.586,-1.439 16.577,-8.428 17.812,-17.805 0.371,-2.829 0.178,-5.752 -0.559,-8.552 5.132,-2.674 8.985,-7.992 10.245,-14.297 1.115,-5.579 0.078,-11.242 -2.846,-15.538 -1.035,-1.521 -2.285,-2.813 -3.683,-3.874 V 27.16 c 0,-1.104 -0.896,-2 -2,-2 -1.104,0 -2,0.896 -2,2 v 5.445 C 81.015,32.298 80.158,32.047 79.273,31.887 78.944,31.827 78.611,31.779 78.276,31.741 78.058,22.97 72.953,15.695 65.754,13.635 V 7 c 0,-1.104 -0.896,-2 -2,-2 -1.104,0 -2,0.896 -2,2 v 6.069 C 57.385,13.025 53.207,14.858 49.999,18.194 47.075,15.153 43.341,13.362 39.395,13.098 V 7 c 0,-1.104 -0.896,-2 -2,-2 -1.104,0 -2,0.896 -2,2 v 6.35 c -7.8,1.578 -13.443,9.158 -13.675,18.391 -0.336,0.038 -0.669,0.086 -0.998,0.146 -1.069,0.193 -2.104,0.5 -3.095,0.907 v -4.648 c 0,-1.104 -0.896,-2 -2,-2 -1.104,0 -2,0.896 -2,2 v 7.051 c -1.188,0.981 -2.255,2.145 -3.161,3.476 -2.923,4.295 -3.96,9.958 -2.846,15.537 1.288,6.444 5.24,11.811 10.509,14.432 z M 13.774,40.926 c 1.862,-2.735 4.582,-4.547 7.661,-5.102 0.654,-0.119 1.33,-0.179 2.01,-0.179 l 0.243,0.003 c 0.561,0.014 1.106,-0.201 1.499,-0.604 0.393,-0.403 0.597,-0.953 0.563,-1.515 -0.519,-8.638 4.634,-15.863 11.728,-16.448 4.188,-0.34 8.161,1.669 10.913,5.398 0.754,1.021 2.465,1.021 3.219,0 2.752,-3.729 6.785,-5.729 10.907,-5.398 7.1,0.585 12.254,7.81 11.732,16.448 -0.034,0.562 0.17,1.112 0.563,1.515 0.392,0.403 0.934,0.621 1.499,0.604 l 0.243,-0.003 c 0.677,0 1.354,0.06 2.012,0.179 3.078,0.555 5.799,2.367 7.66,5.103 2.323,3.414 3.136,7.972 2.23,12.504 -1.131,5.656 -4.759,10.301 -9.471,12.121 -1.009,0.39 -1.525,1.511 -1.166,2.53 0.962,2.728 1.274,5.653 0.905,8.46 C 77.73,84.104 72.062,89.745 64.359,90.903 63.793,90.95 58.619,91 50.147,91 41.677,91 36.504,90.95 36.011,90.912 28.233,89.745 22.564,84.105 21.57,76.544 c -0.365,-2.779 -0.062,-5.675 0.876,-8.376 0.358,-1.033 -0.179,-2.162 -1.207,-2.536 -4.827,-1.753 -8.542,-6.429 -9.695,-12.203 -0.905,-4.533 -0.092,-9.09 2.23,-12.503 z" /></svg></svg>
                    <span class="font-semibold text-2xl tracking-tight"><span class="text-indigo-500">Paw</span>rfect</span>
                </a>
            </div>

            <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:items-center md:w-3/4 md:absolute lg:text-base md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                <div class="p-6 flex-col w-full h-auto overflow-hidden bg-white rounded-lg md:px-0 md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row">
                    
                    {{-- Main nav --}}
                    <div class="flex flex-col items-start justify-center w-full text-center mb-4 md:mb-0 lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center">
                        <a href="/" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:ml-0 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">Accueil</a>
                        <a href="/search" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Rechercher</a>
                        <a href="" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Blog</a>
                        <a href="" class="inline-block w-full py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 hover:text-indigo-600 lg:mx-3 md:text-center">Contact</a>
                        {{-- Search 
                            <a href="#_" class="absolute top-0 left-0 hidden py-2 mt-6 ml-10 mr-2 text-gray-600 lg:inline-block md:mt-0 md:ml-2 lg:mx-3 md:relative">
                            <svg class="inline w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </a> --}}
                    </div>

                    <div class="flex items-center w-full md:justify-end md:w-1/3">
                        @guest
                            <a href="{{ route('login') }}" class="px-4 py-2 mr-2 text-sm rounded-full border border-indigo-600 text-indigo-600 hover:bg-indigo-600 hover:text-white">Connexion</a>
                            <a href="{{ route('register') }}" class="px-4 py-2 text-sm font-medium border border-indigo-600 text-white bg-indigo-600 rounded-full hover:bg-indigo-700">Inscription</a>
                        @endguest

                        @auth
                            <div class="border-t border-gray-100 md:hidden"></div>
                            
                            {{-- Menu profile on desktop --}}
                            <div class="hidden md:block">
                                <x-jet-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <p class="flex items-center text-sm text-indigo-600 my-2 cursor-pointer hover:underline">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->nickname }}" />
                                            <span class="ml-2 font-medium">{{ Auth::user()->nickname }}</span>
                                        </p>
                                    </x-slot>
            
                                    <x-slot name="content">
            
                                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Mon compte') }}
                                        </x-jet-dropdown-link>

                                        <x-jet-dropdown-link href="{{ route('search.filterPerProfile') }}">
                                            {{ __('Mes annonces') }}
                                        </x-jet-dropdown-link>
            
                                        <div class="border-t border-gray-100"></div>
            
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
            
                                            <x-jet-dropdown-link href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Déconnexion') }}
                                            </x-jet-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-jet-dropdown>
                            </div>

                            {{-- Menu profile on mobile --}}
                            <div class="md:hidden flex flex-col w-full font-medium text-left">
                                
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <p class="flex items-center text-sm text-indigo-600 my-2">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->nickname }}" />
                                        <span class="ml-2 font-medium">{{ Auth::user()->nickname }}</span>
                                    </p>
                                @endif

                                <div class="border-t border-gray-100"></div>
                            
                                <a class="py-2 pl-2" href="{{ route('profile.show') }}">
                                    {{ __('Mon compte') }}
                                </a>

                                <a class="py-2 pl-2" href="{{ route('search.filterPerProfile') }}">
                                    {{ __('Mes annonces') }}
                                </a>
    
                                <!-- Authentication -->
                                <form class="py-2 pl-2" method="POST" action="{{ route('logout') }}">
                                    @csrf
    
                                    <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>
                                </form>
                            </div>
                        @endauth
                    </div>



                </div>
            </div>
            <div @click="showMenu = !showMenu" class="z-10 md:absolute md:right-0 flex flex-col items-center justify-center w-10 h-10 bg-white rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak="">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
                <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak="">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </div>
        </div>
    </nav>
</header>