<!-- ════════════════════════════════════════ -->
<!-- FOOTER (white, light)                   -->
<!-- ════════════════════════════════════════ -->
<footer class="pt-14 pb-8">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10 mb-10">
            <!-- Brand -->
            <div>
                <div class="flex items-center gap-2 mb-4">

                    <div style="width: 150px; height: 60px;">
                        <img src="{{ URL::asset('logo1.png') }}" alt="">
                    </div>
                </div>
                <p class="text-gray-500 text-sm leading-relaxed mb-5">PharmaConsults connecte toutes les pharmacies
                    de Côte d'Ivoire pour vous offrir un accès rapide à l'information santé, aux pharmacies de garde
                    et à vos médicaments.</p>
                <div class="flex items-center gap-2">
                    <a href="https://www.facebook.com/PharmaConsults" target="_blank" class="social-icon"><svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" />
                        </svg></a>
                    <a href="https://www.instagram.com/pharmaconsults/" target="_blank" class="social-icon"><svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"
                                stroke-width="1.8" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="1.8" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </a>
                    <a href="https://ci.linkedin.com/company/pharmaconsults-expertise" target="_blank" class="social-icon"><svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z" />
                            <circle cx="4" cy="4" r="2" />
                        </svg></a>
                    {{-- <a href="https://www.instagram.com/pharmaconsults" target="_blank" class="social-icon"><svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" />
                        </svg></a> --}}
                </div>
            </div>
            <!-- Fonctionnalités -->
            <div>
                <h4 class="font-semibold text-gray-900 mb-5 text-sm">Fonctionnalités</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('pharmacies') }}"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Pharmacies
                            de garde</a></li>
                    <li><a onclick="openModal('modal-st-cecile')"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Notices
                            & prix</a></li>
                    <li><a onclick="openModal('modal-st-cecile')"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Vaccination</a>
                    </li>
                    <li><a onclick="openModal('modal-st-cecile')"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Marketplace</a>
                    </li>
                </ul>
            </div>
            <!-- Liens -->
            <div>
                <h4 class="font-semibold text-gray-900 mb-5 text-sm">Liens</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/') }}"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Accueil</a>
                    </li>
                    <li><a href="{{ url('pharmacies') }}"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Pharmacies
                            de garde</a></li>
                    <li><a href="{{ url('about') }}"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">À
                            propos</a></li>
                    <li><a href="{{ url('contact') }}"
                            class="text-gray-500 text-sm hover:text-green-600 cursor-pointer transition-colors">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- Newsletter -->
            <div>
                <h4 class="font-semibold text-gray-900 mb-2 text-sm">Newsletter santé</h4>
                <p class="text-gray-500 text-sm mb-4">Recevez nos conseils et l'actualité des pharmacies.</p>
                <div class="flex gap-2 mb-6">
                    <input type="email" placeholder="votre@email.com"
                        class="flex-1 border border-gray-200 rounded-xl px-3 py-2.5 text-sm placeholder-gray-400" />
                    <button
                        class="btn-green text-white text-sm font-semibold px-4 py-2.5 rounded-xl whitespace-nowrap">S'inscrire</button>
                </div>
                <div class="space-y-2.5">
                    <div class="flex items-center gap-2 text-gray-500 text-xs"><svg
                            class="w-3.5 h-3.5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>537, Rue D29 – Abidjan - Côte d’Ivoire</div>
                    <div class="flex items-center gap-2 text-gray-500 text-xs"><svg
                            class="w-3.5 h-3.5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>infos@pharma-consults.com</div>
                    <div class="flex items-center gap-2 text-gray-500 text-xs"><svg
                            class="w-3.5 h-3.5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>+225 27 22 25 25 47</div>
                </div>
            </div>
        </div>
        <div class="border-t border-gray-100 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-gray-400 text-xs">© {{ date('Y') }} PharmaConsults. Tous droits réservés.</p>
            <div class="flex items-center gap-5">
                <a href="{{ url('mentions') }}"
                    class="text-gray-400 text-xs hover:text-green-600 cursor-pointer transition-colors">Mentions
                    légales</a>
                <a href="{{ url('privacy') }}"
                    class="text-gray-400 text-xs hover:text-green-600 cursor-pointer transition-colors">Confidentialité</a>
                <a href="{{ url('terms') }}"
                    class="text-gray-400 text-xs hover:text-green-600 cursor-pointer transition-colors">CGU</a>
            </div>
        </div>
    </div>
</footer>


