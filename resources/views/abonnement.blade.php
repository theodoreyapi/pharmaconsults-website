<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="index, follow">
    <title>PharmaConsults — Mon compte & abonnements</title>
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

        .btn-green {
            background: #22c55e;
            transition: background .2s, transform .2s;
        }

        .btn-green:hover:not(:disabled) {
            background: #16a34a;
            transform: translateY(-1px);
        }

        .btn-green:disabled {
            opacity: .6;
            cursor: not-allowed;
        }

        .pharm-card {
            transition: border-color .2s, background .2s, transform .2s;
        }

        .pharm-card:hover {
            transform: translateY(-3px);
        }

        .product-card {
            transition: transform .25s, box-shadow .25s;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(0, 0, 0, .1);
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, .12);
        }

        .spinner {
            border: 3px solid #e5e7eb;
            border-top-color: #22c55e;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            animation: spin .7s linear infinite;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    @include('layouts.header')

    <!-- ============ PAGE LOGIN ============ -->
    <section id="page-login"
        class="page active min-h-[75vh] flex items-center justify-center bg-gradient-to-b from-green-50 to-white py-14 px-4">
        <div class="w-full max-w-md" style="justify-self: anchor-center;">
            <div class="text-center mb-8">
                <h1 class="font-display text-3xl font-extrabold text-gray-900 mb-2">Heureux de vous revoir</h1>
                <p class="text-gray-500 text-sm">Connectez-vous pour gérer votre compte et vos abonnements</p>
            </div>

            <form id="loginForm" class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6 space-y-4">
                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Numéro ou e-mail</label>
                    <input id="loginIdentifiant" type="text" placeholder="Ex: 0102030405 ou email@exemple.com"
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700" />
                    {{-- <p class="text-[11px] text-gray-400 mt-1">Le préfixe 00225 est ajouté automatiquement pour les
                        numéros ivoiriens.</p> --}}
                </div>

                <div>
                    <label class="block text-xs font-semibold text-gray-500 mb-1.5">Mot de passe</label>
                    <div class="relative">
                        <input id="loginPassword" type="password" placeholder="Votre mot de passe"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 text-sm text-gray-700 pr-11" />
                        <button type="button" id="togglePassword"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 text-sm">
                            👁️
                        </button>
                    </div>
                </div>

                <div id="loginError" class="hidden text-xs font-medium text-red-600 bg-red-50 rounded-xl px-3 py-2">
                </div>

                <button id="loginBtn" type="submit"
                    class="btn-green w-full text-white text-sm font-semibold py-3.5 rounded-full flex items-center justify-center gap-2">
                    Se connecter
                </button>
            </form>
        </div>
    </section>

    <!-- ============ PAGE DASHBOARD ============ -->
    <section id="page-dashboard" class="page py-10 px-4">
        <div class="max-w-5xl mx-auto">

            <!-- Carte compte -->
            <div class="rounded-2xl p-6 mb-8 text-white" style="background: linear-gradient(135deg,#22c55e,#16a34a);">
                <div class="flex items-center justify-between flex-wrap gap-4">
                    <div class="flex items-center gap-4">
                        <img id="userAvatar" src="" alt=""
                            class="hidden w-14 h-14 rounded-full object-cover border-2 border-white/60" />
                        <div>
                            <p class="text-xs uppercase tracking-widest text-white/80 font-semibold">Compte principal
                            </p>
                            <h2 id="userFullName" class="font-display text-xl font-bold"></h2>
                            <p id="userPhone" class="text-sm text-white/85"></p>
                        </div>
                    </div>

                    <div class="flex items-center gap-6">
                        <div class="text-right">
                            <p class="text-xs text-white/80 font-semibold uppercase tracking-widest">Solde</p>
                            <p id="userWallet" class="font-display text-2xl font-extrabold"></p>
                        </div>
                        <button id="logoutBtn"
                            class="text-xs font-semibold bg-white/15 hover:bg-white/25 transition px-4 py-2 rounded-full">
                            Déconnexion
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between mb-4">
                <h3 class="font-display text-lg font-bold text-gray-900">Mes services</h3>
                <p class="text-xs text-gray-400">Cliquez sur un service inactif pour souscrire</p>
            </div>

            <div id="modulesList" class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5"></div>
        </div>
    </section>

    <!-- ============ PAGE FORFAITS ============ -->
    <section id="page-forfaits" class="page py-10 px-4">
        <div class="max-w-5xl mx-auto">
            <button id="backToDashboard" class="text-sm text-gray-500 hover:text-gray-800 mb-6 flex items-center gap-1">
                ← Retour à mes services
            </button>

            <div class="text-center mb-8">
                <h2 class="font-display text-2xl font-extrabold text-gray-900 mb-2">
                    Souscrivez à un pass et profitez d'un accès total au service
                </h2>
                <p id="forfaitsTitle" class="text-green-600 font-semibold text-sm"></p>
            </div>

            <div id="forfaitsGrid" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6"></div>
        </div>
    </section>

    <!-- ============ PAGE CONFIRMATION ============ -->
    <section id="page-confirm" class="page py-10 px-4">
        <div class="max-w-md mx-auto">
            <button id="backToForfaits" class="text-sm text-gray-500 hover:text-gray-800 mb-6 flex items-center gap-1">
                ← Retour aux forfaits
            </button>

            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6">
                <h2 class="font-display text-xl font-extrabold text-gray-900 mb-1">Achat de Pass</h2>
                <p id="confirmStatusText" class="text-sm font-bold mb-4"></p>

                <div id="confirmWalletBox" class="flex items-center gap-3 rounded-2xl px-4 py-3 mb-5">
                    <span class="text-2xl">💰</span>
                    <span id="confirmWallet" class="font-display text-xl font-extrabold"></span>
                </div>

                <div class="space-y-3 mb-5">
                    <div>
                        <p id="confirmLibelle" class="font-bold text-gray-900"></p>
                        <p id="confirmPrice" class="text-sm text-gray-500"></p>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-0.5">Validité</p>
                        <p id="confirmDuration" class="text-sm text-gray-700"></p>
                    </div>
                    <div>
                        <p class="text-xs font-semibold text-gray-400 uppercase tracking-widest mb-0.5">Avantages</p>
                        <p id="confirmDescription" class="text-sm text-gray-700"></p>
                    </div>
                </div>

                <div class="flex items-start gap-2 bg-gray-50 rounded-xl px-3 py-3 mb-5">
                    <span>ℹ️</span>
                    <p id="confirmInfoText" class="text-xs text-gray-600"></p>
                </div>

                <button id="confirmSubmitBtn"
                    class="btn-green w-full text-white text-sm font-semibold py-3.5 rounded-full"></button>
            </div>
        </div>
    </section>

    @include('layouts.footer')

    <script>
        // ---------- CONFIG ----------
        const API_BASE = "https://admin.pharma-consults.com/api/internal/v1";
        const LOGIN_URL = `${API_BASE}/auth/login`;
        const CHECK_ALL_URL = (numero) => `${API_BASE}/pharma/subscriptions/valid/${numero}`;
        const FORFAITS_URL = (argument) => `${API_BASE}/pharma/forfaits/byModuleName/${encodeURIComponent(argument)}`;
        const SUBSCRIBE_URL = `${API_BASE}/pharma/subscriptions/subscribe`;

        const MODULES = [{
                key: "Pharmacie de garde",
                label: "Pharmacie de garde",
                icon: "💊",
                free: true
            },
            {
                key: "Fiche et prix",
                label: "Fiche et prix de médicament",
                icon: "🏷️"
            },
            {
                key: "Assurances",
                label: "Assurances",
                icon: "🛡️"
            },
            {
                key: "Vaccination",
                label: "Vaccination",
                icon: "💉"
            },
            {
                key: "Suivi sante",
                label: "Suivi santé",
                icon: "❤️"
            },
        ];

        const STORAGE_KEY = "pc_web_session";

        let session = null;
        let subscriptions = [];
        let currentModule = null;
        let selectedForfait = null;

        // ---------- UTILS ----------
        function showPage(id) {
            document.querySelectorAll(".page").forEach(p => {
                p.classList.remove("active");
                p.style.display = "none";
            });
            const target = document.getElementById(id);
            target.classList.add("active");
            target.style.display = "block";
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }

        function toast(message, type = "success") {
            const el = document.createElement("div");
            el.textContent = message;
            const bg = type === "success" ? "#22c55e" : type === "error" ? "#ef4444" : "#f59e0b";
            el.style.cssText =
                `position:fixed;top:20px;right:20px;z-index:9999;background:${bg};color:#fff;padding:12px 18px;border-radius:12px;font-size:13px;font-weight:600;box-shadow:0 8px 24px rgba(0,0,0,.15);max-width:320px;`;
            document.body.appendChild(el);
            setTimeout(() => el.remove(), 4000);
        }

        function money(n) {
            return `${Number(n || 0).toLocaleString("fr-FR")} F`;
        }

        function isEmail(v) {
            return /^[^@]+@[^@]+\.[^@]+/.test(v);
        }

        function formatPhone(phone) {
            phone = phone.trim().replace(/\s+/g, '');

            // +225XXXXXXXXXX -> 00225XXXXXXXXXX
            if (phone.startsWith('+225')) {
                return phone.replace('+', '00');
            }

            // Déjà au bon format
            if (phone.startsWith('00225')) {
                return phone;
            }

            // 225XXXXXXXXXX -> 00225XXXXXXXXXX
            if (phone.startsWith('225')) {
                return `00${phone}`;
            }

            // Numéro local (0585831647) -> 002250585831647
            return `00225${phone}`;
        }

        function loadSession() {
            const raw = localStorage.getItem(STORAGE_KEY);
            if (raw) {
                try {
                    session = JSON.parse(raw);
                } catch (e) {
                    session = null;
                }
            }
        }

        function saveSession() {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(session));
        }

        function clearSession() {
            localStorage.removeItem(STORAGE_KEY);
            session = null;
        }

        // ---------- LOGIN ----------
        document.getElementById("togglePassword").addEventListener("click", () => {
            const input = document.getElementById("loginPassword");
            input.type = input.type === "password" ? "text" : "password";
        });

        document.getElementById("loginForm").addEventListener("submit", async (e) => {
            e.preventDefault();

            const errorBox = document.getElementById("loginError");
            errorBox.classList.add("hidden");

            const identifiant = document.getElementById("loginIdentifiant").value.trim();
            const password = document.getElementById("loginPassword").value;

            if (!identifiant || !password) {
                errorBox.textContent = "Veuillez remplir tous les champs.";
                errorBox.classList.remove("hidden");
                return;
            }

            const username = isEmail(identifiant) ? identifiant : formatPhone(identifiant);

            const btn = document.getElementById("loginBtn");
            btn.disabled = true;
            btn.innerHTML = '<span class="spinner"></span>';

            try {
                const res = await fetch(LOGIN_URL, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        username,
                        password
                    }),
                });

                const data = await res.json().catch(() => ({}));

                if (res.status === 200) {
                    const user = data.user || {};

                    if (user.active === "ACTIVE" && user.role === "PATIENT") {
                        session = {
                            phone: username,
                            token: data.token || data.accessToken || data.access_token || null,
                            user: {
                                id: user.id,
                                username: user.username,
                                email: user.email,
                                firstName: user.firstName,
                                lastName: user.lastName,
                                phoneNumber: user.phoneNumber,
                                amount: user.amount || 0,
                                profilePicture: user.profilePicture,
                            },
                        };
                        saveSession();
                        toast("Connexion réussie. Heureux de vous revoir !");
                        await enterDashboard();
                    } else {
                        errorBox.textContent = "Accès restreint à ce compte.";
                        errorBox.classList.remove("hidden");
                    }
                } else if (res.status === 423) {
                    errorBox.textContent =
                        "Validation OTP requise. Veuillez utiliser l'application mobile PharmaConsults pour valider votre code.";
                    errorBox.classList.remove("hidden");
                } else {
                    errorBox.textContent = "Oups ! Vérifiez vos informations de connexion.";
                    errorBox.classList.remove("hidden");
                }
            } catch (err) {
                errorBox.textContent = "Erreur réseau. Vérifiez votre connexion.";
                errorBox.classList.remove("hidden");
            } finally {
                btn.disabled = false;
                btn.textContent = "Se connecter";
            }
        });

        document.getElementById("logoutBtn").addEventListener("click", () => {
            clearSession();
            document.getElementById("loginForm").reset();
            showPage("page-login");
        });

        // ---------- DASHBOARD ----------
        async function enterDashboard() {
            renderUserCard();
            showPage("page-dashboard");
            await loadSubscriptions();
            renderModules();
        }

        function renderUserCard() {
            const u = session.user;
            const fullName = `${u.firstName || ""} ${u.lastName || ""}`.trim();
            document.getElementById("userFullName").textContent = fullName || u.username || "Mon compte";
            document.getElementById("userPhone").textContent = u.phoneNumber || session.phone;
            document.getElementById("userWallet").textContent = money(u.amount);

            const avatar = document.getElementById("userAvatar");
            if (u.profilePicture) {
                avatar.src = u.profilePicture;
                avatar.classList.remove("hidden");
            } else {
                avatar.classList.add("hidden");
            }
        }

        async function loadSubscriptions() {
            const listEl = document.getElementById("modulesList");
            listEl.innerHTML =
                `<div class="col-span-full text-center py-10 text-gray-400 text-sm">Chargement de vos abonnements...</div>`;

            try {
                const res = await fetch(CHECK_ALL_URL(session.phone));
                subscriptions = res.ok ? await res.json() : [];
            } catch (e) {
                subscriptions = [];
            }
        }

        function findSub(libelle) {
            return subscriptions.find(s => s.moduleDto && s.moduleDto.libelle === libelle);
        }

        function isModuleActive(libelle) {
            const sub = findSub(libelle);
            if (!sub || !sub.validUntil) return false;
            return new Date(sub.validUntil) > new Date() && sub.status === "active";
        }

        function renderModules() {
            const listEl = document.getElementById("modulesList");
            listEl.innerHTML = "";

            MODULES.forEach(mod => {
                const active = mod.free || isModuleActive(mod.key);
                const sub = findSub(mod.key);
                const expiry = sub && sub.validUntil ? new Date(sub.validUntil) : null;

                const card = document.createElement("div");
                card.className =
                    `pharm-card cursor-pointer bg-white rounded-2xl border p-5 flex flex-col items-center text-center gap-2 ${active ? "border-green-200" : "border-gray-100"}`;
                card.innerHTML = `
                    <div class="w-16 h-16 rounded-2xl flex items-center justify-center text-3xl ${active ? "bg-green-100" : "bg-gray-100"}">
                        ${mod.icon}
                    </div>
                    <h4 class="font-semibold text-sm text-gray-900">${mod.label}</h4>
                    <span class="text-[11px] font-semibold px-3 py-1 rounded-full ${active ? "bg-green-100 text-green-700" : "bg-gray-100 text-gray-500"}">
                        ${active ? "Actif" : "Inactif"}
                    </span>
                    ${active && !mod.free && expiry ? `<p class="text-[10px] text-gray-400">Jusqu'au ${expiry.toLocaleDateString("fr-FR")}</p>` : ""}
                `;

                card.addEventListener("click", () => {
                    if (mod.free) {
                        toast("Ce service est accessible librement.", "warning");
                        return;
                    }
                    if (active) {
                        toast(`Votre abonnement « ${mod.label} » est actif.`);
                        return;
                    }
                    openForfaits(mod);
                });

                listEl.appendChild(card);
            });
        }

        // ---------- FORFAITS ----------
        document.getElementById("backToDashboard").addEventListener("click", () => showPage("page-dashboard"));
        document.getElementById("backToForfaits").addEventListener("click", () => showPage("page-forfaits"));

        async function openForfaits(mod) {
            currentModule = mod;
            document.getElementById("forfaitsTitle").textContent = mod.label;

            const grid = document.getElementById("forfaitsGrid");
            grid.innerHTML =
                `<div class="col-span-full text-center py-10 text-gray-400 text-sm">Chargement des forfaits...</div>`;
            showPage("page-forfaits");

            try {
                const res = await fetch(FORFAITS_URL(mod.key));
                if (!res.ok) throw new Error("fetch failed");
                const forfaits = await res.json();
                renderForfaits(forfaits);
            } catch (e) {
                grid.innerHTML =
                    `<div class="col-span-full text-center py-10 text-gray-400 text-sm">Pas de forfait disponible</div>`;
            }
        }

        function renderForfaits(forfaits) {
            const grid = document.getElementById("forfaitsGrid");
            grid.innerHTML = "";

            if (!Array.isArray(forfaits) || forfaits.length === 0) {
                grid.innerHTML =
                    `<div class="col-span-full text-center py-10 text-gray-400 text-sm">Pas de forfait disponible</div>`;
                return;
            }

            const maxPrice = Math.max(...forfaits.map(f => f.price || 0));

            forfaits.forEach(f => {
                const recommended = f.price === maxPrice;
                const card = document.createElement("div");
                card.className =
                    `product-card cursor-pointer rounded-2xl overflow-hidden border ${recommended ? "border-green-400" : "border-gray-100"} bg-white flex flex-col`;
                card.innerHTML = `
                    <div class="px-4 py-4 text-white" style="background:${recommended ? "linear-gradient(135deg,#22c55e,#10b981)" : "#111827"};">
                        <p class="text-xs font-medium opacity-90">${f.libelle ?? ""}</p>
                        <p class="text-lg font-bold">${f.duration ?? "-"} jour(s)</p>
                    </div>
                    <div class="p-5 flex flex-col flex-1 items-center text-center gap-2">
                        <p class="text-2xl font-extrabold text-gray-900">${Number(f.price || 0).toLocaleString("fr-FR")}<span class="text-sm font-semibold text-gray-500"> F</span></p>
                        <p class="text-xs text-gray-500 flex-1">${f.description ?? ""}</p>
                        ${recommended ? `<span class="text-[10px] font-bold text-green-600 tracking-widest">PASS RECOMMANDÉ</span>` : ""}
                        <button class="btn-green text-white text-xs font-semibold w-full py-2.5 rounded-full mt-2">Choisir ce pass</button>
                    </div>
                `;
                card.addEventListener("click", () => openConfirm(f));
                grid.appendChild(card);
            });
        }

        // ---------- CONFIRMATION ----------
        function openConfirm(forfait) {
            selectedForfait = forfait;

            const wallet = session.user.amount || 0;
            const price = forfait.price || 0;
            const enough = wallet >= price;

            document.getElementById("confirmLibelle").textContent = forfait.libelle ?? "";
            document.getElementById("confirmPrice").textContent = money(price);
            document.getElementById("confirmDuration").textContent = `${forfait.duration ?? "-"} jour(s)`;
            document.getElementById("confirmDescription").textContent = forfait.description ?? "";
            document.getElementById("confirmWallet").textContent = money(wallet);

            const walletBox = document.getElementById("confirmWalletBox");
            const statusText = document.getElementById("confirmStatusText");
            const infoText = document.getElementById("confirmInfoText");
            const submitBtn = document.getElementById("confirmSubmitBtn");

            if (enough) {
                walletBox.className = "flex items-center gap-3 rounded-2xl px-4 py-3 mb-5 bg-green-50";
                statusText.textContent = "Solde suffisant";
                statusText.className = "text-sm font-bold mb-4 text-green-600";
                infoText.textContent = "Cliquez sur « Confirmer » pour finaliser votre achat.";
                submitBtn.textContent = "Confirmer";
                submitBtn.dataset.mode = "confirm";
            } else {
                walletBox.className = "flex items-center gap-3 rounded-2xl px-4 py-3 mb-5 bg-red-50";
                statusText.textContent = "Solde insuffisant";
                statusText.className = "text-sm font-bold mb-4 text-red-600";
                infoText.textContent =
                    "Votre solde ne couvre pas ce pass. Rechargez votre compte depuis l'application mobile PharmaConsults, puis revenez ici pour souscrire.";
                submitBtn.textContent = "Solde insuffisant";
                submitBtn.dataset.mode = "recharge";
            }

            showPage("page-confirm");
        }

        document.getElementById("confirmSubmitBtn").addEventListener("click", async () => {
            const btn = document.getElementById("confirmSubmitBtn");

            if (btn.dataset.mode === "recharge") {
                toast("Rendez-vous sur l'application mobile PharmaConsults pour recharger votre compte.",
                    "warning");
                return;
            }

            btn.disabled = true;
            const original = btn.textContent;
            btn.innerHTML =
                '<span class="spinner" style="border-top-color:#fff;border-color:rgba(255,255,255,.4)"></span>';

            try {
                const res = await fetch(SUBSCRIBE_URL, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        username: session.phone,
                        forfaitId: selectedForfait.id,
                        description: selectedForfait.description,
                    }),
                });

                if (res.status === 200 || res.status === 201) {
                    toast(
                        `Votre abonnement « ${selectedForfait.libelle} » (Validité : ${selectedForfait.duration} jour(s)) est actif.`
                    );
                    await loadSubscriptions();
                    renderModules();
                    showPage("page-dashboard");
                } else {
                    toast("Impossible d'effectuer l'achat. Veuillez réessayer.", "error");
                }
            } catch (e) {
                toast("Erreur de connexion.", "error");
            } finally {
                btn.disabled = false;
                btn.textContent = original;
            }
        });

        // ---------- INIT ----------
        document.addEventListener("DOMContentLoaded", () => {
            loadSession();
            if (session && session.phone) {
                enterDashboard();
            } else {
                showPage("page-login");
            }
        });
    </script>
</body>

</html>
