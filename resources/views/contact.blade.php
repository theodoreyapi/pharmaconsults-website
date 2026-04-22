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

    <section class="bg-gradient-to-b from-green-50 to-white py-20">
        <div class="max-w-6xl mx-auto px-5">
            <div class="text-center mb-12">
                <span
                    class="inline-flex items-center gap-2 bg-green-100 text-green-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-6">Nous
                    écrire</span>
                <h1 class="font-display text-5xl font-extrabold text-gray-900 mb-4">Parlons de votre <span class="text-green-500">projet</span></h1>
                <p class="text-gray-500 max-w-md mx-auto">Une question, un partenariat, un retour ? Notre équipe
                    est à votre écoute.</p>
            </div>
            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h2 class="font-display text-xl font-bold text-gray-900 mb-2">Coordonnées</h2>
                    <p class="text-gray-500 text-sm mb-7">Notre équipe vous répond dans les plus brefs délais.</p>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <div
                                class="w-11 h-11 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Email</p>
                                <p class="text-gray-900 font-semibold text-sm">infos@pharma-consults.com</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <div
                                class="w-11 h-11 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Téléphone</p>
                                <p class="text-gray-900 font-semibold text-sm">+225 27 22 25 25 47</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <div
                                class="w-11 h-11 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Adresse</p>
                                <p class="text-gray-900 font-semibold text-sm">537, Rue D29 – Abidjan - Côte d’Ivoire</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white rounded-2xl shadow-sm border border-gray-100">
                            <div
                                class="w-11 h-11 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-400 mb-0.5">Horaires</p>
                                <p class="text-gray-900 font-semibold text-sm">Lun – Ven, 8h – 18h</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 p-4 bg-green-50 rounded-2xl border border-green-100 flex items-center gap-4">
                        <p class="text-sm text-green-700 flex-1">Besoin d'aide rapide ? Téléchargez l'application
                            pour une assistance en temps réel.</p>
                        <button onclick="openModal('modal-st-cecile')"
                            class="btn-green text-white text-xs font-semibold px-4 py-2 rounded-xl flex-shrink-0">Télécharger
                            l'app</button>
                    </div>
                </div>
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100">
                    <div class="space-y-5">
                        <div><label class="block text-sm font-semibold text-gray-700 mb-1.5">Nom
                                complet</label><input type="text" placeholder="Jean Kouassi"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm" /></div>
                        <div><label class="block text-sm font-semibold text-gray-700 mb-1.5">Email</label><input
                                type="email" placeholder="jean@email.com"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm" /></div>
                        <div><label class="block text-sm font-semibold text-gray-700 mb-1.5">Sujet</label><input
                                type="text" placeholder="Partenariat, question..."
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm" /></div>
                        <div><label class="block text-sm font-semibold text-gray-700 mb-1.5">Message</label>
                            <textarea rows="5" placeholder="Votre message..."
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm resize-none"></textarea>
                        </div>
                        <button onclick="showToast()"
                            class="w-full btn-green text-white font-semibold py-3.5 rounded-xl flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                            </svg>
                            Envoyer le message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
