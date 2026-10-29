<!doctype html>
<html lang="id" data-bs-theme="light" data-lte-color-mode="off">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Sistem Informasi Klinik')</title>

    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/index.css"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/500.css"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/600.css"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/700.css"
        crossorigin="anonymous"
    />

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
        crossorigin="anonymous"
    />

    <!-- AdminLTE -->
    <link
        rel="stylesheet"
        href="{{ asset('adminLTE/css/adminlte.min.css') }}"
    />

    <!-- Tema kustom (harus setelah AdminLTE) -->
    <style>
/* ==========================================================
   Tema Soft Netral - Sistem Informasi Klinik
   ========================================================== */

:root,
[data-bs-theme="light"] {
    /* Palet */
    --kl-bg: #f5f6f4;          /* latar halaman */
    --kl-surface: #ffffff;     /* kartu & header */
    --kl-line: #e6e9e6;        /* garis & border */
    --kl-ink: #26302e;         /* teks utama */
    --kl-muted: #7b8783;       /* teks sekunder */
    --kl-accent: #4a8579;      /* teal sage (aksen) */
    --kl-accent-dark: #3b6e64;
    --kl-accent-soft: #e6f0ed; /* latar aksen lembut */

    /* Override variabel Bootstrap */
    --bs-body-font-family: "Plus Jakarta Sans", "Source Sans 3", system-ui, sans-serif;
    --bs-body-bg: var(--kl-bg);
    --bs-body-bg-rgb: 245, 246, 244;
    --bs-tertiary-bg: var(--kl-bg);
    --bs-tertiary-bg-rgb: 245, 246, 244;
    --bs-body-color: var(--kl-ink);
    --bs-secondary-color: var(--kl-muted);
    --bs-border-color: var(--kl-line);
    --bs-border-radius: 0.6rem;

    --bs-primary: var(--kl-accent);
    --bs-primary-rgb: 74, 133, 121;
    --bs-link-color: var(--kl-accent-dark);
    --bs-link-color-rgb: 59, 110, 100;
    --bs-link-hover-color: #2d554d;

    --bs-info: #7f93b5;        /* badge Perempuan */
    --bs-info-rgb: 127, 147, 181;
    --bs-success: #5f9b7a;
    --bs-success-rgb: 95, 155, 122;
    --bs-warning: #d6a85c;
    --bs-warning-rgb: 214, 168, 92;
    --bs-danger: #c9645f;
    --bs-danger-rgb: 201, 100, 95;
}

body {
    font-size: 0.8125rem;
    font-family: var(--bs-body-font-family);
    color: var(--kl-ink);
    background-color: var(--kl-bg) !important;
    -webkit-font-smoothing: antialiased;
}

/* ---------- Header ---------- */
.app-header {
    background-color: var(--kl-surface) !important;
    border-bottom: 1px solid var(--kl-line);
    box-shadow: none;
}

/* ---------- Sidebar (gelap, seperti semula) ---------- */
.app-sidebar {
    --lte-sidebar-bg: #343a40;
    background-color: #343a40 !important;
    border-right: 0;
    box-shadow: none !important;
}

.app-sidebar .sidebar-brand {
    background-color: #343a40;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    height: 3.5rem;
}

.app-sidebar .sidebar-brand .brand-link {
    display: flex;
    align-items: center;
    gap: 0.6rem;
    padding: 0 1rem;
    color: #f1f3f5;
    white-space: nowrap;
}

.app-sidebar .sidebar-brand .brand-image {
    width: 1.75rem;
    height: 1.75rem;
    margin: 0;
    max-height: none;
    opacity: 0.9;
}

.app-sidebar .sidebar-brand .brand-text {
    font-size: 0.86rem;
    font-weight: 600;
    letter-spacing: 0.005em;
    color: #f1f3f5;
}

.app-sidebar .sidebar-wrapper {
    padding: 0.5rem 0.25rem;
}

