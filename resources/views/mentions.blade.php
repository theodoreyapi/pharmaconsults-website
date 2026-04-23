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
        <div class="max-w-6xl mx-auto px-5">
            <div class="text-center mb-12">
                <span
                    class="inline-flex items-center gap-2 bg-green-100 text-green-700 text-xs font-semibold px-3 py-1.5 rounded-full mb-6">Informations
                    légales</span>
                <h1 class="font-display text-5xl font-extrabold text-gray-900 mb-4">Mentions <span
                        class="text-green-500">légales</span></h1>
                {{-- <p class="text-gray-500 max-w-md mx-auto">Une question, un partenariat, un retour ? Notre équipe
                    est à votre écoute.</p> --}}
            </div>
            <div class="lg:grid-cols-2 gap-12">

                {!! $communes['contenu'] !!}

            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
