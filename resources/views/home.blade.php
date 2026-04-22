<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PharmaConsults — Votre santé connectée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <style>
        *,
        body {
            font-family: 'Inter', sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        .font-display {
            font-family: 'Sora', sans-serif;
        }

        .page {
            display: none;
        }

        .page.active {
            display: block;
            animation: fadeUp .35s ease;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(10px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        /* Hero - exact gradient from screenshot */
        .hero-bg {
            background: linear-gradient(135deg, #c8f0d8 0%, #b8ead0 20%, #c2f0e8 50%, #b8e8f5 80%, #a8dff0 100%);
        }

        /* Features bg */
        .features-bg {
            background: #f8f9f7;
        }

        /* Why bg */
        .why-bg {
            background: #edf7f0;
        }

        /* Badge float */
        .badge-float {
            animation: float 3.5s ease-in-out infinite;
        }

        .badge-float2 {
            animation: float 3.5s ease-in-out infinite 1.8s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-8px)
            }
        }

        /* Green CTA button */
        .btn-green {
            background: #22c55e;
            transition: background .2s, transform .2s;
        }

        .btn-green:hover {
            background: #16a34a;
            transform: translateY(-1px);
        }

        /* Dark store buttons */
        .btn-store {
            background: #111827;
            border-radius: 14px;
            transition: background .2s;
        }

        .btn-store:hover {
            background: #1f2937;
        }

        /* Feature card */
        .feat-card {
            background: #fff;
            border-radius: 16px;
            border: 1px solid #e5e7eb;
            transition: box-shadow .2s;
        }

        .feat-card:hover {
            box-shadow: 0 8px 28px rgba(0, 0, 0, .08);
        }

        /* Product card */
        .product-card {
            transition: transform .25s, box-shadow .25s;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, .1);
        }

        /* Stat card */
        .stat-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .06);
        }

        /* Testimonial card */
        .testi-card {
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
        }

        /* App CTA banner */
        .app-banner {
            background: linear-gradient(135deg, #22c55e 0%, #10b981 40%, #06b6d4 100%);
            border-radius: 24px;
        }

        /* Phone mockup */
        .phone-mock {
            background: #fff;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .2);
            width: 155px;
            height: 235px;
        }

        /* Footer */
        footer {
            background: #fff;
            border-top: 1px solid #e5e7eb;
        }

        /* Social icon */
        .social-icon {
            width: 36px;
            height: 36px;
            border: 1.5px solid #d1d5db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: border-color .2s, background .2s;
        }

        .social-icon:hover {
            border-color: #22c55e;
            background: #f0fdf4;
        }

        /* Input */
        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, .12);
        }

        /* Nav active pill */
        .nav-pill-active {
            background: #b4f0ca;
            color: #22c55e;
            border-radius: 999px;
            padding: 5px 16px;
            font-weight: 600;
        }

        /* Pharm card */
        .pharm-card {
            transition: border-color .2s, background .2s;
        }

        .pharm-card:hover {
            border-color: #22c55e;
            background: #f0fdf4;
        }

        /* val card */
        .val-card {
            transition: transform .25s;
        }

        .val-card:hover {
            transform: translateY(-4px);
        }

        /* Map dots */
        .mdot {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1)
            }

            50% {
                opacity: .6;
                transform: scale(1.5)
            }
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    @include('layouts.header')

    <div id="page-home" class="page active">

        <!-- HERO -->
        <section class="hero-bg overflow-hidden relative" style="min-height:620px;">
            <div class="max-w-7xl mx-auto px-5 lg:px-8 py-16 lg:py-20">
                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <!-- Left -->
                    <div>
                        <span
                            class="inline-flex items-center gap-2 border border-green-400/50 text-green-700 text-xs font-medium px-3 py-1.5 rounded-full bg-white/50 backdrop-blur mb-7">
                            <svg class="w-3.5 h-3.5 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            Nouvelle app santé en Côte d'Ivoire
                        </span>

                        <h1 class="font-display text-5xl lg:text-6xl font-extrabold text-gray-900 leading-[1.06] mb-6">
                            Parce que chaque<br />
                            <span class="text-green-500">bonne info</span> peut<br />
                            sauver une vie
                        </h1>

                        <p class="text-gray-600 text-lg leading-relaxed mb-10 max-w-lg">
                            PharmaConsults connecte toutes les pharmacies de Côte d'Ivoire. Trouvez les pharmacies de
                            garde, consultez les notices, vérifiez la disponibilité — tout depuis votre téléphone.
                        </p>

                        <div class="flex flex-wrap gap-3 mb-12">
                            <a onclick="openModal('modal-st-cecile')" class="btn-store flex items-center gap-3 text-white px-5 py-3">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M3.18 23.76c.27.15.58.2.9.15l12.16-6.87-2.5-2.5-10.56 9.22zm15.4-13.16L4.02.52C3.7.36 3.37.34 3.1.5L13.77 11.17l4.81-.57zm2.1 1.1c-.38-.2-.87-.2-1.25 0l-1.87 1.05 2.5 2.5 1.92-1.08c.64-.37.64-1.32 0-1.68zM3.1.5c-.3.16-.46.5-.46.83v21.34c0 .33.16.67.46.83L13.77 13 3.1.5z" />
                                </svg>
                                <div>
                                    <p class="text-[9px] text-gray-400 uppercase tracking-wider leading-none">
                                        Disponible sur</p>
                                    <p class="text-base font-bold leading-snug">Google Play</p>
                                </div>
                            </a>
                            <a onclick="openModal('modal-st-cecile')" class="btn-store flex items-center gap-3 text-white px-5 py-3">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98l-.09.06c-.22.14-2.19 1.28-2.17 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.77M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                                </svg>
                                <div>
                                    <p class="text-[9px] text-gray-400 uppercase tracking-wider leading-none">
                                        Télécharger sur</p>
                                    <p class="text-base font-bold leading-snug">App Store</p>
                                </div>
                            </a>
                        </div>

                        <div class="flex items-center gap-10">
                            <div>
                                <p class="font-display text-3xl font-extrabold text-green-500">+500</p>
                                <p class="text-gray-500 text-sm mt-0.5">Pharmacies connectées</p>
                            </div>
                            <div>
                                <p class="font-display text-3xl font-extrabold text-green-500">24/7</p>
                                <p class="text-gray-500 text-sm mt-0.5">Pharmacies de garde</p>
                            </div>
                            <div>
                                <p class="font-display text-3xl font-extrabold text-green-500">+50k</p>
                                <p class="text-gray-500 text-sm mt-0.5">Utilisateurs satisfaits</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Image -->
                    <div class="relative flex justify-center lg:justify-end">
                        <div class="relative w-72 lg:w-80 xl:w-[22rem]" style="aspect-ratio:3/4;">
                            <!-- Main image -->
                            <div class="w-full h-full rounded-3xl overflow-hidden shadow-2xl">
                                <img src="https://id-preview--09f551fc-9ba0-4b34-bd4a-c2729ffe2e56.lovable.app/assets/hero-woman-DZd_J5iZ.jpg"
                                    alt="Femme utilisant PharmaConsults" class="w-full h-full object-cover"
                                    onerror="this.parentElement.style.background='linear-gradient(135deg,#d1fae5,#a7f3d0)'" />
                            </div>

                            <!-- Badge top right: Doliprane dispo -->
                            <div class="badge-float absolute -top-4 -right-8 bg-white rounded-2xl shadow-xl px-4 py-3 flex items-center gap-3"
                                style="min-width:175px;">
                                <div
                                    class="w-9 h-9 bg-blue-50 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <polyline stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            points="22 12 18 12 15 21 9 3 6 12 2 12" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Doliprane dispo</p>
                                    <p class="text-xs text-gray-500">stock confirmé</p>
                                </div>
                            </div>

                            <!-- Badge bottom left: Pharmacie ouverte -->
                            <div class="badge-float2 absolute -bottom-4 -left-8 bg-white rounded-2xl shadow-xl px-4 py-3 flex items-center gap-3"
                                style="min-width:190px;">
                                <div
                                    class="w-9 h-9 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Pharmacie ouverte</p>
                                    <p class="text-xs text-gray-500">à 1.2 km de vous</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- FONCTIONNALITÉS -->
        <section class="features-bg py-20">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="text-center mb-14">
                    <p class="text-green-600 font-bold text-xs uppercase tracking-widest mb-3">Fonctionnalités</p>
                    <h2 class="font-display text-4xl font-extrabold text-gray-900 mb-4">Tout ce dont vous avez besoin
                        pour<br />votre santé</h2>
                    <p class="text-gray-500">Une plateforme complète pensée pour les patients et les pharmaciens.</p>
                </div>
                <!-- Row 1: 4 cards -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Pharmacies de garde</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Trouvez la pharmacie ouverte la plus proche,
                            24h/24.</p>
                    </div>
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Assurances acceptées</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Identifiez les pharmacies partenaires de votre
                            assurance.</p>
                    </div>
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Notices & prix</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Consultez la notice et le prix officiel de vos
                            médicaments.</p>
                    </div>
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <polyline stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Disponibilité temps réel</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Vérifiez la disponibilité avant de vous
                            déplacer.</p>
                    </div>
                </div>
                <!-- Row 2: 3 cards -->
                <div class="grid sm:grid-cols-3 gap-4">
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Portefeuille électronique</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Réglez vos achats simplement depuis l'app.</p>
                    </div>
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Vaccination</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Suivez votre carnet et vos rappels de
                            vaccination.</p>
                    </div>
                    <div class="feat-card p-6">
                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mb-5">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                        </div>
                        <h3 class="font-display font-bold text-gray-900 mb-2">Marketplace cosmétique</h3>
                        <p class="text-gray-500 text-sm leading-relaxed">Découvrez des produits beauté et bien-être
                            certifiés.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- POURQUOI PHARMACONSULTS -->
        <section class="why-bg py-20">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <p class="text-green-600 font-bold text-xs uppercase tracking-widest mb-4">Pourquoi
                            PharmaConsults</p>
                        <h2 class="font-display text-4xl font-extrabold text-gray-900 mb-6 leading-tight">Une santé
                            accessible, partout en<br />Côte d'Ivoire</h2>
                        <p class="text-gray-600 mb-8 leading-relaxed">Nous travaillons main dans la main avec les
                            pharmacies pour rendre l'information santé fiable, instantanée et utile au quotidien.</p>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3">
                                <div
                                    class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Données vérifiées par des pharmaciens diplômés</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div
                                    class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Couverture nationale en pleine expansion</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <div
                                    class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <span class="text-gray-700">Confidentialité et sécurité de vos données</span>
                            </li>
                        </ul>
                    </div>
                    <!-- 4 stat cards -->
                    <div class="grid grid-cols-2 gap-4">
                        <div class="stat-card p-7">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mb-3"><svg
                                    class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg></div>
                            <p class="font-display text-3xl font-extrabold text-green-500">+500</p>
                            <p class="text-gray-500 text-sm mt-1">Pharmacies</p>
                        </div>
                        <div class="stat-card p-7">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mb-3"><svg
                                    class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg></div>
                            <p class="font-display text-3xl font-extrabold text-green-500">24/7</p>
                            <p class="text-gray-500 text-sm mt-1">Disponibilité</p>
                        </div>
                        <div class="stat-card p-7">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mb-3"><svg
                                    class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg></div>
                            <p class="font-display text-3xl font-extrabold text-green-500">100%</p>
                            <p class="text-gray-500 text-sm mt-1">Données fiables</p>
                        </div>
                        <div class="stat-card p-7">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center mb-3"><svg
                                    class="w-5 h-5 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                </svg></div>
                            <p class="font-display text-3xl font-extrabold text-green-500">+50k</p>
                            <p class="text-gray-500 text-sm mt-1">Téléchargements</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PRODUITS POPULAIRES -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="flex items-start justify-between mb-10">
                    <div>
                        <p class="text-green-600 font-bold text-xs uppercase tracking-widest mb-3">Produits populaires
                        </p>
                        <h2 class="font-display text-4xl font-extrabold text-gray-900 mb-2">Médicaments, soins &
                            cosmétiques</h2>
                        <p class="text-gray-500 text-sm">Un aperçu de ce que vous trouverez dans nos pharmacies
                            partenaires.</p>
                    </div>
                    <button
                        class="hidden sm:flex items-center gap-2 border border-gray-200 text-gray-700 text-sm font-medium px-4 py-2.5 rounded-xl hover:border-green-400 hover:text-green-700 transition-colors flex-shrink-0 mt-2 whitespace-nowrap">
                        Voir tous les produits →
                    </button>
                </div>
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                    <!-- cards with white bg, badge top-left on image, green price, green full button -->
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Médicament</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Doliprane 1000mg</h3>
                            <p class="text-green-500 font-bold mb-3">1 500 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1550572017-edd951b55104?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Complément</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Vitamine C 1000</h3>
                            <p class="text-green-500 font-bold mb-3">3 500 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Cosmétique</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Crème hydratante</h3>
                            <p class="text-green-500 font-bold mb-3">8 500 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Enfant</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Sirop pédiatrique</h3>
                            <p class="text-green-500 font-bold mb-3">2 800 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1631549916768-4119b2e5f926?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Soin</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Antiseptique 250ml</h3>
                            <p class="text-green-500 font-bold mb-3">2 200 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1556228720-195a672e8a03?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Cosmétique</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Sérum visage anti-âge</h3>
                            <p class="text-green-500 font-bold mb-3">12 500 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1584308878768-57d3e1e0b4b5?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Complément</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Multivitamines</h3>
                            <p class="text-green-500 font-bold mb-3">4 900 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                    <div class="product-card bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm">
                        <div class="relative"><img
                                src="https://images.unsplash.com/photo-1584555613497-9ecf9dd06f68?w=500&q=80&auto=format&fit=crop"
                                class="w-full h-44 object-cover" alt="" /><span
                                class="absolute top-3 left-3 bg-white text-gray-800 text-[10px] font-bold uppercase px-2.5 py-1 rounded-full shadow-sm">Matériel</span>
                        </div>
                        <div class="p-4">
                            <h3 class="font-display font-bold text-gray-900 mb-1">Thermomètre digital</h3>
                            <p class="text-green-500 font-bold mb-3">7 500 FCFA</p><button onclick="openModal('modal-st-cecile')"
                                class="w-full btn-green text-white text-sm font-semibold py-2.5 rounded-xl">Voir
                                détails</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- APP CTA — rounded card with gradient -->
        <section class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div
                    class="app-banner px-10 lg:px-14 py-12 flex items-center justify-between gap-8 overflow-hidden relative">
                    <div class="flex-1 min-w-0">
                        <span
                            class="inline-flex items-center gap-2 bg-white/25 text-white text-xs font-medium px-3 py-1.5 rounded-full mb-6">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            Disponible sur mobile
                        </span>
                        <h2 class="font-display text-4xl font-extrabold text-white leading-tight mb-4">Téléchargez
                            l'app<br />PharmaConsults</h2>
                        <p class="text-white/80 text-sm mb-8 max-w-sm">Profitez de toutes les fonctionnalités
                            directement depuis votre téléphone. Gratuit, rapide, sécurisé.</p>
                        <div class="flex flex-wrap gap-3">
                            <a onclick="openModal('modal-st-cecile')"
                                class="flex items-center gap-3 bg-white/95 text-gray-900 px-5 py-3 rounded-2xl hover:bg-white transition-colors shadow-md">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M3.18 23.76c.27.15.58.2.9.15l12.16-6.87-2.5-2.5-10.56 9.22zm15.4-13.16L4.02.52C3.7.36 3.37.34 3.1.5L13.77 11.17l4.81-.57zm2.1 1.1c-.38-.2-.87-.2-1.25 0l-1.87 1.05 2.5 2.5 1.92-1.08c.64-.37.64-1.32 0-1.68zM3.1.5c-.3.16-.46.5-.46.83v21.34c0 .33.16.67.46.83L13.77 13 3.1.5z" />
                                </svg>
                                <div>
                                    <p class="text-[9px] text-gray-400 uppercase tracking-wider leading-none">
                                        Disponible sur</p>
                                    <p class="text-sm font-bold leading-snug">Google Play</p>
                                </div>
                            </a>
                            <a onclick="openModal('modal-st-cecile')"
                                class="flex items-center gap-3 bg-white/95 text-gray-900 px-5 py-3 rounded-2xl hover:bg-white transition-colors shadow-md">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98l-.09.06c-.22.14-2.19 1.28-2.17 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.77M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                                </svg>
                                <div>
                                    <p class="text-[9px] text-gray-400 uppercase tracking-wider leading-none">
                                        Télécharger sur</p>
                                    <p class="text-sm font-bold leading-snug">App Store</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- Phone mockup -->
                    <div class="phone-mock hidden md:flex flex-col items-center justify-center gap-3 flex-shrink-0">
                        <div class="w-14 h-14 bg-green-500 rounded-2xl flex items-center justify-center shadow-md">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <polyline stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    points="22 12 18 12 15 21 9 3 6 12 2 12" />
                            </svg>
                        </div>
                        <p class="font-display font-bold text-gray-900 text-sm">PharmaConsults</p>
                        <p class="text-gray-400 text-xs">Votre santé connectée</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- TÉMOIGNAGES -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-5 lg:px-8">
                <div class="text-center mb-14">
                    <p class="text-green-600 font-bold text-xs uppercase tracking-widest mb-3">Témoignages</p>
                    <h2 class="font-display text-4xl font-extrabold text-gray-900">Ils nous font confiance</h2>
                </div>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="testi-card p-6">
                        <p class="text-green-500 text-3xl leading-none mb-4" style="font-family:Georgia,serif;">"</p>
                        <p class="text-gray-700 text-sm leading-relaxed mb-6">"J'ai trouvé une pharmacie de garde à 22h
                            pour mon fils. L'app m'a vraiment sauvée !"</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    A</div>
                                <div>
                                    <p class="font-bold text-gray-900 text-sm">Aïcha K.</p>
                                    <p class="text-xs text-gray-500">Maman de 2 enfants, Cocody</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="testi-card p-6">
                        <p class="text-green-500 text-3xl leading-none mb-4" style="font-family:Georgia,serif;">"</p>
                        <p class="text-gray-700 text-sm leading-relaxed mb-6">"Je consulte les prix avant de sortir.
                            Plus de mauvaise surprise au comptoir."</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    Y</div>
                                <div>
                                    <p class="font-bold text-gray-900 text-sm">Yves D.</p>
                                    <p class="text-xs text-gray-500">Étudiant, Yopougon</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="testi-card p-6">
                        <p class="text-green-500 text-3xl leading-none mb-4" style="font-family:Georgia,serif;">"</p>
                        <p class="text-gray-700 text-sm leading-relaxed mb-6">"Interface claire, infos fiables. Je la
                            recommande à tous mes patients."</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-sm">
                                    M</div>
                                <div>
                                    <p class="font-bold text-gray-900 text-sm">Mariam T.</p>
                                    <p class="text-xs text-gray-500">Infirmière, Plateau</p>
                                </div>
                            </div>
                            <div class="flex gap-0.5">
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                                <svg class="w-4 h-4 fill-green-500" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <a href="{{ url('pharmacies') }}"
                        class="inline-flex items-center gap-2 border border-gray-300 text-gray-800 font-semibold px-6 py-3 rounded-xl hover:border-green-400 hover:text-green-700 transition-colors text-sm">
                        Voir les pharmacies de garde →
                    </a>
                </div>
            </div>
        </section>

    </div><!-- END HOME -->

    @include('layouts.footer')
</body>

</html>
