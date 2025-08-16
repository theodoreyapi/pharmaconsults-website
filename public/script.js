// PharmaConsults Interactive Features
document.addEventListener("DOMContentLoaded", function () {
    console.log("PharmaConsults loaded successfully!");

    // Initialize interactive features
    initializeSearch();
    initializePharmacyFinder();
    initializeProductCards();
    initializeScrollAnimations();

    // Add smooth scrolling for navigation links
    addSmoothScrolling();
});

// Search functionality
function initializeSearch() {
    const searchInput = document.querySelector(
        '.input-group input[type="text"]'
    );
    const searchButton = document.querySelector(".input-group .btn-success");

    if (searchInput && searchButton) {
        searchButton.addEventListener("click", function () {
            const query = searchInput.value.trim();
            if (query) {
                performSearch(query);
            }
        });

        searchInput.addEventListener("keypress", function (e) {
            if (e.key === "Enter") {
                const query = searchInput.value.trim();
                if (query) {
                    performSearch(query);
                }
            }
        });
    }
}

function performSearch(query) {
    console.log("Searching for:", query);

    // Show loading state
    const searchButton = document.querySelector(".input-group .btn-success");
    const originalHTML = searchButton.innerHTML;
    searchButton.innerHTML = '<span class="loading"></span>';

    // Simulate search (in real app, this would be an API call)
    setTimeout(() => {
        searchButton.innerHTML = originalHTML;

        // Mock search results
        const results = mockSearchResults(query);
        displaySearchResults(results);
    }, 1000);
}

function mockSearchResults(query) {
    const allProducts = [
        { name: "Paracétamol", price: "2,500 FCFA", type: "Antalgique" },
        { name: "Ibuprofène", price: "3,200 FCFA", type: "Anti-inflammatoire" },
        { name: "Vitamine C", price: "1,800 FCFA", type: "Complément" },
        {
            name: "Sirop contre la toux",
            price: "4,500 FCFA",
            type: "Antitussif",
        },
        { name: "Aspirine", price: "2,000 FCFA", type: "Antalgique" },
        { name: "Doliprane", price: "2,800 FCFA", type: "Antalgique" },
    ];

    return allProducts.filter(
        (product) =>
            product.name.toLowerCase().includes(query.toLowerCase()) ||
            product.type.toLowerCase().includes(query.toLowerCase())
    );
}

function displaySearchResults(results) {
    // Create results modal or section
    let resultsModal = document.getElementById("searchResultsModal");
    if (!resultsModal) {
        resultsModal = createSearchResultsModal();
        document.body.appendChild(resultsModal);
    }

    const resultsContainer = resultsModal.querySelector(
        ".search-results-content"
    );

    if (results.length === 0) {
        resultsContainer.innerHTML =
            '<p class="text-center">Aucun résultat trouvé.</p>';
    } else {
        resultsContainer.innerHTML = results
            .map(
                (product) => `
            <div class="search-result-item border-bottom py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="mb-1">${product.name}</h6>
                        <small class="text-muted">${product.type}</small>
                    </div>
                    <div class="text-success fw-bold">${product.price}</div>
                </div>
            </div>
        `
            )
            .join("");
    }

    // Show modal
    const modal = new bootstrap.Modal(resultsModal);
    modal.show();
}

function createSearchResultsModal() {
    const modal = document.createElement("div");
    modal.className = "modal fade";
    modal.id = "searchResultsModal";
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Résultats de recherche</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="search-results-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    `;
    return modal;
}

// Pharmacy Finder functionality
function initializePharmacyFinder() {
    const searchButton = document.querySelector(
        ".pharmacy-search-form .btn-success"
    );
    const communeSelect = document.getElementById("commune");
    const quartierInput = document.getElementById("quartier");

    if (searchButton) {
        searchButton.addEventListener("click", function () {
            const commune = communeSelect.value;
            const quartier = quartierInput.value.trim();

            if (commune && commune !== "Choisir une commune") {
                findPharmacies(commune, quartier);
            } else {
                alert("Veuillez sélectionner une commune.");
            }
        });
    }
}

function findPharmacies(commune, quartier) {
    console.log("Searching pharmacies in:", commune, quartier);

    // Show loading state
    const searchButton = document.querySelector(
        ".pharmacy-search-form .btn-success"
    );
    const originalHTML = searchButton.innerHTML;
    searchButton.innerHTML =
        '<span class="loading"></span> Recherche en cours...';

    // Mock pharmacy search
    setTimeout(() => {
        searchButton.innerHTML = originalHTML;

        const pharmacies = mockPharmacyResults(commune, quartier);
        displayPharmacyResults(pharmacies, commune, quartier);
    }, 1500);
}

