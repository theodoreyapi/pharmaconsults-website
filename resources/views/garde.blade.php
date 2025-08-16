<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/images/favicon.jpg" type="image/png">
    <title>Pharmacies de Garde - PharmaConsults</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
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
    </style>
</head>

<body>
    <!-- Navigation Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <i class="fas fa-pills text-success me-2" style="font-size: 1.5rem;"></i>
                <span class="text-success fw-bold">PharmaConsults</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pharmacies-garde.html">Pharmacies de garde</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#medicaments">Médicaments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#vaccination">Vaccination</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Emergency Banner -->
    <div class="container mt-4">
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
    </div>

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
                <div class="col-md-4">
                    <label for="commune" class="form-label fw-bold">Commune</label>
                    <select class="form-select" id="commune">
                        <option value="">Toutes les communes</option>
                        <option value="abidjan">Abidjan</option>
                        <option value="bouake">Bouaké</option>
                        <option value="yamoussoukro">Yamoussoukro</option>
                        <option value="korhogo">Korhogo</option>
                        <option value="daloa">Daloa</option>
                        <option value="san-pedro">San Pedro</option>
                    </select>
                </div>
                <div class="col-md-4">
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
                </div>
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

                <div id="pharmaciesList">
                    <!-- Pharmacy cards will be dynamically loaded here -->
                    <div class="pharmacy-card bg-white p-4 rounded shadow-sm mb-3">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="text-success mb-1">Pharmacie de la Paix</h5>
                                    <span class="status-open">
                                        <i class="fas fa-circle me-1"></i>Ouverte 24h/24
                                    </span>
                                </div>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    123 Boulevard Principal, Cocody, Abidjan
                                </p>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-phone me-2"></i>
                                    +225 20 12 34 56
                                </p>
                                <div class="d-flex align-items-center gap-3">
                                    <span class="distance-badge">
                                        <i class="fas fa-route me-1"></i>0.5 km
                                    </span>
                                    <small class="text-muted">
                                        <i class="fas fa-star text-warning me-1"></i>
                                        4.8 (127 avis)
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <div class="d-flex flex-column gap-2">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-route me-1"></i>Itinéraire
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-phone me-1"></i>Appeler
                                    </button>
                                    <button class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-info-circle me-1"></i>Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pharmacy-card bg-white p-4 rounded shadow-sm mb-3">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="text-success mb-1">Pharmacie Moderne</h5>
                                    <span class="status-limited">
                                        <i class="fas fa-clock me-1"></i>Ouvre à 8h00
                                    </span>
                                </div>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    456 Avenue de la République, Plateau, Abidjan
                                </p>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-phone me-2"></i>
                                    +225 20 98 76 54
                                </p>
                                <div class="d-flex align-items-center gap-3">
                                    <span class="distance-badge">
                                        <i class="fas fa-route me-1"></i>1.2 km
                                    </span>
                                    <small class="text-muted">
                                        <i class="fas fa-star text-warning me-1"></i>
                                        4.5 (89 avis)
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <div class="d-flex flex-column gap-2">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-route me-1"></i>Itinéraire
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-phone me-1"></i>Appeler
                                    </button>
                                    <button class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-info-circle me-1"></i>Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pharmacy-card bg-white p-4 rounded shadow-sm mb-3">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="text-success mb-1">Pharmacie du Centre</h5>
                                    <span class="status-open">
                                        <i class="fas fa-circle me-1"></i>Ouverte jusqu'à 22h
                                    </span>
                                </div>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    789 Rue Centrale, Marcory, Abidjan
                                </p>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-phone me-2"></i>
                                    +225 20 11 22 33
                                </p>
                                <div class="d-flex align-items-center gap-3">
                                    <span class="distance-badge">
                                        <i class="fas fa-route me-1"></i>2.1 km
                                    </span>
                                    <small class="text-muted">
                                        <i class="fas fa-star text-warning me-1"></i>
                                        4.7 (156 avis)
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <div class="d-flex flex-column gap-2">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-route me-1"></i>Itinéraire
                                    </button>
                                    <button class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-phone me-1"></i>Appeler
                                    </button>
                                    <button class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-info-circle me-1"></i>Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pharmacy-card bg-white p-4 rounded shadow-sm mb-3">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <h5 class="text-success mb-1">Pharmacie de l'Espoir</h5>
                                    <span class="status-closed">
                                        <i class="fas fa-times-circle me-1"></i>Fermée - Urgence seulement
                                    </span>
                                </div>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-map-marker-alt me-2"></i>
                                    321 Boulevard des Martyrs, Treichville, Abidjan
                                </p>
                                <p class="text-muted mb-2">
                                    <i class="fas fa-phone me-2"></i>
                                    +225 20 55 44 33
                                </p>
                                <div class="d-flex align-items-center gap-3">
                                    <span class="distance-badge">
                                        <i class="fas fa-route me-1"></i>3.5 km
                                    </span>
                                    <small class="text-muted">
                                        <i class="fas fa-star text-warning me-1"></i>
                                        4.2 (73 avis)
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4 text-end">
                                <div class="d-flex flex-column gap-2">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-route me-1"></i>Itinéraire
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm">
                                        <i class="fas fa-exclamation-triangle me-1"></i>Urgence
                                    </button>
                                    <button class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-info-circle me-1"></i>Détails
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
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
                            <div>
                                <h6 class="text-success">Services disponibles</h6>
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fas fa-check text-success me-2"></i>Ordonnances</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Médicaments sans ordonnance</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Tests rapides</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Conseils pharmaceutiques</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>PharmaConsults</h5>
                    <p class="mb-0">Votre compagnon santé intelligent en Côte d'Ivoire</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 PharmaConsults. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::asset('pharmacy-guard.js') }}"></script>
</body>

</html>