.app-sidebar .sidebar-menu > .nav-item > .nav-link {
    position: relative;
    display: flex;
    align-items: center;
    gap: 0.7rem;
    margin: 0.15rem 0.6rem;
    padding: 0.5rem 0.8rem;
    border-radius: 0.55rem;
    color: #aeb7bf;
    font-size: 0.8rem;
    font-weight: 500;
    line-height: 1.3;
    transition: background-color 0.15s, color 0.15s;
}

.app-sidebar .sidebar-menu > .nav-item > .nav-link p {
    margin: 0;
    font-size: inherit;
}

.app-sidebar .sidebar-menu .nav-icon {
    flex: 0 0 auto;
    width: 1.1rem;
    margin: 0;
    font-size: 0.95rem;
    text-align: center;
    color: inherit;
}

.app-sidebar .sidebar-menu > .nav-item > .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.06);
    color: #ffffff;
}

.app-sidebar .sidebar-menu > .nav-item > .nav-link.active {
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
    box-shadow: none;
}

.app-sidebar .sidebar-menu > .nav-item > .nav-link.active::before {
    content: "";
    position: absolute;
    left: -0.6rem;
    top: 0.45rem;
    bottom: 0.45rem;
    width: 3px;
    border-radius: 0 3px 3px 0;
    background-color: #7fbfb0;
}

.app-sidebar .sidebar-menu > .nav-item > .nav-link.active .nav-icon {
    color: #7fbfb0;
}

/* ---------- Konten ---------- */
.app-content-header h1 {
    font-size: 1.2rem !important;
    font-weight: 700;
    letter-spacing: -0.01em;
    color: var(--kl-ink);
}

.card {
    background-color: var(--kl-surface);
    border: 1px solid var(--kl-line);
    border-radius: 0.9rem;
    box-shadow: 0 1px 2px rgba(38, 48, 46, 0.04);
}

.card-header {
    background-color: transparent;
    border-bottom: 1px solid var(--kl-line);
    padding: 1rem 1.25rem;
}

.card-title {
    font-weight: 600;
}

.card-footer {
    background-color: transparent;
    border-top: 1px solid var(--kl-line);
}

/* ---------- Tombol ---------- */
.btn {
    border-radius: 0.55rem;
    font-weight: 500;
}

.btn-primary {
    --bs-btn-bg: var(--kl-accent);
    --bs-btn-border-color: var(--kl-accent);
    --bs-btn-hover-bg: var(--kl-accent-dark);
    --bs-btn-hover-border-color: var(--kl-accent-dark);
    --bs-btn-active-bg: #2d554d;
    --bs-btn-active-border-color: #2d554d;
    --bs-btn-disabled-bg: var(--kl-accent);
    --bs-btn-disabled-border-color: var(--kl-accent);
}

.btn-outline-primary {
    --bs-btn-color: var(--kl-accent-dark);
    --bs-btn-border-color: #bcd5cf;
    --bs-btn-hover-bg: var(--kl-accent);
    --bs-btn-hover-border-color: var(--kl-accent);
    --bs-btn-active-bg: var(--kl-accent-dark);
    --bs-btn-active-border-color: var(--kl-accent-dark);
}

.btn-outline-danger {
    --bs-btn-color: #b9524d;
    --bs-btn-border-color: #e8c4c1;
    --bs-btn-hover-bg: var(--bs-danger);
    --bs-btn-hover-border-color: var(--bs-danger);
}

.btn-outline-secondary {
    --bs-btn-color: #5d6a66;
    --bs-btn-border-color: var(--kl-line);
    --bs-btn-hover-bg: #eef1ef;
    --bs-btn-hover-color: var(--kl-ink);
    --bs-btn-hover-border-color: #d5dad7;
}

/* ---------- Form ---------- */
.form-control,
.form-select,
.input-group-text {
    border-color: var(--kl-line);
    border-radius: 0.55rem;
    background-color: var(--kl-surface);
}

