// Pharmacy Guard Page JavaScript
document.addEventListener("DOMContentLoaded", function () {
    console.log("Pharmacy Guard page loaded");

    initializePharmacySearch();
    initializeFilters();
    initializeViewToggle();
    initializePharmacyActions();
    initializeGeolocation();
});

// Mock pharmacy data
const pharmaciesData = [
    {
        id: 1,
        name: "Pharmacie de la Paix",
        address: "123 Boulevard Principal, Cocody, Abidjan",
        phone: "+225 20 12 34 56",
        status: "open_24h",
        statusText: "Ouverte 24h/24",
        distance: 0.5,
        rating: 4.8,
        reviews: 127,
        commune: "abidjan",
        quartier: "cocody",
        services: ["Ordonnances", "Tests rapides", "Conseils"],
        coordinates: { lat: 5.3364, lng: -4.0267 },
    },
    {
        id: 2,
        name: "Pharmacie Moderne",
        address: "456 Avenue de la République, Plateau, Abidjan",
        phone: "+225 20 98 76 54",
        status: "limited",
        statusText: "Ouvre à 8h00",
        distance: 1.2,
        rating: 4.5,
        reviews: 89,
        commune: "abidjan",
        quartier: "plateau",
        services: ["Ordonnances", "Cosmétiques", "Parapharmacie"],
        coordinates: { lat: 5.3197, lng: -4.0267 },
    },
    {
        id: 3,
        name: "Pharmacie du Centre",
        address: "789 Rue Centrale, Marcory, Abidjan",
        phone: "+225 20 11 22 33",
        status: "open",
        statusText: "Ouverte jusqu'à 22h",
        distance: 2.1,
        rating: 4.7,
        reviews: 156,
        commune: "abidjan",
        quartier: "marcory",
        services: ["Ordonnances", "Vaccination", "Tests rapides"],
        coordinates: { lat: 5.2823, lng: -4.0084 },
    },
    {
        id: 4,
        name: "Pharmacie de l'Espoir",
        address: "321 Boulevard des Martyrs, Treichville, Abidjan",
        phone: "+225 20 55 44 33",
        status: "emergency",
        statusText: "Fermée - Urgence seulement",
        distance: 3.5,
        rating: 4.2,
        reviews: 73,
        commune: "abidjan",
        quartier: "treichville",
        services: ["Urgences", "Ordonnances"],
        coordinates: { lat: 5.27, lng: -4.02 },
    },
    {
        id: 5,
        name: "Pharmacie de la Santé",
        address: "654 Avenue Général de Gaulle, Bouaké",
        phone: "+225 31 63 45 78",
        status: "open_24h",
        statusText: "Ouverte 24h/24",
        distance: 0.8,
        rating: 4.6,
        reviews: 92,
        commune: "bouake",
        quartier: "centre-ville",
        services: ["Ordonnances", "Tests rapides", "Cosmétiques"],
        coordinates: { lat: 7.6944, lng: -5.03 },
    },
    {
        id: 6,
        name: "Pharmacie Yamoussoukro",
        address: "987 Boulevard de la Paix, Yamoussoukro",
        phone: "+225 30 64 25 17",
        status: "open",
        statusText: "Ouverte jusqu'à 20h",
        distance: 1.5,
        rating: 4.4,
        reviews: 68,
        commune: "yamoussoukro",
        quartier: "centre",
        services: ["Ordonnances", "Parapharmacie", "Conseils"],
        coordinates: { lat: 6.8276, lng: -5.2893 },
    },
];

let filteredPharmacies = [...pharmaciesData];
let currentFilters = {
    commune: "",
    quartier: "",
    status: "",
};
let currentView = "list"; // 'list' or 'map'

function initializePharmacySearch() {
    const searchBtn = document.getElementById("searchBtn");
    const resetBtn = document.getElementById("resetBtn");

    if (searchBtn) {
        searchBtn.addEventListener("click", performSearch);
    }

    if (resetBtn) {
        resetBtn.addEventListener("click", resetFilters);
    }
}

function initializeFilters() {
    const communeSelect = document.getElementById("commune");
    const quartierInput = document.getElementById("quartier");
    const statusSelect = document.getElementById("status");

    // Add event listeners for real-time filtering
    if (communeSelect) {
        communeSelect.addEventListener("change", updateFilters);
    }

    if (quartierInput) {
        quartierInput.addEventListener("input", debounce(updateFilters, 300));
    }

    if (statusSelect) {
        statusSelect.addEventListener("change", updateFilters);
    }
}

