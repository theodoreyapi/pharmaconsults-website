<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PharmaConsults – Santé connectée</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --brand: #41BA3E;
            /* Couleur principale (turquoise) */
            --brand-dark: #0793a3;
            /* Hover */
            --accent: #16a34a;
            /* Accent (vert) */
        }

        /* Reset & helpers */
        a {
            text-decoration: none
        }

        .text-brand {
            color: var(--brand) !important
        }

        .bg-brand {
            background: var(--brand) !important
        }

        .btn-brand {
            background: var(--brand);
            color: #fff
        }

        .btn-brand:hover {
            background: var(--brand-dark);
            color: #fff
        }

        /* Topbar */
        .topbar a {
            color: #6b7280;
            font-size: .95rem
        }

        .topbar a:hover {
            color: var(--brand)
        }

        /* Mega menu */
        .mega-menu {
            min-width: 680px;
        }

        /* Category bar */
        .catbar {
            border-top: 1px solid #eef2f7;
            border-bottom: 1px solid #eef2f7
        }

        .catbar a {
            color: #334155;
            padding: .75rem 1rem;
            display: inline-block;
            font-weight: 500
        }

        .catbar a:hover {
            color: var(--brand)
        }

        .catbar a.active {
            color: var(--brand);
            position: relative
        }

        .catbar a.active::after {
            content: "";
            position: absolute;
            left: 1rem;
            right: 1rem;
            bottom: 0;
            height: 3px;
            background: var(--brand)
        }

        /* Hero */
        /* Hero */
        .hero {
            background: linear-gradient(135deg, #0b7885 0%, #0e9fb1 50%, #12bcd3 100%);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .hero::after {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 0;
        }

        .hero h1,
        .hero p,
        .hero .badge,
        .hero .small {
            position: relative;
            z-index: 1;
        }

        .hero .badge {
            background: rgba(255, 255, 255, 0.25);
            border: 1px solid rgba(255, 255, 255, .4);
            color: #fff;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .hero-illu {
            background: radial-gradient(closest-side, rgba(255, 255, 255, .95), rgba(255, 255, 255, .2));
            border-radius: 50%;
            width: 360px;
            height: 360px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, .2);
            position: relative;
            z-index: 1;
            transition: transform 0.3s ease-in-out;
        }

        .hero-illu:hover {
            transform: scale(1.05);
        }

        /* Icônes réseaux sociaux */
        .social-link {
            color: #fff;
            font-size: 1.2rem;
            transition: color 0.3s ease, transform 0.2s ease;
        }

        .social-link:hover {
            color: #ffeb3b;
            /* Jaune punchy au hover */
            transform: scale(1.2);
        }


        /* Product cards */
        .product-card .card {
            transition: transform .2s ease, box-shadow .2s ease
        }

        .product-card .card:hover {
            transform: translateY(-3px);
            box-shadow: 0 1rem 2rem rgba(0, 0, 0, .08)
        }

        .price {
            font-weight: 700;
            font-size: 1.1rem
        }

        /* Footer */
        .footer a {
            color: #94a3b8
        }

        .footer a:hover {
            color: #fff
        }

        /* Utilities */
        .rounded-2xl {
            border-radius: 1rem
        }
    </style>
</head>