function mockPharmacyResults(commune, quartier) {
    const pharmacies = [
        {
            name: "Pharmacie de la Paix",
            address: "123 Boulevard Principal, " + commune,
            phone: "+225 20 12 34 56",
            status: "Ouverte 24h/24",
            distance: "0.5 km",
        },
        {
            name: "Pharmacie Moderne",
            address: "456 Avenue de la République, " + commune,
            phone: "+225 20 98 76 54",
            status: "Fermée - Ouvre à 8h",
            distance: "1.2 km",
        },
        {
            name: "Pharmacie du Centre",
            address: "789 Rue Centrale, " + commune,
            phone: "+225 20 11 22 33",
            status: "Ouverte jusqu'à 22h",
            distance: "2.1 km",
        },
    ];

    return pharmacies;
}

function displayPharmacyResults(pharmacies, commune, quartier) {
    let pharmacyModal = document.getElementById("pharmacyResultsModal");
    if (!pharmacyModal) {
        pharmacyModal = createPharmacyResultsModal();
        document.body.appendChild(pharmacyModal);
    }

    const resultsContainer = pharmacyModal.querySelector(
        ".pharmacy-results-content"
    );
    const modalTitle = pharmacyModal.querySelector(".modal-title");

    modalTitle.textContent = `Pharmacies de garde - ${commune}${
        quartier ? " (" + quartier + ")" : ""
    }`;

    resultsContainer.innerHTML = pharmacies
        .map(
            (pharmacy) => `
        <div class="pharmacy-result-item border rounded p-3 mb-3">
            <div class="d-flex justify-content-between align-items-start">
                <div class="flex-grow-1">
                    <h6 class="mb-2 text-success">${pharmacy.name}</h6>
                    <p class="mb-1"><i class="fas fa-map-marker-alt me-2"></i>${pharmacy.address}</p>
                    <p class="mb-1"><i class="fas fa-phone me-2"></i>${pharmacy.phone}</p>
                    <p class="mb-0"><i class="fas fa-clock me-2"></i>${pharmacy.status}</p>
                </div>
                <div class="text-end">
                    <small class="text-muted">${pharmacy.distance}</small>
                    <br>
                    <button class="btn btn-sm btn-outline-success mt-2">Itinéraire</button>
                </div>
            </div>
        </div>
    `
        )
        .join("");

    const modal = new bootstrap.Modal(pharmacyModal);
    modal.show();
}

function createPharmacyResultsModal() {
    const modal = document.createElement("div");
    modal.className = "modal fade";
    modal.id = "pharmacyResultsModal";
    modal.innerHTML = `
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pharmacies de garde</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="pharmacy-results-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    `;
    return modal;
}

// Product Cards interactions
function initializeProductCards() {
    const productCards = document.querySelectorAll(".product-card");

    productCards.forEach((card) => {
        card.addEventListener("click", function () {
            const productName = this.querySelector("h5").textContent;
            const productPrice = this.querySelector(".price").textContent;
            const productDescription =
                this.querySelector(".text-muted").textContent;

            showProductDetails(productName, productPrice, productDescription);
        });

        // Add hover effects
        card.addEventListener("mouseenter", function () {
            this.style.cursor = "pointer";
        });
    });
}

function showProductDetails(name, price, description) {
    let productModal = document.getElementById("productDetailsModal");
    if (!productModal) {
        productModal = createProductDetailsModal();
        document.body.appendChild(productModal);
    }

    const modalTitle = productModal.querySelector(".modal-title");
    const modalBody = productModal.querySelector(".product-details-content");

    modalTitle.textContent = name;
    modalBody.innerHTML = `
        <div class="text-center mb-4">
            <i class="fas fa-pills text-success" style="font-size: 4rem;"></i>
        </div>
        <div class="product-info">
            <h5 class="text-success">${price}</h5>
            <p class="text-muted mb-3">${description}</p>
            <div class="row">
                <div class="col-md-6">
                    <h6>Disponibilité</h6>
                    <p class="text-success"><i class="fas fa-check-circle me-2"></i>En stock</p>
                </div>
                <div class="col-md-6">
                    <h6>Prescription</h6>
                    <p class="text-info"><i class="fas fa-info-circle me-2"></i>Sans ordonnance</p>
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-success me-2">
                    <i class="fas fa-cart-plus me-2"></i>Ajouter au panier
                </button>
                <button class="btn btn-outline-primary">
                    <i class="fas fa-search me-2"></i>Vérifier disponibilité
                </button>
            </div>
        </div>
    `;

    const modal = new bootstrap.Modal(productModal);
    modal.show();
}