function initializeViewToggle() {
    const listViewBtn = document.getElementById("listViewBtn");
    const mapViewBtn = document.getElementById("mapViewBtn");

    if (listViewBtn) {
        listViewBtn.addEventListener("click", () => toggleView("list"));
    }

    if (mapViewBtn) {
        mapViewBtn.addEventListener("click", () => toggleView("map"));
    }
}

function initializePharmacyActions() {
    // Delegate event listeners for dynamically created buttons
    document.addEventListener("click", function (e) {
        if (e.target.closest(".btn-route")) {
            const pharmacyId =
                e.target.closest(".pharmacy-card").dataset.pharmacyId;
            openRoute(pharmacyId);
        }

        if (e.target.closest(".btn-call")) {
            const pharmacyId =
                e.target.closest(".pharmacy-card").dataset.pharmacyId;
            callPharmacy(pharmacyId);
        }

        if (e.target.closest(".btn-details")) {
            const pharmacyId =
                e.target.closest(".pharmacy-card").dataset.pharmacyId;
            showPharmacyDetails(pharmacyId);
        }
    });
}

function initializeGeolocation() {
    const locateBtn = document.getElementById("locateBtn");

    if (locateBtn) {
        locateBtn.addEventListener("click", getUserLocation);
    }
}

function updateFilters() {
    currentFilters.commune = document.getElementById("commune").value;
    currentFilters.quartier = document
        .getElementById("quartier")
        .value.toLowerCase();
    currentFilters.status = document.getElementById("status").value;

    filterPharmacies();
    displayPharmacies();
}

function performSearch() {
    const searchBtn = document.getElementById("searchBtn");
    const originalHTML = searchBtn.innerHTML;

    // Show loading state
    searchBtn.innerHTML =
        '<span class="spinner-border spinner-border-sm me-2"></span>Recherche...';
    searchBtn.disabled = true;

    // Update filters
    updateFilters();

    // Simulate API call delay
    setTimeout(() => {
        searchBtn.innerHTML = originalHTML;
        searchBtn.disabled = false;

        // Show success message
        showToast("Recherche terminée", "success");
    }, 1000);
}

function resetFilters() {
    document.getElementById("commune").value = "";
    document.getElementById("quartier").value = "";
    document.getElementById("status").value = "";

    currentFilters = {
        commune: "",
        quartier: "",
        status: "",
    };

    filteredPharmacies = [...pharmaciesData];
    displayPharmacies();

    showToast("Filtres réinitialisés", "info");
}

function filterPharmacies() {
    filteredPharmacies = pharmaciesData.filter((pharmacy) => {
        let matches = true;

        // Filter by commune
        if (
            currentFilters.commune &&
            pharmacy.commune !== currentFilters.commune
        ) {
            matches = false;
        }

        // Filter by quartier
        if (
            currentFilters.quartier &&
            !pharmacy.quartier.toLowerCase().includes(currentFilters.quartier)
        ) {
            matches = false;
        }

        // Filter by status
        if (currentFilters.status) {
            switch (currentFilters.status) {
                case "open":
                    if (!["open", "open_24h"].includes(pharmacy.status)) {
                        matches = false;
                    }
                    break;
                case "24h":
                    if (pharmacy.status !== "open_24h") {
                        matches = false;
                    }
                    break;
                case "limited":
                    if (pharmacy.status !== "limited") {
                        matches = false;
                    }
                    break;
            }
        }

        return matches;
    });

    // Sort by distance
    filteredPharmacies.sort((a, b) => a.distance - b.distance);
}

function displayPharmacies() {
    const pharmaciesList = document.getElementById("pharmaciesList");
    const resultsTitle = document.getElementById("resultsTitle");

    if (!pharmaciesList) return;

    // Update results title
    if (resultsTitle) {
        resultsTitle.textContent = `${filteredPharmacies.length} pharmacie${
            filteredPharmacies.length > 1 ? "s" : ""
        } trouvée${filteredPharmacies.length > 1 ? "s" : ""}`;
    }

    if (filteredPharmacies.length === 0) {
        pharmaciesList.innerHTML = `
            <div class="text-center py-5">
                <i class="fas fa-search text-muted" style="font-size: 3rem;"></i>
                <h4 class="mt-3 text-muted">Aucune pharmacie trouvée</h4>
                <p class="text-muted">Essayez de modifier vos critères de recherche</p>
                <button class="btn btn-success" onclick="resetFilters()">
                    <i class="fas fa-undo me-2"></i>Réinitialiser les filtres
                </button>
            </div>
        `;
        return;
    }

    pharmaciesList.innerHTML = filteredPharmacies
        .map((pharmacy) => createPharmacyCard(pharmacy))
        .join("");
}

