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
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        :root {
            --brand: #41BA3E;
            /* Couleur principale (turquoise) */
            --brand-dark: #0793a3;
            /* Hover */
            --accent: #16a34a;
            /* Accent (vert) */
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

        /* Reset & helpers */
        a {
            text-decoration: none;
            transition: var(--transition);
        }

        .text-brand {
            color: var(--brand) !important;
        }

        .bg-brand {
            background: var(--brand) !important;
        }

        .btn-brand {
            background: var(--brand);
            color: #fff;
            border: none;
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn-brand::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background: var(--brand-dark);
            transition: var(--transition);
            z-index: -1;
        }

        .btn-brand:hover::before {
            width: 100%;
        }

        .btn-brand:hover {
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(7, 147, 163, 0.2);
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
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Topbar */
        .topbar {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 100;
            animation: slideDown 0.8s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .topbar a {
            color: #6b7280;
            font-size: .95rem;
            position: relative;
            transition: var(--transition);
        }

        .topbar a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--brand);
            transition: var(--transition);
        }

        .topbar a:hover {
            color: var(--brand);
        }

        .topbar a:hover::after {
            width: 100%;
        }

        /* Header / main nav */
        header {
            background-color: #fff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 1000;
            animation: slideDown 0.8s ease-out 0.2s both;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: var(--brand) !important;
            transition: var(--transition);
        }

        .navbar-brand:hover {
            transform: scale(1.05);
        }

        /* Hero */
        .hero {
            background-image:
                url('banniere.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff;
            position: relative;
            overflow: hidden;
            padding: 100px 0;
            height: 600px;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: 0;
            animation: float 6s ease-in-out infinite;
        }

        .hero::after {
            content: "";
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 500px;
            height: 500px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            z-index: 0;
            animation: float 8s ease-in-out infinite reverse;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }

            100% {
                transform: translateY(0) rotate(0deg);
            }
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
            padding: 8px 16px;
            border-radius: 50px;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .hero h1 {
            font-weight: 700;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeInUp 1s ease-out 0.5s both;
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
            transition: var(--transition);
            animation: float 5s ease-in-out infinite;
        }

        .hero-illu:hover {
            transform: scale(1.05);
            box-shadow: 0 25px 70px rgba(0, 0, 0, .25);
        }

        .hero-illu i {
            font-size: 6rem;
            color: #0b7885;
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        /* Icônes réseaux sociaux */
        .social-link {
            color: #fff;
            font-size: 1.2rem;
            margin: 0 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .social-link:hover {
            color: #0b7885;
            background-color: #fff;
            transform: translateY(-5px);
        }

        /* Fonctionnalités clés */
        #features {
            background-color: var(--light-bg);
            padding: 80px 0;
            position: relative;
        }

        #features::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--brand), var(--brand-dark), var(--accent));
        }

        .feature-card {
            background: #fff;
            border-radius: 16px;
            padding: 25px;
            height: 100%;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--brand);
            transform: scaleX(0);
            transform-origin: left;
            transition: var(--transition);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card i {
            font-size: 2.5rem;
            color: var(--brand);
            margin-bottom: 15px;
            transition: var(--transition);
        }

        .feature-card:hover i {
            transform: scale(1.2);
            color: var(--brand-dark);
        }

        .feature-card .fw-semibold {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #333;
        }

        .feature-card p {
            font-size: 0.9rem;
            color: #666;
            margin: 0;
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

        .footer h6 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer h6::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--brand);
        }

        .footer a {
            color: #94a3b8;
            display: block;
            padding: 5px 0;
            transition: var(--transition);
            position: relative;
        }

        .footer a::before {
            content: '→';
            position: absolute;
            left: -15px;
            opacity: 0;
            transition: var(--transition);
        }

        .footer a:hover {
            color: #fff;
            padding-left: 15px;
        }

        .footer a:hover::before {
            opacity: 1;
            left: 0;
        }

        .footer form {
            position: relative;
        }

        .footer input {
            border-radius: 50px;
            border: none;
            padding: 12px 20px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.1);
            color: #fff;
            transition: var(--transition);
        }

        .footer input:focus {
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: none;
            outline: none;
        }

        .footer input::placeholder {
            color: rgba(255, 255, 255, 0.5);
        }

        .footer button {
            position: absolute;
            right: 5px;
            top: 5px;
            border-radius: 50px;
            background-color: var(--brand);
            border: none;
            color: #fff;
            padding: 7px 15px;
            transition: var(--transition);
        }

        .footer button:hover {
            background-color: var(--brand-dark);
        }

        .footer .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            margin: 0 5px;
            transition: var(--transition);
        }

        .footer .social-links a:hover {
            background-color: var(--brand);
            transform: translateY(-5px);
        }

        /* Modal */
        .modal-content {
            border-radius: 16px;
            border: none;
            overflow: hidden;
        }

        .modal-header {
            background-color: var(--brand);
            color: #fff;
            border: none;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
        }

        .modal-body {
            padding: 30px;
        }

        /* Offcanvas */
        .offcanvas {
            border-radius: 20px 0 0 20px;
        }

        .offcanvas-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-illu {
                width: 280px;
                height: 280px;
            }

            .hero-illu i {
                font-size: 4.5rem;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 60px 0;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-illu {
                width: 220px;
                height: 220px;
                margin-top: 30px;
            }

            .hero-illu i {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <!-- Loader animé -->
    <div class="page-loader" id="pageLoader">
        <div class="loader"></div>
    </div>

    <!-- Topbar -->
    <div class="topbar py-2 border-bottom small">
        <div class="container d-flex flex-wrap gap-3 align-items-center justify-content-between">
            <div class="d-flex flex-wrap gap-3">
                <a href="{{ url('pharmacie-garde') }}" class="d-inline-flex align-items-center"><i
                        class="bi bi-geo-alt me-2"></i>Pharmacies de garde</a>
                <a href="javascript:void(0)" onclick="showDownloadPopup('Assurances')"
                    class="d-inline-flex align-items-center">
                    <i class="bi bi-shield-check me-2"></i>Assurances
                </a>
                <a href="javascript:void(0)" onclick="showDownloadPopup('Notice & Prix des médicaments')"
                    class="d-inline-flex align-items-center">
                    <i class="bi bi-file-earmark-text me-2"></i>Notice & Prix des médicaments
                </a>
                <a href="javascript:void(0)" onclick="showDownloadPopup('Recherche de médicaments')"
                    class="d-inline-flex align-items-center">
                    <i class="bi bi-search me-2"></i>Recherche de médicaments
                </a>
                <a href="javascript:void(0)" onclick="showDownloadPopup('Vaccination')"
                    class="d-inline-flex align-items-center">
                    <i class="bi bi-umbrella-plus me-2"></i>Vaccination
                </a>
            </div>
        </div>
    </div>

    <script>
        function showDownloadPopup(featureName) {
            let modalContent = `
        <div class="text-center">
            <h4 class="text-success mb-3">Téléchargez notre application</h4>
            <p>Pour accéder à <strong>${featureName}</strong>, merci de télécharger notre application mobile :</p>

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

    <!-- Modal générique pour télécharger l'app -->
    <div class="modal fade" id="pharmacyDetailsModal" tabindex="-1" aria-labelledby="pharmacyDetailsLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="pharmacyDetailsLabel">Informations</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Fermer"></button>
                </div>
                <div class="modal-body" id="pharmacyDetailsContent">
                    <!-- Le contenu sera injecté par showDownloadPopup -->
                </div>
            </div>
        </div>
    </div>


    <!-- Header / main nav -->
    <header class="py-3">
        <div class="container d-flex align-items-center gap-3">
            <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                <div class="fw-bold"><img height="50" src="{{ URL::asset('') }}logo1.png" alt=""></div>
            </a>
        </div>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 text-white">

                </div>

                <div class="col-lg-6 d-flex justify-content-lg-end justify-content-center">

                </div>
            </div>
        </div>
    </section>


    <!-- Services clés -->
    <section class="py-5" id="features">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end mb-4" data-aos="fade-up">
                <h2 class="h4 m-0">Fonctionnalités clés</h2>
                <a href="#" class="small">Voir tout</a>
            </div>
            <div class="row g-3 row-cols-2 row-cols-md-4 row-cols-lg-8 text-center">
                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="bi bi-geo-alt"></i>
                        <div class="fw-semibold mt-2">Pharmacies de garde</div>
                        <span class="small">Trouvez une pharmacie de garde près de chez vous, 24h/24</span>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="bi bi-shield-check"></i>
                        <div class="fw-semibold mt-2">Assurances acceptées</div>
                        <p>Vérifiez quelles assurances sont acceptées par chaque pharmacie</p>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="bi bi-file-earmark-text"></i>
                        <div class="fw-semibold mt-2">Notices & prix</div>
                        <p>Consultez les prix, indications et fiches complètes des médicaments</p>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="feature-card">
                        <i class="bi bi-search"></i>
                        <div class="fw-semibold mt-2">Dispo en temps réel</div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="500">
                    <div class="feature-card">
                        <i class="bi bi-chat-left-dots"></i>
                        <div class="fw-semibold mt-2">Requête à plusieurs pharmacies</div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="600">
                    <div class="feature-card">
                        <i class="bi bi-wallet2"></i>
                        <div class="fw-semibold mt-2">Portefeuille électronique</div>
                        <p>Payez vos achats de santé en toute sécurité</p>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="700">
                    <div class="feature-card">
                        <i class="bi bi-clipboard2-pulse"></i>
                        <div class="fw-semibold mt-2">Calendrier vaccinal</div>
                        <p>Accédez au calendrier vaccinal pour tous les âges</p>
                    </div>
                </div>
                <div class="col" data-aos="fade-up" data-aos-delay="800">
                    <div class="feature-card">
                        <i class="bi bi-bag"></i>
                        <div class="fw-semibold mt-2">Marketplace cosmétique</div>
                        <p>Achetez vos produits de beauté et bien-être en ligne</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <div class="fw-bold"><img height="50" src="{{ URL::asset('') }}logo-white.png"
                                alt=""></div>
                    </div>
                    <p class="text-white-50 small">PharmaConsults connecte toutes les pharmacies de Côte d'Ivoire à
                        votre smartphone. Accédez à des informations fiables et des services santé adaptés au contexte
                        local.</p>
                </div>
                <div class="col-6 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                    <h6 class="mb-3">Découvrir</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#features">Fonctionnalités</a></li>
                        <li><a href="#best-sellers">Produits</a></li>
                        <li><a href="#garde">Pharmacies de garde</a></li>
                        <li><a href="#vaccination">Vaccination</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <h6 class="mb-3">Assistance</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#">Centre d'aide</a></li>
                        <li><a href="#">Confidentialité</a></li>
                        <li><a href="#">Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <h6 class="mb-3">Newsletter</h6>
                    <form class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Votre email" />
                        <button class="btn" type="submit">S'inscrire</button>
                    </form>
                    <div class="mt-3 small">Suivez-nous
                        <div class="social-links d-inline-flex ms-2">
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="pt-4 mt-4 border-top border-secondary d-flex flex-wrap justify-content-between small text-white-50">
                <div>© {{ date('Y') }} PharmaConsults. Tous droits réservés.</div>
                <div>Abidjan, Côte d'Ivoire - par <span class="text-primary-600"><a href="https://www.aptiotech.com"
                            target="_blank">AptioTech</a>
                </div>
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
    <!-- AOS Animation Library -->
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