.input-group > .form-control,
.input-group > .input-group-text {
    border-radius: 0;
}

.input-group > :first-child { border-top-left-radius: 0.55rem; border-bottom-left-radius: 0.55rem; }
.input-group > :last-child  { border-top-right-radius: 0.55rem; border-bottom-right-radius: 0.55rem; }

.form-control:focus,
.form-select:focus {
    border-color: var(--kl-accent);
    box-shadow: 0 0 0 0.2rem rgba(74, 133, 121, 0.15);
}

.form-label {
    color: var(--kl-muted);
    font-size: 0.8rem;
    margin-bottom: 0.25rem;
}

/* ---------- Tabel ---------- */
.table {
    --bs-table-bg: transparent;
    --bs-table-striped-bg: #fafbfa;
    --bs-table-hover-bg: #f3f6f4;
    --bs-table-border-color: var(--kl-line);
}

.table > thead > tr > th {
    background-color: #f8f9f8;
    color: var(--kl-muted);
    font-weight: 600;
    font-size: 0.82rem;
    border-bottom: 1px solid var(--kl-line);
}

.table > tbody > tr > td {
    vertical-align: middle;
}

/* ---------- Badge ---------- */
.badge {
    font-weight: 500;
    border-radius: 999px;
    padding: 0.38em 0.7em;
}

/* ---------- Pagination ---------- */
.pagination {
    --bs-pagination-color: var(--kl-accent-dark);
    --bs-pagination-hover-color: var(--kl-accent-dark);
    --bs-pagination-hover-bg: var(--kl-accent-soft);
    --bs-pagination-active-bg: var(--kl-accent);
    --bs-pagination-active-border-color: var(--kl-accent);
    --bs-pagination-focus-box-shadow: 0 0 0 0.2rem rgba(74, 133, 121, 0.15);
    --bs-pagination-border-color: var(--kl-line);
}

/* ---------- Footer ---------- */
.app-footer {
    background-color: var(--kl-surface);
    border-top: 1px solid var(--kl-line);
    color: var(--kl-muted);
}

.app-footer strong {
    font-weight: 500;
}

/* ==========================================================
   FALLBACK sementara untuk halaman yang belum dirombak
   (Dokter, Poli, Pendaftaran, Dashboard). Setelah view-nya
   diganti memakai card/table Bootstrap, blok ini boleh dihapus.
   ========================================================== */

/* Judul ganda: sembunyikan h1 bawaan halaman, karena judul
   sudah ada di layout */
.app-content .container-fluid > h1:first-child {
    display: none;
}

/* Tabel polos jadi bergaya */
.app-content table:not(.table) {
    width: 100%;
    border: 1px solid var(--kl-line) !important;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 0.9rem;
    overflow: hidden;
    background: var(--kl-surface);
    box-shadow: 0 1px 2px rgba(38, 48, 46, 0.04);
}

.app-content table:not(.table) th,
.app-content table:not(.table) td {
    padding: 0.75rem 1rem;
    border: 0 !important;
    border-bottom: 1px solid var(--kl-line) !important;
    text-align: left;
}

.app-content table:not(.table) th {
    background: #f8f9f8;
    color: var(--kl-muted);
    font-size: 0.82rem;
    font-weight: 600;
}

.app-content table:not(.table) tr:last-child td {
    border-bottom: 0 !important;
}

.app-content table:not(.table) tbody tr:hover td {
    background: #f6f8f7;
}

/* Input, select, tombol polos */
.app-content input:not([type="checkbox"]):not([type="radio"]):not(.form-control),
.app-content select:not(.form-select) {
    border: 1px solid var(--kl-line);
    border-radius: 0.55rem;
    padding: 0.45rem 0.7rem;
    background: var(--kl-surface);
    color: var(--kl-ink);
    font-size: 0.9rem;
}

