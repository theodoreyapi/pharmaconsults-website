<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title>PharmaConsults — Votre santé connectée</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
        @stack('csss')
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

    <section class="bg-gradient-to-b from-green-50 to-white py-20">
        <div class="max-w-5xl mx-auto px-5">
            <div class="text-center mb-12">
                <span
                    class="inline-flex items-center gap-2 bg-green-100 text-green-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-6">Notre
                    histoire</span>
                <h1 class="font-display text-5xl font-extrabold text-gray-900 mb-6">Une santé connectée <span
                        class="text-green-500">pour tous</span></h1>
                <p class="text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto">PharmaConsults est née d'un
                    constat simple : trouver une pharmacie de garde, connaître le prix d'un médicament ou vérifier
                    sa disponibilité ne devrait jamais être un parcours du combattant.</p>
            </div>
            <div class="bg-white rounded-3xl p-10 shadow-sm border border-gray-100 mb-12">
                <h2 class="font-display text-2xl font-extrabold text-gray-900 mb-4">Notre mission</h2>
                <p class="text-gray-600 leading-relaxed mb-4">Démocratiser l'accès à l'information santé en Côte
                    d'Ivoire. PharmaConsults agrège en temps réel les données de plus de 1000 pharmacies à travers le
                    pays pour vous offrir une expérience fluide, fiable et toujours à portée de main.</p>
                <p class="text-gray-600 leading-relaxed">Nous croyons que chaque bonne information peut sauver une
                    vie. C'est pourquoi nous mettons toute notre énergie à construire des outils simples,
                    accessibles, et pensés pour le quotidien des Ivoiriens.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-16">
                <div class="stat-card p-6 text-center">
                    <p class="font-display text-3xl font-extrabold text-green-500 mb-1">+1000</p>
                    <p class="text-gray-500 text-sm">Pharmacies</p>
                </div>
                <div class="stat-card p-6 text-center">
                    <p class="font-display text-3xl font-extrabold text-green-500 mb-1">24/7</p>
                    <p class="text-gray-500 text-sm">Disponible</p>
                </div>
                <div class="stat-card p-6 text-center">
                    <p class="font-display text-3xl font-extrabold text-green-500 mb-1">+50k</p>
                    <p class="text-gray-500 text-sm">Utilisateurs</p>
                </div>
                <div class="stat-card p-6 text-center">
                    <p class="font-display text-3xl font-extrabold text-green-500 mb-1">42</p>
                    <p class="text-gray-500 text-sm">Communes</p>
                </div>
            </div>
            <div class="text-center mb-10">
                <h2 class="font-display text-3xl font-extrabold text-gray-900 mb-2">Nos valeurs</h2>
                <p class="text-gray-500 text-sm">Les principes qui guident chacune de nos décisions.</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="val-card feat-card p-6 text-center">
                    <div class="w-12 h-12 bg-red-50 rounded-2xl flex items-center justify-center mx-auto mb-4"><svg
                            class="w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg></div>
                    <h3 class="font-display font-bold text-gray-900 mb-2">Bienveillance</h3>
                    <p class="text-gray-500 text-sm">Chaque utilisateur compte. Nous concevons nos services avec
                        humanité.</p>
                </div>
                <div class="val-card feat-card p-6 text-center">
                    <div class="w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 mb-2">Précision</h3>
                    <p class="text-gray-500 text-sm">Une information santé fiable, vérifiée et à jour, en temps
                        réel.</p>
                </div>
                <div class="val-card feat-card p-6 text-center">
                    <div class="w-12 h-12 bg-green-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 mb-2">Proximité</h3>
                    <p class="text-gray-500 text-sm">Connecter patients, pharmaciens et professionnels au
                        quotidien.</p>
                </div>
                <div class="val-card feat-card p-6 text-center">
                    <div class="w-12 h-12 bg-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 mb-2">Innovation</h3>
                    <p class="text-gray-500 text-sm">La technologie au service de la santé, pour tous, partout.</p>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <!-- Toast -->
    <div id="toast" style="opacity:0;transition:all .3s;pointer-events:none"
        class="fixed bottom-6 right-6 bg-gray-900 text-white px-5 py-3.5 rounded-2xl shadow-2xl text-sm font-medium flex items-center gap-2 z-50">
        <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        Message envoyé avec succès !
    </div>
</body>

</html>
