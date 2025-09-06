<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacies de Garde</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .pharmacy-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .pharmacy-card:hover {
            border-left-color: #28a745;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .status-open {
            color: #28a745;
            background-color: rgba(40, 167, 69, 0.1);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }

        .status-closed {
            color: #dc3545;
            background-color: rgba(220, 53, 69, 0.1);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }

        .status-limited {
            color: #fd7e14;
            background-color: rgba(253, 126, 20, 0.1);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }

        .distance-badge {
            background-color: #e9ecef;
            color: #495057;
            padding: 0.25rem 0.5rem;
            border-radius: 1rem;
            font-size: 0.875rem;
        }

        .search-filters {
            background: #f8f9fa;
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .emergency-banner {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: white;
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .map-container {
            height: 400px;
            background: #e9ecef;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
        }

        /* Footer */
        .footer a {
            color: #94a3b8
        }

        .footer a:hover {
            color: #fff
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
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
    {{-- <div class="container mt-4">
        <div class="emergency-banner">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h5 class="mb-1">🚨 Service d'urgence 24h/24</h5>
                    <p class="mb-0">Trouvez rapidement une pharmacie de garde près de chez vous en cas d'urgence
                        médicale</p>
                </div>
                <div class="col-md-4 text-end">
                    <button class="btn btn-light btn-lg">
                        <i class="fas fa-phone me-2"></i>
                        Appel d'urgence
                    </button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Page Header -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="display-4 text-center mb-2">Pharmacies de Garde</h1>
                <p class="text-center text-muted mb-4">Trouvez une pharmacie ouverte près de chez vous, 24h/24 et 7j/7
                </p>
            </div>
        </div>
    </div>

    <!-- Search Filters -->
    <div class="container">
        <div class="search-filters">
            <div class="row g-3">
                <div class="col-md-12">
                    <label for="commune" class="form-label fw-bold">Commune</label>
                    <select class="form-select" id="commune">
                        <option value="">Sélectionnez la commune</option>
                        @foreach ($communes['content'] as $item)
                            <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="col-md-4">
                    <label for="quartier" class="form-label fw-bold">Quartier</label>
                    <input type="text" class="form-control" id="quartier" placeholder="Nom du quartier (optionnel)">
                </div>
                <div class="col-md-4">
                    <label for="status" class="form-label fw-bold">Statut</label>
                    <select class="form-select" id="status">
                        <option value="">Tous les statuts</option>
                        <option value="open">Ouvertes maintenant</option>
                        <option value="24h">Ouvertes 24h/24</option>
                        <option value="limited">Horaires limités</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-success" id="searchBtn">
                            <i class="fas fa-search me-2"></i>Rechercher
                        </button>
                        <button type="button" class="btn btn-outline-primary" id="locateBtn">
                            <i class="fas fa-location-arrow me-2"></i>Me localiser
                        </button>
                        <button type="button" class="btn btn-outline-secondary" id="resetBtn">
                            <i class="fas fa-undo me-2"></i>Réinitialiser
                        </button>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Results Section -->
    <div class="container">
        <div class="row">
            <!-- Pharmacies List -->
            <div class="col-lg-8">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 id="resultsTitle">Pharmacies de garde disponibles</h4>
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-outline-secondary" id="listViewBtn">
                            <i class="fas fa-list"></i>
                        </button>
                        <button class="btn btn-sm btn-outline-secondary" id="mapViewBtn">
                            <i class="fas fa-map"></i>
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
                                        data.forEach(pharma => {
                                            pharmaciesContainer.innerHTML += `
                        <div class="pharmacy-card bg-white p-4 rounded shadow-sm mb-3">
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="text-success mb-1">${pharma.name}</h5>
                                    <p class="text-muted mb-2">
                                        <i class="fas fa-map-marker-alt me-2"></i>
                                        ${pharma.address ?? 'Adresse non disponible'}
                                    </p>
                                    <button class="btn btn-info btn-sm text-white" onclick='showPharmacyDetails(${JSON.stringify(pharma)})'>
                                        <i class="fas fa-info-circle me-1"></i> Détails
                                    </button>
                                </div>
                                <div class="col-md-4 text-end">
                                    <img src="${pharma.facadeImage}" alt="${pharma.name}" class="img-fluid rounded">
                                </div>
                            </div>
                        </div>
                    `;
                                        });
                                    } else {
                                        pharmaciesContainer.innerHTML =
                                            '<p class="text-center text-muted">Aucune pharmacie trouvée pour cette commune.</p>';
                                    }
                                })
                                .catch(err => {
                                    console.error(err);
                                    alert('Erreur lors de la récupération des pharmacies.');
                                });
                        }
                    });

                    // Fonction pour afficher les détails dans un modal
                    // Fonction pour afficher le popup de téléchargement
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
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">
                                <i class="fas fa-map me-2"></i>Carte des pharmacies
                            </h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="map-container">
                                <div class="text-center">
                                    <i class="fas fa-map text-muted" style="font-size: 3rem;"></i>
                                    <p class="mt-2">Carte interactive des pharmacies de garde</p>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-expand me-1"></i>Agrandir la carte
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Info Card -->
                    <div class="card mt-3">
                        <div class="card-header">
                            <h6 class="card-title mb-0">
                                <i class="fas fa-info-circle me-2"></i>Informations utiles
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
                            {{-- <div>
                                <h6 class="text-success">Services disponibles</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-check text-success me-2"></i>Ordonnances</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Médicaments sans ordonnance</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Tests rapides</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Conseils pharmaceutiques</li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container">
            <div
                class="pt-4 mt-4 border-top border-secondary d-flex flex-wrap justify-content-between small text-white-50">
                <div>© {{ date('Y') }} PharmaConsults. Tous droits réservés.</div>
                <div>Abidjan, Côte d’Ivoire</div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