.app-content button:not(.btn) {
    border: 1px solid var(--kl-line);
    border-radius: 0.55rem;
    padding: 0.4rem 0.8rem;
    background: var(--kl-surface);
    color: var(--kl-ink);
    font-size: 0.875rem;
    cursor: pointer;
}

.app-content button:not(.btn):hover {
    background: #eef1ef;
}

/* ==========================================================
   PENYESUAIAN UKURAN & KERAPIAN (form, tombol, tabel, badge)
   ========================================================== */

/* Header kartu: judul di kiri, tombol aksi di kanan */
.card-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 0.75rem;
    padding: 0.85rem 1.25rem;
}

.card-header .card-title {
    float: none;
    margin: 0;
    font-size: 0.95rem;
}

.card-header > .btn,
.card-header > a.btn {
    margin-left: auto;
}

/* Area filter */
.card-body {
    padding: 1rem 1.25rem;
}

.form-label {
    font-size: 0.72rem;
    font-weight: 500;
    margin-bottom: 0.2rem;
}

.form-control,
.form-select,
.input-group-text {
    font-size: 0.8125rem;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
    min-height: 2.15rem;
}

.form-control::placeholder {
    color: #a3adaa;
}

/* Tombol */
.btn {
    --bs-btn-font-size: 0.8rem;
    --bs-btn-padding-y: 0.38rem;
    --bs-btn-padding-x: 0.8rem;
}

.btn-sm {
    --bs-btn-font-size: 0.74rem;
    --bs-btn-padding-y: 0.22rem;
    --bs-btn-padding-x: 0.55rem;
}

.btn i,
.btn .bi {
    font-size: 0.9em;
}

/* Tabel */
.table {
    font-size: 0.8rem;
    margin-bottom: 0;
}

.table > :not(caption) > * > * {
    padding: 0.6rem 1rem;
}

.table > thead > tr > th {
    font-size: 0.72rem;
    letter-spacing: 0.02em;
    padding-top: 0.55rem;
    padding-bottom: 0.55rem;
}

.table > tbody > tr:last-child > td {
    border-bottom: 0;
}

.table-striped > tbody > tr:nth-of-type(odd) > * {
    --bs-table-bg-type: #fbfcfb;
}

.table-hover > tbody > tr:hover > * {
    --bs-table-bg-state: #f1f5f3;
}

.table td:first-child,
.table th:first-child {
    color: var(--kl-muted);
    width: 3.5rem;
}

/* Badge */
.badge {
    font-size: 0.68rem;
    padding: 0.35em 0.7em;
    letter-spacing: 0.01em;
}

/* Teks keterangan ("Menampilkan 10 dari 26 data") */
.text-muted,
.text-secondary,
small {
    font-size: 0.76rem;
}

/* Pagination */
.pagination {
    --bs-pagination-font-size: 0.78rem;
    --bs-pagination-padding-x: 0.65rem;
    --bs-pagination-padding-y: 0.3rem;
    margin-bottom: 0;
}

/* Fallback halaman polos: ikut diperkecil */
.app-content table:not(.table) {
    font-size: 0.8rem;
}

.app-content table:not(.table) th,
.app-content table:not(.table) td {
    padding: 0.6rem 1rem;
}

.app-content table:not(.table) th {
    font-size: 0.72rem;
}

.app-content input:not([type="checkbox"]):not([type="radio"]):not(.form-control),
.app-content select:not(.form-select),
.app-content button:not(.btn) {
    font-size: 0.8rem;
}

    </style>
</head>

<body class="layout-fixed sidebar-expand-lg">

