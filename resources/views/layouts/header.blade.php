<!-- ══════════════════ NAVBAR ══════════════════ -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur border-b border-gray-100 shadow-sm">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="flex items-center justify-between h-16">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center gap-2 cursor-pointer flex-shrink-0">

                <div style="width: 120px; height: 55px;">
                    <img src="{{ URL::asset('logo1.png') }}" alt="">
                </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex items-center gap-0.5 text-sm font-medium text-gray-600">
                <a id="nav-home" href="{{ url('/') }}"
                    class="{{ Route::is('home') ? 'nav-pill-active' : '' }} cursor-pointer">Accueil</a>
                <a href="{{ url('pharmacies') }}"
                    class="{{ Route::is('pharmacies') ? 'nav-pill-active' : '' }} cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">Pharmacies
                    de garde</a>
                <a onclick="openModal('modal-st-cecile')"
                    class="cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">Produits</a>
                <a onclick="openModal('modal-st-cecile')"
                    class="cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">Assurance</a>
                <a onclick="openModal('modal-st-cecile')"
                    class="cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">Vaccination</a>
                <a href="{{ url('abonnement') }}"
                    class="{{ Route::is('abonnement') ? 'nav-pill-active' : '' }} cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">Abonnement</a>
                <a href="{{ url('about') }}"
                    class="{{ Route::is('about') ? 'nav-pill-active' : '' }} cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">À
                    propos</a>
                <a href="{{ url('contact') }}"
                    class="{{ Route::is('contact') ? 'nav-pill-active' : '' }} cursor-pointer px-3 py-1.5 hover:text-green-600 rounded-full transition-colors">Contact</a>
            </nav>

            <div class="flex items-center gap-2">
                <button onclick="openModal('modal-st-cecile')"
                    class="hidden md:flex btn-green text-white text-sm font-semibold px-4 py-2.5 rounded-xl items-center gap-2 shadow-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Télécharger l'app
                </button>
                <button onclick="toggleMobile()" class="md:hidden p-2 text-gray-500 hover:bg-gray-100 rounded-lg">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" style="max-height:0;opacity:0;overflow:hidden;transition:max-height .3s,opacity .3s"
            class="md:hidden">
            <div class="py-3 space-y-1 border-t border-gray-100">
                <a href="{{ url('/') }}"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Accueil</a>
                <a href="{{ url('pharmacies') }}"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Pharmacies
                    de garde</a>
                <a onclick="openModal('modal-st-cecile')"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Produits</a>
                <a onclick="openModal('modal-st-cecile')"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Assurance</a>
                <a onclick="openModal('modal-st-cecile')"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Vaccination</a>
                <a href="{{ url('abonnement') }}"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Abonnement</a>
                <a href="{{ url('about') }}"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">À
                    propos</a>
                <a href="{{ url('contact') }}"
                    class="block px-3 py-2 text-sm text-gray-700 hover:bg-green-50 rounded-xl cursor-pointer">Contact</a>
                <button onclick="openModal('modal-st-cecile')"
                    class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl mt-1">Télécharger
                    l'app</button>
            </div>
        </div>
    </div>
</header>

@push('csss')
    <link rel="icon" href="{{ URL::asset('favicon.ico') }}">
@endpush