function createPharmacyCard(pharmacy) {
    const statusClass = getStatusClass(pharmacy.status);
    const statusIcon = getStatusIcon(pharmacy.status);

    return `
        <div class="pharmacy-card bg-white p-4 rounded shadow-sm mb-3" data-pharmacy-id="${
            pharmacy.id
        }">
            <div class="row">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <h5 class="text-success mb-1">${pharmacy.name}</h5>
                        <span class="${statusClass}">
                            <i class="${statusIcon} me-1"></i>${
        pharmacy.statusText
    }
                        </span>
                    </div>
                    <p class="text-muted mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        ${pharmacy.address}
                    </p>
                    <p class="text-muted mb-2">
                        <i class="fas fa-phone me-2"></i>
                        ${pharmacy.phone}
                    </p>
                    <div class="d-flex align-items-center gap-3 mb-2">
                        <span class="distance-badge">
                            <i class="fas fa-route me-1"></i>${
                                pharmacy.distance
                            } km
                        </span>
                        <small class="text-muted">
                            <i class="fas fa-star text-warning me-1"></i>
                            ${pharmacy.rating} (${pharmacy.reviews} avis)
                        </small>
                    </div>
                    <div class="services">
                        <small class="text-muted">Services: </small>
                        ${pharmacy.services
                            .map(
                                (service) =>
                                    `<span class="badge bg-light text-dark me-1">${service}</span>`
                            )
                            .join("")}
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="d-flex flex-column gap-2">
                        <button class="btn btn-success btn-sm btn-route">
                            <i class="fas fa-route me-1"></i>Itinéraire
                        </button>
                        <button class="btn btn-outline-primary btn-sm btn-call">
                            <i class="fas fa-phone me-1"></i>Appeler
                        </button>
                        <button class="btn btn-outline-info btn-sm btn-details">
                            <i class="fas fa-info-circle me-1"></i>Détails
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
}

function getStatusClass(status) {
    switch (status) {
        case "open":
        case "open_24h":
            return "status-open";
        case "limited":
            return "status-limited";
        case "emergency":
            return "status-closed";
        default:
            return "status-closed";
    }
}

function getStatusIcon(status) {
    switch (status) {
        case "open":
        case "open_24h":
            return "fas fa-circle";
        case "limited":
            return "fas fa-clock";
        case "emergency":
            return "fas fa-exclamation-triangle";
        default:
            return "fas fa-times-circle";
    }
}

function toggleView(view) {
    currentView = view;

    const listViewBtn = document.getElementById("listViewBtn");
    const mapViewBtn = document.getElementById("mapViewBtn");

    // Update button states
    if (view === "list") {
        listViewBtn.classList.add("btn-primary");
        listViewBtn.classList.remove("btn-outline-secondary");
        mapViewBtn.classList.add("btn-outline-secondary");
        mapViewBtn.classList.remove("btn-primary");
    } else {
        mapViewBtn.classList.add("btn-primary");
        mapViewBtn.classList.remove("btn-outline-secondary");
        listViewBtn.classList.add("btn-outline-secondary");
        listViewBtn.classList.remove("btn-primary");
    }

    // Toggle view (in real app, this would switch between list and map)
    showToast(
        view === "list" ? "Vue liste activée" : "Vue carte activée",
        "info"
    );
}

function openRoute(pharmacyId) {
    const pharmacy = pharmaciesData.find((p) => p.id == pharmacyId);
    if (pharmacy) {
        // In real app, this would open Google Maps or similar
        const mapsUrl = `https://www.google.com/maps/dir/?api=1&destination=${encodeURIComponent(
            pharmacy.address
        )}`;
        showToast(`Ouverture de l'itinéraire vers ${pharmacy.name}`, "success");

        // Simulate opening external app
        setTimeout(() => {
            window.open(mapsUrl, "_blank");
        }, 500);
    }
}

function callPharmacy(pharmacyId) {
    const pharmacy = pharmaciesData.find((p) => p.id == pharmacyId);
    if (pharmacy) {
        // In real app, this would initiate a phone call
        if (confirm(`Appeler ${pharmacy.name} au ${pharmacy.phone} ?`)) {
            window.location.href = `tel:${pharmacy.phone}`;
        }
    }
}