<div class="app-wrapper">

    <!-- Header -->
    <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">

            <!-- Sidebar Toggle -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a
                        class="nav-link"
                        data-lte-toggle="sidebar"
                        href="#"
                        role="button"
                        aria-label="Toggle sidebar"
                    >
                        <i class="bi bi-list"></i>
                    </a>
                </li>
            </ul>

            <!-- User Menu -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">

                    <a
                        href="#"
                        class="nav-link dropdown-toggle d-flex align-items-center"
                        data-bs-toggle="dropdown"
                    >
                        <img
                            src="{{ asset('adminLTE/assets/img/user2-160x160.jpg') }}"
                            class="rounded-circle me-2"
                            style="width: 2rem; height: 2rem"
                            alt="Foto profil"
                        />

                        <span class="d-none d-md-inline">
                            Nama User
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="bi bi-person-gear me-2"></i>
                                Update Profile
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Logout
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>
    </nav>
    <!-- End Header -->


    <!-- Sidebar -->
    <aside class="app-sidebar" data-bs-theme="dark">

        <!-- Brand -->
        <div class="sidebar-brand">

            <a href="{{ url('/dashboard') }}" class="brand-link">

                <img
                    src="{{ asset('adminLTE/assets/img/AdminLTELogo.png') }}"
                    alt="Logo"
                    class="brand-image"
                />

                <span class="brand-text">
                    Sistem Informasi Klinik
                </span>

            </a>

        </div>

        <!-- Sidebar Wrapper -->
        <div class="sidebar-wrapper">

            <nav class="mt-2" aria-label="Main navigation">

                <ul
                    class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview"
                    id="navigation"
                >

                    <!-- Dashboard -->
                    <li class="nav-item">
                        <a
                            href="{{ url('/dashboard') }}"
                            class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}"
                        >
                            <i class="nav-icon bi bi-speedometer"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <!-- Pasien -->
                    <li class="nav-item">
                        <a
                            href="{{ url('/pasien') }}"
                            class="nav-link {{ request()->is('pasien*') ? 'active' : '' }}"
                        >
                            <i class="nav-icon bi bi-people"></i>
                            <p>Pasien</p>
                        </a>
                    </li>

                    <!-- Dokter -->
                    <li class="nav-item">
                        <a
                            href="{{ url('/dokter') }}"
                            class="nav-link {{ request()->is('dokter*') ? 'active' : '' }}"
                        >
                            <i class="nav-icon bi bi-person-badge"></i>
                            <p>Dokter</p>
                        </a>
                    </li>

                    <!-- Poli -->
                    <li class="nav-item">
                        <a
                            href="{{ url('/poli') }}"
                            class="nav-link {{ request()->is('poli*') ? 'active' : '' }}"
                        >
                            <i class="nav-icon bi bi-hospital"></i>
                            <p>Poli</p>
                        </a>
                    </li>

                    <!-- Pendaftaran -->
                    <li class="nav-item">
                        <a
                            href="{{ url('/pendaftaran') }}"
                            class="nav-link {{ request()->is('pendaftaran*') ? 'active' : '' }}"
                        >
                            <i class="nav-icon bi bi-card-checklist"></i>
                            <p>Pendaftaran</p>
                        </a>
                    </li>

                </ul>

            </nav>

        </div>

    </aside>
    <!-- End Sidebar -->


    <!-- Main Content -->
    <main class="app-main">

        <!-- Content Header -->
        <div class="app-content-header">
            <div class="container-fluid">
                <h1 class="mb-0 fs-3">
                    @yield('title', 'Sistem Informasi Klinik')
                </h1>
            </div>
        </div>

        <!-- Content -->
        <div class="app-content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

    </main>
    <!-- End Main Content -->


    <!-- Footer -->
    <footer class="app-footer">
        <strong>Copyright &copy; 2026 Sistem Informasi Klinik.</strong>
    </footer>
    <!-- End Footer -->

</div>


<!-- Scripts -->
<script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    crossorigin="anonymous">
</script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js"
    crossorigin="anonymous">
</script>

<script src="{{ asset('adminLTE/js/adminlte.min.js') }}"></script>

</body>

</html>