<body>

    <!-- Topbar -->
    <div class="topbar py-2 border-bottom small bg-white">
        <div class="container d-flex flex-wrap gap-3 align-items-center justify-content-between">
            <div class="d-flex flex-wrap gap-3">
                <a href="{{ url('pharmacie-garde') }}" class="d-inline-flex align-items-center"><i
                        class="bi bi-geo-alt me-2"></i>Pharmacies de garde</a>
                <a href="#assurances" class="d-inline-flex align-items-center"><i
                        class="bi bi-shield-check me-2"></i>Assurances</a>
                <a href="#notices" class="d-inline-flex align-items-center"><i
                        class="bi bi-file-earmark-text me-2"></i>Notice & Prix des médicaments</a>
                <a href="#cherche-med" class="d-inline-flex align-items-center"><i
                        class="bi bi-search me-2"></i>Recherche de médicaments</a>
                {{-- <a href="#wallet" class="d-inline-flex align-items-center"><i
                        class="bi bi-wallet2 me-2"></i>Portefeuille électronique</a> --}}
                <a href="#vaccination" class="d-inline-flex align-items-center"><i
                        class="bi bi-umbrella-plus me-2"></i>Vaccination</a>
            </div>
            <div class="d-flex align-items-center gap-3">
                <a href="#login" data-bs-toggle="modal" data-bs-target="#authModal"><i class="bi bi-person"></i>
                    connexion</a>
                <a href="#cart" data-bs-toggle="offcanvas" data-bs-target="#cartCanvas"><i class="bi bi-cart"></i>
                    cart</a>
                <a href="#notifications"><i class="bi bi-bell"></i> Notification</a>
            </div>
        </div>
    </div>

    <!-- Header / main nav -->
    <header class="py-3 bg-white">
        <div class="container d-flex align-items-center gap-3">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                {{-- <span class="bg-brand d-inline-flex align-items-center justify-content-center rounded-circle"
                    style="width:42px;height:42px;">
                    <i class="bi bi-crosshair text-white"></i>
                </span> --}}
                <div class="fw-bold"><img height="50" src="{{ URL::asset('') }}logo1.png" alt=""></div>
            </a>

            <!-- Cat dropdown (shop for category) -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">
                    Shop par catégorie
                </button>
                <div class="dropdown-menu p-3 mega-menu">
                    <div class="row g-4">
                        <div class="col-6">
                            <h6 class="mb-2">Santé & Bien-être</h6>
                            <div class="list-group list-group-flush small">
                                <a class="list-group-item" href="#">Douleur & Fièvre</a>
                                <a class="list-group-item" href="#">Rhume & Allergies</a>
                                <a class="list-group-item" href="#">Digestion</a>
                                <a class="list-group-item" href="#">Premiers soins</a>
                                <a class="list-group-item" href="#">Matériel médical</a>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-2">Beauté & Parapharmacie</h6>
                            <div class="list-group list-group-flush small">
                                <a class="list-group-item" href="#">Visage</a>
                                <a class="list-group-item" href="#">Corps</a>
                                <a class="list-group-item" href="#">Cheveux</a>
                                <a class="list-group-item" href="#">Bébé & Maman</a>
                                <a class="list-group-item" href="#">Solaires</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search -->
            <form class="ms-auto me-3 flex-grow-1" role="search">
                <div class="input-group">
                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                    <input class="form-control" type="search" placeholder="Chercher médicament, produit, pharmacie…"
                        aria-label="Search">
                    <button class="btn btn-brand" type="submit">Rechercher</button>
                </div>
            </form>

            <!-- All categories (simple dropdown) -->
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown">All
                    Category</button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Médicaments</a></li>
                    <li><a class="dropdown-item" href="#">Parapharmacie</a></li>
                    <li><a class="dropdown-item" href="#">Cosmétiques</a></li>
                    <li><a class="dropdown-item" href="#">Vétérinaires</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Category bar -->
    <nav class="catbar bg-white">
        <div class="container d-flex flex-wrap align-items-center justify-content-start">
            <a class="active" href="#">Bon plan</a>
            <a href="#">Santé</a>
            <a href="#">Hygiène</a>
            <a href="#">Visage</a>
            <a href="#">Corps</a>
            <a href="#">Cheveux</a>
            <a href="#">Nutrition</a>
            <a href="#">Bébé</a>
            <a href="#">Bio</a>
            <a href="#">Solaires</a>
            <a href="#">Vétérinaires</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero py-5">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 text-white">
                    <span class="badge rounded-pill px-3 py-2 mb-3">Votre santé connectée</span>
                    <h1 class="display-5 fw-bold mb-3">ASSISTANCE MÉDICALE</h1>
                    <p class="lead mb-4">
                        Trouvez une pharmacie, vérifiez la disponibilité d’un médicament, payez en toute sécurité
                        et shoppez vos produits de parapharmacie – partout en Côte d’Ivoire.
                    </p>

                    <div class="mt-4 small opacity-100 fw-semibold">
                        Suivez-nous :
                        <a href="#" class="social-link ms-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link ms-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link ms-2"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-link ms-2"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">
                    <div class="hero-illu">
                        <i class="bi bi-capsule" style="font-size:6rem;color:#0b7885;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Services clés -->
    <section class="py-5 bg-light" id="features">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="h4 m-0">Fonctionnalités clés</h2>
                <a href="#" class="small">Voir tout</a>
            </div>
            <div class="row g-3 row-cols-2 row-cols-md-4 row-cols-lg-8 text-center">
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-geo-alt fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Pharmacies de garde</div>
                        <span class="small">Trouvez une pharmacie de garde près de chez vous, 24h/24</span>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-shield-check fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Assurances acceptées</div>
                        <p>Vérifiez quelles assurances sont acceptées par chaque pharmacie</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-file-earmark-text fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Notices & prix</div>
                        <p>Consultez les prix, indications et fiches complètes des médicaments</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-search fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Dispo en temps réel</div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-chat-left-dots fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Requête à plusieurs pharmacies</div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-wallet2 fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Portefeuille électronique</div>
                        <p>Payez vos achats de santé en toute sécurité</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-clipboard2-pulse fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Calendrier vaccinal</div>
                        <p>Accédez au calendrier vaccinal pour tous les âges</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 bg-white rounded-2xl border h-100">
                        <i class="bi bi-bag fs-3 text-brand"></i>
                        <div class="fw-semibold mt-2 small">Marketplace cosmétique</div>
                        <p>Achetez vos produits de beauté et bien-être en ligne</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Produits les plus achetés -->
    <section class="py-5" id="best-sellers">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4">
                <h2 class="h4 m-0">Most purchased products</h2>
                <a href="#" class="small">View More</a>
            </div>
            <div class="row g-4 row-cols-2 row-cols-md-3 row-cols-lg-5 product-card">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://placehold.co/600x450" class="card-img-top" alt="Produit" />
                        <div class="card-body">
                            <h6 class="card-title">Gel hydroalcoolique 500ml</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="price">3 500 FCFA</span>
                                <button class="btn btn-sm btn-brand"><i
                                        class="bi bi-cart-plus me-1"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://placehold.co/600x450" class="card-img-top" alt="Produit" />
                        <div class="card-body">
                            <h6 class="card-title">Crème solaire SPF50</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="price">8 900 FCFA</span>
                                <button class="btn btn-sm btn-brand"><i
                                        class="bi bi-cart-plus me-1"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://placehold.co/600x450" class="card-img-top" alt="Produit" />
                        <div class="card-body">
                            <h6 class="card-title">Thermomètre frontal</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="price">12 000 FCFA</span>
                                <button class="btn btn-sm btn-brand"><i
                                        class="bi bi-cart-plus me-1"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://placehold.co/600x450" class="card-img-top" alt="Produit" />
                        <div class="card-body">
                            <h6 class="card-title">Shampooing fortifiant</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="price">5 200 FCFA</span>
                                <button class="btn btn-sm btn-brand"><i
                                        class="bi bi-cart-plus me-1"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="https://placehold.co/600x450" class="card-img-top" alt="Produit" />
                        <div class="card-body">
                            <h6 class="card-title">Vitamines C 1000</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="price">6 800 FCFA</span>
                                <button class="btn btn-sm btn-brand"><i
                                        class="bi bi-cart-plus me-1"></i>Ajouter</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pharmacies de garde (aperçu) -->
    {{-- <section class="py-5 bg-light" id="garde">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <h2 class="h4">Pharmacies de garde par commune</h2>
                    <p class="text-muted">Trouvez en quelques secondes la pharmacie ouverte 24h/24 près de chez vous.
                    </p>
                    <div class="mb-3">
                        <label class="form-label">Votre commune</label>
                        <select class="form-select">
                            <option>Abidjan – Cocody</option>
                            <option>Abidjan – Yopougon</option>
                            <option>Abidjan – Marcory</option>
                            <option>Abidjan – Treichville</option>
                            <option>Bouaké</option>
                        </select>
                    </div>
                    <button class="btn btn-brand">Rechercher</button>
                </div>
                <div class="col-lg-7">
                    <div
                        class="bg-white border rounded-2xl h-100 p-3 d-flex align-items-center justify-content-center">
                        <div class="text-center text-muted">
                            <i class="bi bi-map fs-1 d-block mb-2"></i>
                            <div>Carte interactive (à intégrer)</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Bloc Assurances + Vaccination + Wallet -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded-2xl h-100">
                        <h3 class="h5 mb-2" id="assurances"><i
                                class="bi bi-shield-check me-2 text-brand"></i>Assurances acceptées</h3>
                        <p class="small text-muted">Vérifiez les assurances prises en charge par chaque pharmacie.</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Consulter</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded-2xl h-100">
                        <h3 class="h5 mb-2" id="vaccination"><i
                                class="bi bi-clipboard2-pulse me-2 text-brand"></i>Calendrier vaccinal</h3>
                        <p class="small text-muted">Enfants, adultes, femmes enceintes, voyageurs : votre rappel au bon
                            moment.</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Voir le calendrier</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded-2xl h-100">
                        <h3 class="h5 mb-2" id="wallet"><i class="bi bi-wallet2 me-2 text-brand"></i>Portefeuille
                            électronique</h3>
                        <p class="small text-muted">Payez vos achats de santé en toute sécurité. (Intégration Mobile
                            Money)</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm">Ouvrir mon wallet</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        {{-- <span class="bg-brand d-inline-flex align-items-center justify-content-center rounded-circle"
                            style="width:42px;height:42px;">
                            <i class="bi bi-crosshair text-white"></i>
                        </span> --}}
                        <div class="fw-bold"><img height="50" src="{{ URL::asset('') }}logo-white.png" alt=""></div>
                    </div>
                    <p class="text-white-50 small">PharmaConsults connecte toutes les pharmacies de Côte d’Ivoire à
                        votre smartphone. Accédez à des informations fiables et des services santé adaptés au contexte
                        local.</p>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Découvrir</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#features">Fonctionnalités</a></li>
                        <li><a href="#best-sellers">Produits</a></li>
                        <li><a href="#garde">Pharmacies de garde</a></li>
                        <li><a href="#vaccination">Vaccination</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h6 class="mb-3">Assistance</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#">Centre d’aide</a></li>
                        <li><a href="#">Confidentialité</a></li>
                        <li><a href="#">Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h6 class="mb-3">Newsletter</h6>
                    <form class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Votre email" />
                        <button class="btn btn-brand" type="submit">S’inscrire</button>
                    </form>
                    <div class="mt-3 small">Suivez-nous
                        <a href="#" class="ms-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="ms-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="ms-2"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="ms-2"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div
                class="pt-4 mt-4 border-top border-secondary d-flex flex-wrap justify-content-between small text-white-50">
                <div>© {{ date('Y')}} PharmaConsults. Tous droits réservés.</div>
                <div>Abidjan, Côte d’Ivoire</div>
            </div>
        </div>
    </footer>

    <!-- Offcanvas Panier -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartCanvas">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title"><i class="bi bi-cart me-2"></i>Mon panier</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <div class="text-muted small">Votre panier est vide.</div>
            <div class="mt-auto">
                <a href="#" class="btn btn-brand w-100">Valider</a>
            </div>
        </div>
    </div>

    <!-- Modal Auth -->
    <div class="modal fade" id="authModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Connexion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="vstack gap-3">
                        <div>
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="ex: you@domain.com" />
                        </div>
                        <div>
                            <label class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" placeholder="••••••••" />
                        </div>
                        <button class="btn btn-brand" type="submit">Se connecter</button>
                        <div class="small text-center text-muted">Pas de compte ? <a href="#">Créer un
                                compte</a></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Year in footer
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
