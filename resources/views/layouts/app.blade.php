<!doctype html>

<html lang="id" data-bs-theme="light" data-lte-color-mode="off">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Sistem Informasi Klinik')</title>

    <!-- Fonts -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
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
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

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
                            class="rounded-circle shadow me-2"
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
    <aside
        class="app-sidebar bg-body-secondary shadow"
        data-bs-theme="dark"
    >

        <!-- Brand -->
        <div class="sidebar-brand">

            <a
                href="{{ url('/dashboard') }}"
                class="brand-link"
            >

                <img
                    src="{{ asset('adminLTE/assets/img/AdminLTELogo.png') }}"
                    alt="Logo"
                    class="brand-image opacity-75 shadow"
                />

                <span class="brand-text fw-light">
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

                            <p>
                                Dashboard
                            </p>

                        </a>

                    </li>


                    <!-- Pasien -->
                    <li class="nav-item">

                        <a
                            href="{{ url('/pasien') }}"
                            class="nav-link {{ request()->is('pasien*') ? 'active' : '' }}"
                        >

                            <i class="nav-icon bi bi-people"></i>

                            <p>
                                Pasien
                            </p>

                        </a>

                    </li>


                    <!-- Dokter -->
                    <li class="nav-item">

                        <a
                            href="{{ url('/dokter') }}"
                            class="nav-link {{ request()->is('dokter*') ? 'active' : '' }}"
                        >

                            <i class="nav-icon bi bi-person-badge"></i>

                            <p>
                                Dokter
                            </p>

                        </a>

                    </li>


                    <!-- Poli -->
                    <li class="nav-item">

                        <a
                            href="{{ url('/poli') }}"
                            class="nav-link {{ request()->is('poli*') ? 'active' : '' }}"
                        >

                            <i class="nav-icon bi bi-hospital"></i>

                            <p>
                                Poli
                            </p>

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

        <strong>
            Copyright &copy; 2026 Sistem Informasi Klinik.
        </strong>

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