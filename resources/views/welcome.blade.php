<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://public-frontend-cos.metadl.com/mgx/img/favicon.png" type="image/png">
    <title>PharmaConsults - Votre compagnon santé intelligent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#assurances">Assurances</a>
                <a class="nav-link" href="#medicaments">Notice et prix des médicaments</a>
                <a class="nav-link" href="#recherche">Recherche de médicaments</a>
                <a class="nav-link" href="#portefeuille">Portefeuille électronique</a>
                <a class="nav-link" href="#vaccination">Vaccination</a>
            </div>
        </div>
    </nav>

    <!-- Main Header -->
    <header class="main-header bg-white py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo d-flex align-items-center">
                        <i class="fas fa-pills text-success me-2" style="font-size: 2rem;"></i>
                        <h2 class="mb-0 text-success fw-bold">PharmaConsults</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="search-section d-flex">
                        <div class="dropdown me-2">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                shop for Category
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Médicaments</a></li>
                                <li><a class="dropdown-item" href="#">Cosmétiques</a></li>
                                <li><a class="dropdown-item" href="#">Parapharmacie</a></li>
                            </ul>
                        </div>
                        <div class="input-group flex-grow-1">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    All Category
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Tous</a></li>
                                    <li><a class="dropdown-item" href="#">Médicaments</a></li>
                                    <li><a class="dropdown-item" href="#">Cosmétiques</a></li>
                                </ul>
                            </div>
                            <button class="btn btn-success" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header-actions d-flex justify-content-end align-items-center">
                        <a href="#" class="text-decoration-none me-3">
                            <i class="fas fa-user me-1"></i> connexion
                        </a>
                        <a href="#" class="text-decoration-none me-3">
                            <i class="fas fa-shopping-cart me-1"></i> cart
                        </a>
                        <a href="#" class="text-decoration-none">
                            <i class="fas fa-bell me-1"></i> Notification
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Category Navigation -->
    <nav class="category-nav bg-light py-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link text-success" href="#bon-plan">Bon plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#sante">Santé</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#hygiene">Hygiène</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#visage">Visage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#corps">Corps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#cheveux">Cheveux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#nutrition">Nutrition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#bebe">Bébé</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#bio">Bio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#solaires">Solaires</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="#veterinaires">Vétérinaires</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container-fluid p-0">
            <div class="hero-banner position-relative overflow-hidden">
                <div class="row g-0 align-items-center min-vh-50">
                    <div class="col-md-6">
                        <div class="hero-content p-5">
                            <div class="hero-image-container text-center">
                                <div class="medicine-bottles">
                                    <i class="fas fa-prescription-bottle-alt bottle-1"></i>
                                    <i class="fas fa-prescription-bottle bottle-2"></i>
                                    <i class="fas fa-pills bottle-3"></i>
                                    <i class="fas fa-capsules bottle-4"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="hero-text p-5">
                            <div class="logo-section mb-4">
                                <div class="your-logo">
                                    <i class="fas fa-plus-circle text-white"></i>
                                    <span class="text-white fw-bold">PHARMACONSULTS</span>
                                </div>
                            </div>
                            <h1 class="hero-title">
                                MEDICAL<br>
                                <span class="text-cyan">SUPPORT</span>
                            </h1>
                            <p class="hero-subtitle text-white mt-4">
                                Votre compagnon santé intelligent qui connecte toutes les pharmacies de Côte d'Ivoire
                            </p>
                            <div class="social-icons mt-4">
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-decorations">
                    <div class="dots-pattern"></div>
                    <div class="wave-pattern"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center mb-5">Nos Fonctionnalités</h2>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="fas fa-map-marker-alt feature-icon text-success"></i>
                        <h4>Pharmacies de garde</h4>
                        <p>Trouvez une pharmacie de garde près de chez vous, 24h/24</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="fas fa-pills feature-icon text-success"></i>
                        <h4>Informations médicaments</h4>
                        <p>Consultez les prix, indications et fiches complètes des médicaments</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="fas fa-wallet feature-icon text-success"></i>
                        <h4>Portefeuille électronique</h4>
                        <p>Payez vos achats de santé en toute sécurité</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="fas fa-syringe feature-icon text-success"></i>
                        <h4>Module vaccination</h4>
                        <p>Accédez au calendrier vaccinal pour tous les âges</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="fas fa-shopping-bag feature-icon text-success"></i>
                        <h4>Marketplace cosmétique</h4>
                        <p>Achetez vos produits de beauté et bien-être en ligne</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center p-4">
                        <i class="fas fa-shield-alt feature-icon text-success"></i>
                        <h4>Assurances acceptées</h4>
                        <p>Vérifiez quelles assurances sont acceptées par chaque pharmacie</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Purchased Products Section -->
    <section class="products-section py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-md-6">
                    <h3 class="mb-0">MOST PURCHASED PRODUCTS</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a href="#" class="text-decoration-none text-primary">View More</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="product-card bg-white p-3 rounded shadow-sm">
                        <div class="product-image text-center mb-3">
                            <i class="fas fa-prescription-bottle-alt text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h5>Paracétamol</h5>
                        <p class="text-muted">Antalgique et antipyrétique</p>
                        <div class="price fw-bold text-success">2,500 FCFA</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card bg-white p-3 rounded shadow-sm">
                        <div class="product-image text-center mb-3">
                            <i class="fas fa-pills text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h5>Ibuprofène</h5>
                        <p class="text-muted">Anti-inflammatoire</p>
                        <div class="price fw-bold text-success">3,200 FCFA</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card bg-white p-3 rounded shadow-sm">
                        <div class="product-image text-center mb-3">
                            <i class="fas fa-capsules text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h5>Vitamine C</h5>
                        <p class="text-muted">Complément alimentaire</p>
                        <div class="price fw-bold text-success">1,800 FCFA</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="product-card bg-white p-3 rounded shadow-sm">
                        <div class="product-image text-center mb-3">
                            <i class="fas fa-prescription-bottle text-success" style="font-size: 3rem;"></i>
                        </div>
                        <h5>Sirop contre la toux</h5>
                        <p class="text-muted">Antitussif</p>
                        <div class="price fw-bold text-success">4,500 FCFA</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pharmacy Finder Section -->
    <section class="pharmacy-finder py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center mb-4">Trouvez une pharmacie de garde</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="pharmacy-search-form bg-white p-4 rounded shadow">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="commune" class="form-label">Commune</label>
                                <select class="form-select" id="commune">
                                    <option selected>Choisir une commune</option>
                                    <option value="abidjan">Abidjan</option>
                                    <option value="bouake">Bouaké</option>
                                    <option value="yamoussoukro">Yamoussoukro</option>
                                    <option value="korhogo">Korhogo</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="quartier" class="form-label">Quartier</label>
                                <input type="text" class="form-control" id="quartier"
                                    placeholder="Nom du quartier">
                            </div>
                            <div class="col-12">
                                <button type="button" class="btn btn-success w-100">
                                    <i class="fas fa-search me-2"></i>Rechercher des pharmacies de garde
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>PharmaConsults</h5>
                    <p>Votre compagnon santé intelligent qui connecte toutes les pharmacies de Côte d'Ivoire à votre
                        smartphone.</p>
                </div>
                <div class="col-md-2">
                    <h6>Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Pharmacies de garde</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Médicaments</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Vaccination</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h6>Support</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
                        <li><a href="#" class="text-light text-decoration-none">FAQ</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Aide</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6>Restez connecté</h6>
                    <div class="social-links">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-12 text-center">
                    <p>&copy; 2025 PharmaConsults. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="{{ URL::asset('script.js')}}"></script>
</body>

</html>