<div id="modal-st-cecile"
    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden p-4">

    <div class="bg-white rounded-3xl shadow-2xl overflow-hidden max-w-md w-full relative">

        <button onclick="closeModal('modal-st-cecile')"
            class="absolute top-4 right-4 text-white/80 hover:text-white z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="bg-gradient-to-br from-emerald-400 via-emerald-500 to-cyan-500 p-8 text-center text-white">
            <div
                class="bg-white/20 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold leading-tight mb-4">Accédez à tous nos services sur l'application</h2>
            <p class="text-sm opacity-90 font-medium">PharmaConsults vous offre une expérience plus simple, plus rapide et plus prtique sur mobile.</p>
        </div>

        <div class="p-8 space-y-4">
            <div class="flex items-start gap-3">
                <span class="text-emerald-500 text-xl">✨</span>
                <p class="text-gray-700 font-medium">Trouvez une pharmacie de garde rapidement</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-emerald-500 text-xl">✨</span>
                <p class="text-gray-700 font-medium">Consultez les prix des médicaments</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-emerald-500 text-xl">✨</span>
                <p class="text-gray-700 font-medium">Vérifiez la disponibilité des produits</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-emerald-500 text-xl">✨</span>
                <p class="text-gray-700 font-medium">Accédez à vos services d'assurance</p>
            </div>
            <div class="flex items-start gap-3">
                <span class="text-emerald-500 text-xl">✨</span>
                <p class="text-gray-700 font-medium">Recevez des alertes et notifications utiles</p>
            </div>
        </div>

        <div class="px-8 pb-4 flex flex-col sm:flex-row gap-3 justify-center">
            <a href="https://play.google.com/store/apps/details?id=com.aptiotech.pharmaconsult.yapi.pharmaconsult"
                target="_blank"
                class="bg-black text-white px-4 py-2 rounded-xl flex items-center gap-2 border border-gray-700 hover:bg-gray-900 transition">
                <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg"
                    class="h-8" alt="Google Play">
            </a>
            <a href="https://apps.apple.com/app/pharmaconsults/id6446585835" target="_blank"
                class="bg-black text-white px-4 py-2 rounded-xl flex items-center gap-2 border border-gray-700 hover:bg-gray-900 transition">
                <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                    class="h-8" alt="App Store">
            </a>
        </div>

        <p class="text-center text-xs text-gray-500 pb-8">Disponible sur Google Play et l'App Store</p>
    </div>
</div>


<!-- Toast -->
<div id="toast" style="opacity:0;transition:all .3s;pointer-events:none"
    class="fixed bottom-6 right-6 bg-gray-900 text-white px-5 py-3.5 rounded-2xl shadow-2xl text-sm font-medium flex items-center gap-2 z-50">
    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
    </svg>
    Message envoyé avec succès !
</div>

<script>
    function openModal(id) {
        document.getElementById(id).classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Empêche le scroll en arrière-plan
    }

    function closeModal(id) {
        document.getElementById(id).classList.add('hidden');
        document.body.style.overflow = 'auto'; // Réactive le scroll
    }

    // Fermer si on clique en dehors de la modale
    window.onclick = function(event) {
        if (event.target.classList.contains('fixed')) {
            event.target.classList.add('hidden');
            document.body.style.overflow = 'auto';
        }
    }
</script>

<script>
    function showPage(name) {
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.getElementById('page-' + name).classList.add('active');
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    let mobileOpen = false;

    function toggleMobile() {
        const m = document.getElementById('mobile-menu');
        mobileOpen = !mobileOpen;
        m.style.maxHeight = mobileOpen ? '400px' : '0';
        m.style.opacity = mobileOpen ? '1' : '0';
    }

    function toggleView(v) {
        const mv = document.getElementById('view-map');
        const lv = document.getElementById('view-list');
        const bm = document.getElementById('btn-map');
        const bl = document.getElementById('btn-list');
        const on = 'px-4 py-2 text-sm rounded-xl font-medium btn-green text-white flex items-center gap-2';
        const off =
            'px-4 py-2 text-sm rounded-xl font-medium bg-white text-gray-600 border border-gray-200 flex items-center gap-2 hover:border-green-400 transition-colors';
        if (v === 'map') {
            mv.style.display = '';
            lv.classList.add('hidden');
            bm.className = on;
            bl.className = off;
        } else {
            mv.style.display = 'none';
            lv.classList.remove('hidden');
            bl.className = on;
            bm.className = off;
        }
    }

    function showToast() {
        const t = document.getElementById('toast');
        t.style.opacity = '1';
        t.style.transform = 'translateY(-4px)';
        t.style.pointerEvents = 'auto';
        setTimeout(() => {
            t.style.opacity = '0';
            t.style.transform = '';
            t.style.pointerEvents = 'none';
        }, 3000);
    }
</script>
