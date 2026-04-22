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

    <section class="bg-gradient-to-b from-green-50 to-white py-14">
        <div class="max-w-7xl mx-auto px-5 lg:px-8">
            <div class="text-center mb-10">
                <p class="text-green-600 text-xs font-semibold uppercase tracking-widest mb-2">mardi 21 avril 2026
                </p>
                <h1 class="font-display text-4xl font-extrabold text-gray-900 mb-4">Pharmacies de garde</h1>
                <p class="text-gray-500 max-w-xl mx-auto text-sm">Consultez la liste des pharmacies ouvertes
                    aujourd'hui dans toute la Côte d'Ivoire. Filtrez par commune ou recherchez par nom.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-3 mb-8 max-w-2xl mx-auto">
                <select id="commune" class="px-10 py-3.5 rounded-xl border border-gray-200 text-sm text-gray-600">
                    <option value="">Toutes les communes</option>
                    @foreach ($communes['content'] as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="grid lg:grid-cols-4 gap-6">

                <!-- LEFT : LISTE -->
                <div id="view-list" class="lg:col-span-3">
                    <div id="pharmaciesList" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
                    </div>
                </div>

                <script>
                    document.getElementById('commune').addEventListener('change', function() {
                        let communeId = this.value;

                        if (!communeId) return;

                        fetch(`/pharmacies-par-commune/${communeId}`)
                            .then(response => response.json())
                            .then(data => {
                                let container = document.getElementById('pharmaciesList');
                                container.innerHTML = '';

                                if (Array.isArray(data) && data.length > 0) {

                                    data.forEach((pharma) => {
                                        container.innerHTML += `

                    <div class="pharm-card bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 hover:shadow-md hover:-translate-y-1 transition duration-300">

                        <!-- IMAGE -->
                        <div class="relative">
                            <img src="${pharma.facadeImage ?? 'https://images.unsplash.com/photo-1588776814546-ec7eec8c2f0d'}"
                                class="w-full h-40 object-cover" />

                            <span class="absolute top-3 left-3 text-[10px] bg-green-100 text-green-700 px-2 py-1 rounded-full font-semibold">
                                ${pharma.commune?.name ?? 'COMMUNE'}
                            </span>

                            <span class="absolute top-3 right-3 text-[10px] bg-green-500 text-white px-2 py-1 rounded-full font-semibold">
                                De garde
                            </span>
                        </div>

                        <!-- CONTENT -->
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 text-sm mb-1">
                                ${pharma.name}
                            </h3>

                            <p class="text-xs text-gray-500 mb-3">
                                ${pharma.address ?? 'Adresse non disponible'}
                            </p>

                            <button onclick="openModal('modal-st-cecile')"
                                class="w-full bg-green-500 hover:bg-green-600 text-white text-xs py-2 rounded-full font-medium transition">
                                Voir les détails
                            </button>
                        </div>
                    </div>

                    `;
                                    });

                                } else {
                                    container.innerHTML = `
                    <div class="col-span-3 text-center py-10 text-gray-500">
                        Aucune pharmacie trouvée
                    </div>
                `;
                                }
                            })
                            .catch(err => {
                                console.error(err);
                                alert('Erreur lors du chargement');
                            });
                    });
                </script>

                <!-- RIGHT : SIDEBAR -->
                <div class="lg:col-span-1">
                    <div class="sticky top-5 space-y-4">

                        <!-- MAP CARD -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="px-4 py-3 border-b">
                                <h5 class="text-sm font-semibold flex items-center gap-2">
                                    🗺️ Carte des pharmacies
                                </h5>
                            </div>

                            <div class="p-4 text-center text-gray-500 text-sm">
                                <div class="text-3xl mb-2">📍</div>
                                <p>Carte interactive des pharmacies de garde</p>

                                <button
                                    class="mt-3 text-xs bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-full transition">
                                    Agrandir la carte
                                </button>
                            </div>
                        </div>

                        <!-- INFOS CARD -->
                        <div class="bg-white rounded-2xl shadow-sm border border-gray-100">
                            <div class="px-4 py-3 border-b">
                                <h6 class="text-sm font-semibold flex items-center gap-2">
                                    ℹ️ Informations utiles
                                </h6>
                            </div>

                            <div class="p-4 text-xs text-gray-600 space-y-4">

                                <div>
                                    <h6 class="text-green-600 font-semibold mb-1">Numéros d'urgence</h6>
                                    <p><strong>SAMU:</strong> 185</p>
                                    <p><strong>Pompiers:</strong> 180</p>
                                    <p><strong>Police:</strong> 170</p>
                                </div>

                                <div>
                                    <h6 class="text-green-600 font-semibold mb-1">Horaires habituels</h6>
                                    <p><strong>Lun-Ven:</strong> 8h - 20h</p>
                                    <p><strong>Samedi:</strong> 8h - 18h</p>
                                    <p><strong>Dimanche:</strong> Garde uniquement</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('layouts.footer')
</body>

</html>