function showPharmacyDetails(pharmacyId) {
    const pharmacy = pharmaciesData.find((p) => p.id == pharmacyId);
    if (!pharmacy) return;

    // Create or get details modal
    let detailsModal = document.getElementById("pharmacyDetailsModal");
    if (!detailsModal) {
        detailsModal = createPharmacyDetailsModal();
        document.body.appendChild(detailsModal);
    }

    // Update modal content
    const modalTitle = detailsModal.querySelector(".modal-title");
    const modalBody = detailsModal.querySelector(".pharmacy-details-content");

    modalTitle.innerHTML = `<i class="fas fa-info-circle me-2"></i>${pharmacy.name}`;

    modalBody.innerHTML = `
        <div class="row">
            <div class="col-12 mb-3">
                <div class="pharmacy-header text-center">
                    <h4 class="text-success">${pharmacy.name}</h4>
                    <span class="${getStatusClass(pharmacy.status)}">
                        <i class="${getStatusIcon(pharmacy.status)} me-1"></i>${
        pharmacy.statusText
    }
                    </span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h6><i class="fas fa-map-marker-alt me-2 text-success"></i>Adresse</h6>
                <p>${pharmacy.address}</p>

                <h6><i class="fas fa-phone me-2 text-success"></i>Téléphone</h6>
                <p>${pharmacy.phone}</p>

                <h6><i class="fas fa-route me-2 text-success"></i>Distance</h6>
                <p>${pharmacy.distance} km de votre position</p>
            </div>

            <div class="col-md-6">
                <h6><i class="fas fa-star me-2 text-warning"></i>Évaluation</h6>
                <p>${pharmacy.rating}/5 (${pharmacy.reviews} avis)</p>

                <h6><i class="fas fa-cogs me-2 text-success"></i>Services disponibles</h6>
                <ul class="list-unstyled">
                    ${pharmacy.services
                        .map(
                            (service) =>
                                `<li><i class="fas fa-check text-success me-2"></i>${service}</li>`
                        )
                        .join("")}
                </ul>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12">
                <div class="d-flex gap-2 justify-content-center">
                    <button class="btn btn-success" onclick="openRoute(${
                        pharmacy.id
                    })">
                        <i class="fas fa-route me-2"></i>Itinéraire
                    </button>
                    <button class="btn btn-primary" onclick="callPharmacy(${
                        pharmacy.id
                    })">
                        <i class="fas fa-phone me-2"></i>Appeler
                    </button>
                    <button class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="fas fa-times me-2"></i>Fermer
                    </button>
                </div>
            </div>
        </div>
    `;

    const modal = new bootstrap.Modal(detailsModal);
    modal.show();
}

function createPharmacyDetailsModal() {
    const modal = document.createElement("div");
    modal.className = "modal fade";
    modal.id = "pharmacyDetailsModal";
    modal.innerHTML = `
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Détails de la pharmacie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="pharmacy-details-content"></div>
                </div>
            </div>
        </div>
    `;
    return modal;
}

function getUserLocation() {
    const locateBtn = document.getElementById("locateBtn");
    const originalHTML = locateBtn.innerHTML;

    locateBtn.innerHTML =
        '<span class="spinner-border spinner-border-sm me-2"></span>Localisation...';
    locateBtn.disabled = true;

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                // In real app, this would update distances based on user location
                showToast("Position détectée avec succès", "success");

                // Simulate updating distances
                setTimeout(() => {
                    // Update pharmacy distances (mock)
                    pharmaciesData.forEach((pharmacy) => {
                        pharmacy.distance =
                            Math.round((Math.random() * 5 + 0.1) * 10) / 10;
                    });

                    filterPharmacies();
                    displayPharmacies();

                    locateBtn.innerHTML = originalHTML;
                    locateBtn.disabled = false;
                }, 1000);
            },
            function (error) {
                showToast("Impossible de détecter votre position", "error");
                locateBtn.innerHTML = originalHTML;
                locateBtn.disabled = false;
            }
        );
    } else {
        showToast(
            "Géolocalisation non supportée par votre navigateur",
            "error"
        );
        locateBtn.innerHTML = originalHTML;
        locateBtn.disabled = false;
    }
}

function showToast(message, type = "info") {
    // Create toast element
    const toast = document.createElement("div");
    toast.className = `toast align-items-center text-bg-${
        type === "error" ? "danger" : type
    } border-0`;
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

    document.body.appendChild(toast);

    const toastInstance = new bootstrap.Toast(toast);
    toastInstance.show();

    // Remove toast after it's hidden
    toast.addEventListener("hidden.bs.toast", () => {
        toast.remove();
    });
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Initialize display on page load
document.addEventListener("DOMContentLoaded", function () {
    displayPharmacies();
});
