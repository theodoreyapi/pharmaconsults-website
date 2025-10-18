<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacies de Garde</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --brand: #41BA3E;
            --brand-dark: #0793a3;
            --accent: #16a34a;
            --light-bg: #f8f9fa;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            overflow-x: hidden;
            background-color: #ffffff;
        }

        /* Loader animé */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s, visibility 0.5s;
        }

        .loader-hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loader {
            width: 60px;
            height: 60px;
            border: 5px solid #f3f3f3;
            border-top: 5px solid var(--brand);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: var(--transition);
        }

        .navbar-brand {
            font-weight: 700;
            transition: var(--transition);
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        .nav-link {
            font-weight: 500;
            position: relative;
            transition: var(--transition);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #fff;
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Emergency Banner */
        .emergency-banner {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            padding: 1.5rem;
            border-radius: 0.75rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 25px rgba(220, 53, 69, 0.2);
            position: relative;
            overflow: hidden;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(220, 53, 69, 0); }
            100% { box-shadow: 0 0 0 0 rgba(220, 53, 69, 0); }
        }

        .emergency-banner::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.05);
            transform: rotate(45deg);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .emergency-banner h5 {
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .emergency-banner .btn {
            background-color: #fff;
            color: #dc3545;
            border: none;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            transition: var(--transition);
        }

        .emergency-banner .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Page Header */
        .page-header {
            position: relative;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }

        .page-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--brand), var(--brand-dark));
            border-radius: 2px;
        }

        .page-header h1 {
            font-weight: 700;
            color: #333;
            margin-bottom: 0.5rem;
        }

        /* Search Filters */
        .search-filters {
            background: linear-gradient(to bottom right, #f8f9fa, #e9ecef);
            border-radius: 1rem;
            padding: 2rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(0, 0, 0, 0.03);
            transition: var(--transition);
        }

        .search-filters:hover {
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-select, .form-control {
            border-radius: 0.5rem;
            border: 1px solid #ced4da;
            padding: 0.75rem 1rem;
            transition: var(--transition);
        }

        .form-select:focus, .form-control:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 0.25rem rgba(65, 186, 62, 0.25);
        }

        .btn-success {
            background: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
            border: none;
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-success::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: var(--transition);
            z-index: -1;
        }

        .btn-success:hover::before {
            width: 100%;
        }

        .btn-success:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(65, 186, 62, 0.3);
        }

        .btn-outline-primary, .btn-outline-secondary {
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-outline-primary:hover, .btn-outline-secondary:hover {
            transform: translateY(-3px);
        }

        /* Pharmacy Cards */
        .pharmacy-card {
            background: #fff;
            border-radius: 1rem;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border-left: 4px solid transparent;
            transition: var(--transition);
            overflow: hidden;
            position: relative;
        }

        .pharmacy-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--brand), var(--brand-dark));
            transform: scaleX(0);
            transform-origin: left;
            transition: var(--transition);
        }

        .pharmacy-card:hover {
            border-left-color: var(--brand);
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .pharmacy-card:hover::before {
            transform: scaleX(1);
        }

        .pharmacy-card h5 {
            color: var(--brand);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .pharmacy-card p {
            color: #6c757d;
            margin-bottom: 1rem;
        }

        .pharmacy-card img {
            border-radius: 0.5rem;
            transition: var(--transition);
        }

        .pharmacy-card:hover img {
            transform: scale(1.05);
        }

        .btn-info {
            background-color: var(--brand-dark);
            border: none;
            border-radius: 50px;
            padding: 0.4rem 1rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .btn-info:hover {
            background-color: var(--brand);
            transform: translateY(-2px);
        }

        /* Status Badges */
        .status-open {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            display: inline-block;
        }

        .status-closed {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            display: inline-block;
        }

        .status-limited {
            color: #fd7e14;
            background-color: rgba(253, 126, 20, 0.1);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            display: inline-block;
        }

        .distance-badge {
            background-color: #e9ecef;
            color: #495057;
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            font-weight: 500;
            display: inline-block;
        }

        /* Map Container */
        .map-container {
            height: 400px;
            background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            overflow: hidden;
            position: relative;
            transition: var(--transition);
        }

        .map-container:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .map-container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            transform: rotate(45deg);
            animation: mapShine 8s infinite;
        }

        @keyframes mapShine {
            0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
            100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        }

        .map-container i {
            font-size: 4rem;
            margin-bottom: 1rem;
            color: var(--brand);
            opacity: 0.7;
        }

        .map-container .btn {
            background-color: var(--brand);
            border: none;
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            font-weight: 500;
            transition: var(--transition);
        }

        .map-container .btn:hover {
            background-color: var(--brand-dark);
            transform: translateY(-3px);
        }

        /* Info Card */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            overflow: hidden;
        }

        .card:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            padding: 1rem 1.5rem;
        }

        .card-header h5, .card-header h6 {
            margin-bottom: 0;
            font-weight: 600;
            color: #333;
        }

        .card-header i {
            color: var(--brand);
        }

        .card-body {
            padding: 1.5rem;
        }

        .card-body h6 {
            color: var(--brand);
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .card-body p {
            margin-bottom: 0.5rem;
            color: #6c757d;
        }

        .card-body ul li {
            margin-bottom: 0.5rem;
            color: #6c757d;
        }

        .card-body i {
            color: var(--brand);
        }

        /* View Toggle Buttons */
        #listViewBtn, #mapViewBtn {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: var(--transition);
        }

        #listViewBtn:hover, #mapViewBtn:hover {
            background-color: var(--brand);
            color: #fff;
        }

        /* Modal */
        .modal-content {
            border-radius: 1rem;
            border: none;
            overflow: hidden;
        }

        .modal-header {
            background: linear-gradient(135deg, var(--brand) 0%, var(--brand-dark) 100%);
            color: #fff;
            border: none;
            padding: 1.5rem;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
            opacity: 0.8;
            transition: var(--transition);
        }

        .modal-header .btn-close:hover {
            opacity: 1;
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 2rem;
        }

        /* Footer */
        .footer {
            background: linear-gradient(to right, #1a1a1a, #2d2d2d);
            color: #fff;
            padding: 70px 0 20px;
            position: relative;
            overflow: hidden;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--brand), var(--brand-dark), var(--accent));
        }

        .footer a {
            color: #94a3b8;
            transition: var(--transition);
        }

        .footer a:hover {
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .map-container {
                height: 300px;
            }
        }

        @media (max-width: 768px) {
            .emergency-banner {
                padding: 1rem;
            }

            .emergency-banner .row {
                text-align: center;
            }

            .emergency-banner .col-md-4 {
                margin-top: 1rem;
            }

            .search-filters {
                padding: 1.5rem;
            }

            .page-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>

    <!-- Loader animé -->
    <div class="page-loader" id="pageLoader">
        <div class="loader"></div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img height="50"
                    src="{{ URL::asset('') }}logo-white.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Pharmacies de Garde</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Emergency Banner -->
{{--     <div class="container mt-4" data-aos="fade-down">
        <div class="emergency-banner">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="mb-1">🚨 Service d'urgence 24h/24</h5>
                    <p class="mb-0">Trouvez rapidement une pharmacie de garde près de chez vous en cas d'urgence
                        médicale</p>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn">
                        <i class="bi bi-telephone-fill me-2"></i>
                        Appel d'urgence
                    </button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Page Header -->
    <div class="container mt-4">
        <div class="page-header text-center" data-aos="fade-up">
            <h1 class="display-4">Pharmacies de Garde</h1>
            <p class="text-muted">Trouvez une pharmacie ouverte près de chez vous, 24h/24 et 7j/7</p>
        </div>
    </div>

    <!-- Search Filters -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="search-filters">
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="commune" class="form-label">Commune</label>
                    <select class="form-select" id="commune">
                        <option value="">Sélectionnez la commune</option>
                        @foreach ($communes['content'] as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- Results Section -->
    <div class="container">
        <div class="row">
            <!-- Pharmacies List -->
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-3" data-aos="fade-up" data-aos-delay="200">
                    <h4 id="resultsTitle">Pharmacies de garde disponibles</h4>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-outline-secondary" id="listViewBtn">
                            <i class="bi bi-list-ul"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-secondary" id="mapViewBtn">
                            <i class="bi bi-map"></i>
                        </button>
                    </div>
                </div>

                <script>
                    document.getElementById('commune').addEventListener('change', function() {
                        let communeId = this.value;

                        if (communeId) {
                            fetch(`/pharmacies-par-commune/${communeId}`)
                                .then(response => response.json())
                                .then(data => {
                                    let pharmaciesContainer = document.getElementById('pharmaciesList');
                                    pharmaciesContainer.innerHTML = '';

                                    if (Array.isArray(data) && data.length > 0) {
                                        data.forEach((pharma, index) => {
                                            pharmaciesContainer.innerHTML += `
                        <div class="pharmacy-card" data-aos="fade-up" data-aos-delay="${index * 100}">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="mb-1">${pharma.name}</h5>
                                    <p class="text-muted mb-2">
                                        <i class="bi bi-geo-alt-fill me-2"></i>
                                        ${pharma.address ?? 'Adresse non disponible'}
                                    </p>
                                    <button class="btn btn-info btn-sm text-white" onclick='showPharmacyDetails(${JSON.stringify(pharma)})'>
                                        <i class="bi bi-info-circle me-1"></i> Détails
                                    </button>
                                </div>
                                <div class="col-md-4 text-end">
                                    <img src="${pharma.facadeImage}" alt="${pharma.name}" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    `;
                                        });

                                        // Réinitialiser AOS pour les nouveaux éléments
                                        AOS.refresh();
                                    } else {
                                        pharmaciesContainer.innerHTML =
                                            '<div class="text-center py-5" data-aos="fade-up"><p class="text-muted">Aucune pharmacie trouvée pour cette commune.</p></div>';
                                    }
                                })
                                .catch(err => {
                                    console.error(err);
                                    alert('Erreur lors de la récupération des pharmacies.');
                                });
                        }
                    });

                    // Fonction pour afficher les détails dans un modal
                    function showPharmacyDetails(pharma) {
                        let modalContent = `
        <div class="text-center">
            <h4 class="text-success mb-3">Téléchargez notre application</h4>
            <p>Pour en savoir plus sur <strong>${pharma.name}</strong>, <br> merci de télécharger notre application mobile :</p>

            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="https://play.google.com/store/apps/details?id=com.aptiotech.pharmaconsult.yapi.pharmaconsult"
                   target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/360px-Google_Play_Store_badge_EN.svg.png?20220907104002"
                         alt="Google Play" style="height:50px;">
                </a>
                <a href="https://apps.apple.com/app/idXXXXXXXXX" target="_blank">
                    <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg"
                         alt="App Store" style="height:50px;">
                </a>
            </div>
        </div>
    `;

                        document.getElementById('pharmacyDetailsContent').innerHTML = modalContent;
                        let modal = new bootstrap.Modal(document.getElementById('pharmacyDetailsModal'));
                        modal.show();
                    }
                </script>

                <!-- Conteneur des pharmacies -->
                <div id="pharmaciesList"></div>

                <!-- Modal pour les détails -->
                <div class="modal fade" id="pharmacyDetailsModal" tabindex="-1" aria-labelledby="pharmacyDetailsLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-success text-white">
                                <h5 class="modal-title" id="pharmacyDetailsLabel">Détails de la pharmacie</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                    aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body" id="pharmacyDetailsContent">
                                <!-- Contenu injecté en JS -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Map Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 20px;">
                    <div class="card" data-aos="fade-left" data-aos-delay="300">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="bi bi-map me-2"></i>Carte des pharmacies
                            </h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="map-container">
                                <div class="text-center p-4">
                                    <i class="bi bi-map"></i>
                                    <p class="mt-2">Carte interactive des pharmacies de garde</p>
                                    <button class="btn">
                                        <i class="bi bi-fullscreen me-1"></i>Agrandir la carte
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Info Card -->
                    <div class="card mt-3" data-aos="fade-left" data-aos-delay="400">
                        <div class="card-header">
                            <h6 class="card-title mb-0">
                                <i class="bi bi-info-circle me-2"></i>Informations utiles
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="text-success">Numéros d'urgence</h6>
                                <p class="mb-1"><strong>SAMU:</strong> 185</p>
                                <p class="mb-1"><strong>Pompiers:</strong> 180</p>
                                <p class="mb-0"><strong>Police:</strong> 170</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-success">Horaires habituels</h6>
                                <p class="mb-1"><strong>Lun-Ven:</strong> 8h - 20h</p>
                                <p class="mb-1"><strong>Samedi:</strong> 8h - 18h</p>
                                <p class="mb-0"><strong>Dimanche:</strong> Garde uniquement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-5">
        <div class="container">
            <div
                class="pt-4 mt-4 border-top border-secondary d-flex flex-wrap justify-content-between small text-white-50">
                <div>© {{ date('Y') }} PharmaConsults. Tous droits réservés.</div>
                <div>Abidjan, Côte d'Ivoire - par <span class="text-primary-600"><a href="https://www.aptiotech.com"
                        target="_blank">AptioTech</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialisation AOS
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Loader
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('pageLoader').classList.add('loader-hidden');
            }, 500);
        });

        // Year in footer
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