function createProductDetailsModal() {
    const modal = document.createElement("div");
    modal.className = "modal fade";
    modal.id = "productDetailsModal";
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="product-details-content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    `;
    return modal;
}

// Scroll animations
function initializeScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in");
            }
        });
    }, observerOptions);

    // Observe feature cards
    const featureCards = document.querySelectorAll(".feature-card");
    featureCards.forEach((card) => observer.observe(card));

    // Observe product cards
    const productCards = document.querySelectorAll(".product-card");
    productCards.forEach((card) => observer.observe(card));
}

// Smooth scrolling for navigation
function addSmoothScrolling() {
    const navLinks = document.querySelectorAll('a[href^="#"]');

    navLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            const href = this.getAttribute("href");
            if (href.length > 1) {
                // Skip empty anchors
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            }
        });
    });
}

// Category navigation functionality
function initializeCategoryNavigation() {
    const categoryLinks = document.querySelectorAll(".category-nav .nav-link");

    categoryLinks.forEach((link) => {
        link.addEventListener("click", function (e) {
            e.preventDefault();

            // Remove active class from all links
            categoryLinks.forEach((l) => l.classList.remove("text-success"));
            categoryLinks.forEach((l) => l.classList.add("text-dark"));

            // Add active class to clicked link
            this.classList.remove("text-dark");
            this.classList.add("text-success");

            // Get category
            const category = this.textContent.trim();
            filterProductsByCategory(category);
        });
    });
}

function filterProductsByCategory(category) {
    console.log("Filtering by category:", category);

    // In a real application, this would filter products
    // For demo purposes, we'll just show a message
    const toast = createToast(`Filtrage par catégorie: ${category}`, "info");
    document.body.appendChild(toast);

    const toastInstance = new bootstrap.Toast(toast);
    toastInstance.show();

    // Remove toast after it's hidden
    toast.addEventListener("hidden.bs.toast", () => {
        toast.remove();
    });
}

function createToast(message, type = "info") {
    const toast = document.createElement("div");
    toast.className = `toast align-items-center text-bg-${type} border-0`;
    toast.setAttribute("role", "alert");
    toast.style.position = "fixed";
    toast.style.top = "20px";
    toast.style.right = "20px";
    toast.style.zIndex = "9999";

    toast.innerHTML = `
        <div class="d-flex">
            <div class="toast-body">
                ${message}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
    `;

    return toast;
}

// Initialize category navigation when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
    initializeCategoryNavigation();
});

// Wallet functionality
function initializeWallet() {
    const walletLink = document.querySelector('a[href="#portefeuille"]');

    if (walletLink) {
        walletLink.addEventListener("click", function (e) {
            e.preventDefault();
            showWalletModal();
        });
    }
}

function showWalletModal() {
    let walletModal = document.getElementById("walletModal");
    if (!walletModal) {
        walletModal = createWalletModal();
        document.body.appendChild(walletModal);
    }

    const modal = new bootstrap.Modal(walletModal);
    modal.show();
}

function createWalletModal() {
    const modal = document.createElement("div");
    modal.className = "modal fade";
    modal.id = "walletModal";
    modal.innerHTML = `
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-wallet me-2 text-success"></i>
                        Portefeuille électronique
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="wallet-balance text-center mb-4">
                        <h3 class="text-success">25,000 FCFA</h3>
                        <p class="text-muted">Solde disponible</p>
                    </div>
                    <div class="wallet-actions">
                        <button class="btn btn-success w-100 mb-2">
                            <i class="fas fa-plus me-2"></i>Recharger le portefeuille
                        </button>
                        <button class="btn btn-outline-primary w-100 mb-2">
                            <i class="fas fa-history me-2"></i>Historique des transactions
                        </button>
                        <button class="btn btn-outline-secondary w-100">
                            <i class="fas fa-cog me-2"></i>Paramètres du portefeuille
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    return modal;
}

// Initialize wallet functionality
document.addEventListener("DOMContentLoaded", function () {
    initializeWallet();
});
