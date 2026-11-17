<!doctype html>
<html lang="id" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Login - Sistem Informasi Klinik</title>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/index.css"
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/600.css"
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/@fontsource/plus-jakarta-sans@5.0.19/700.css"
          crossorigin="anonymous" />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
          crossorigin="anonymous" />

    <!-- AdminLTE (sudah memuat Bootstrap) -->
    <link rel="stylesheet" href="{{ asset('adminLTE/css/adminlte.min.css') }}" />

    <style>
        :root {
            --kl-ink: #26302e;
            --kl-muted: #7b8783;
            --kl-line: #e1e6e3;
            --kl-accent: #4a8579;
            --kl-accent-dark: #3b6e64;
            --kl-accent-soft: #e6f0ed;
        }

        body {
            margin: 0;
            font-family: "Plus Jakarta Sans", system-ui, sans-serif;
            font-size: 0.875rem;
            color: var(--kl-ink);
            -webkit-font-smoothing: antialiased;
        }

        /* Latar halaman */
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            background: linear-gradient(135deg, #dcebe6 0%, #f5f6f4 50%, #dde7ef 100%);
        }

        /* Kartu utama: dua panel */
        .login-card {
            display: grid;
            grid-template-columns: 1.05fr 1fr;
            width: 100%;
            max-width: 900px;
            background: #ffffff;
            border-radius: 1.25rem;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(38, 48, 46, 0.14);
        }

        /* ---------- Panel kiri ---------- */
        .login-side {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2.75rem 2.5rem;
            color: #ffffff;
            background: linear-gradient(160deg, #2c4a45 0%, #3b6e64 55%, #4a8579 100%);
            overflow: hidden;
        }

        .login-side::before,
        .login-side::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.07);
        }

        .login-side::before {
            width: 260px;
            height: 260px;
            top: -90px;
            right: -90px;
        }

        .login-side::after {
            width: 200px;
            height: 200px;
            bottom: -70px;
            left: -60px;
        }

        .login-side > * {
            position: relative;
            z-index: 1;
        }

        .brand-badge {
            width: 3.25rem;
            height: 3.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            border-radius: 0.9rem;
            background: rgba(255, 255, 255, 0.16);
            margin-bottom: 1.5rem;
        }

        .login-side h2 {
            font-size: 1.55rem;
            font-weight: 700;
            line-height: 1.3;
            margin: 0 0 0.6rem;
            color: #ffffff;
        }

        .login-side p.lead-text {
            font-size: 0.85rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 1.75rem;
        }

        .feature-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .feature-list li {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.85rem;
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.92);
        }

        .feature-list .icon {
            flex: 0 0 auto;
            width: 2rem;
            height: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0.55rem;
            background: rgba(255, 255, 255, 0.14);
            color: #bfe6dc;
        }

        /* ---------- Panel kanan ---------- */
        .login-form-wrap {
            padding: 2.75rem 2.5rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .mobile-brand {
            display: none;
            align-items: center;
            gap: 0.6rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            color: var(--kl-accent-dark);
        }

        .mobile-brand .brand-badge {
            width: 2.5rem;
            height: 2.5rem;
            font-size: 1.2rem;
            margin: 0;
            color: #ffffff;
            background: var(--kl-accent);
        }

        .login-form-wrap h1 {
            font-size: 1.5rem;
            font-weight: 700;
            margin: 0 0 0.3rem;
            color: var(--kl-ink);
        }

        .login-form-wrap .subtitle {
            color: var(--kl-muted);
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--kl-ink);
            margin-bottom: 0.35rem;
        }

        .input-group .input-group-text {
            background: var(--kl-accent-soft);
            border: 1px solid var(--kl-line);
            border-right: 0;
            color: var(--kl-accent-dark);
            border-radius: 0.6rem 0 0 0.6rem;
            padding: 0 0.85rem;
        }

        .input-group .form-control {
            border: 1px solid var(--kl-line);
            padding: 0.62rem 0.85rem;
            font-size: 0.85rem;
            border-radius: 0 0.6rem 0.6rem 0;
        }

        .input-group .form-control:focus {
            border-color: var(--kl-accent);
            box-shadow: 0 0 0 0.2rem rgba(74, 133, 121, 0.16);
        }

        .input-group:focus-within .input-group-text {
            border-color: var(--kl-accent);
        }

        /* Password dengan tombol mata */
        .input-group .form-control.has-toggle {
            border-radius: 0;
            border-right: 0;
        }

        .btn-toggle {
            border: 1px solid var(--kl-line);
            border-left: 0;
            background: #ffffff;
            color: var(--kl-muted);
            border-radius: 0 0.6rem 0.6rem 0;
            padding: 0 0.9rem;
        }

        .btn-toggle:hover {
            color: var(--kl-accent-dark);
        }

        .input-group:focus-within .btn-toggle {
            border-color: var(--kl-accent);
        }

        /* Pesan error */
        .alert-soft {
            display: flex;
            align-items: flex-start;
            gap: 0.55rem;
            padding: 0.7rem 0.9rem;
            margin-bottom: 1.1rem;
            font-size: 0.8rem;
            color: #a1423d;
            background: #fbeceb;
            border: 1px solid #f1cfcc;
            border-radius: 0.6rem;
        }

        .field-error {
            margin-top: 0.3rem;
            font-size: 0.75rem;
            color: #b9524d;
        }

        /* Tombol login */
        .btn-login {
            width: 100%;
            padding: 0.72rem 1rem;
            margin-top: 0.4rem;
            font-size: 0.88rem;
            font-weight: 600;
            color: #ffffff;
            border: 0;
            border-radius: 0.65rem;
            background: linear-gradient(135deg, #4a8579 0%, #3b6e64 100%);
            box-shadow: 0 6px 16px rgba(74, 133, 121, 0.3);
            transition: transform 0.15s, box-shadow 0.15s;
        }

        .btn-login:hover {
            color: #ffffff;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(74, 133, 121, 0.38);
        }

        .login-footer {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 0.72rem;
            color: var(--kl-muted);
        }

        /* ---------- Responsif ---------- */
        @media (max-width: 767.98px) {
            .login-card {
                grid-template-columns: 1fr;
                max-width: 440px;
            }

            .login-side {
                display: none;
            }

            .mobile-brand {
                display: flex;
            }

            .login-form-wrap {
                padding: 2rem 1.5rem;
            }
        }
    </style>
</head>

<body>

<div class="login-page">
    <div class="login-card">

        <!-- Panel kiri -->
        <div class="login-side">
            <div class="brand-badge">
                <i class="bi bi-heart-pulse-fill"></i>
            </div>

            <h2>Sistem Informasi Klinik</h2>
            <p class="lead-text">
                Kelola data pasien, dokter, poli, dan pendaftaran dalam satu tempat
                yang rapi dan mudah digunakan.
            </p>

            <ul class="feature-list">
                <li>
                    <span class="icon"><i class="bi bi-people"></i></span>
                    Data pasien terpusat
                </li>
                <li>
                    <span class="icon"><i class="bi bi-person-badge"></i></span>
                    Jadwal dan data dokter
                </li>
                <li>
                    <span class="icon"><i class="bi bi-card-checklist"></i></span>
                    Pendaftaran pasien cepat
                </li>
            </ul>
        </div>

        <!-- Panel kanan: form -->
        <div class="login-form-wrap">

            <div class="mobile-brand">
                <span class="brand-badge"><i class="bi bi-heart-pulse-fill"></i></span>
                Sistem Informasi Klinik
            </div>

            <h1>Selamat datang</h1>
            <p class="subtitle">Silakan login untuk melanjutkan</p>

            {{-- Pesan error credential salah / validasi email --}}
            @error('email')
                <div class="alert-soft">
                    <i class="bi bi-exclamation-circle-fill"></i>
                    <span>{{ $message }}</span>
                </div>
            @enderror

            <form method="POST" action="{{ route('login.store') }}" novalidate>
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email"
                               id="email"
                               name="email"
                               class="form-control"
                               value="{{ old('email') }}"
                               placeholder="nama@klinik.test"
                               autocomplete="email"
                               autofocus>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password"
                               id="password"
                               name="password"
                               class="form-control has-toggle"
                               placeholder="Masukkan password"
                               autocomplete="current-password">
                        <button type="button"
                                id="togglePassword"
                                class="btn-toggle"
                                aria-label="Tampilkan atau sembunyikan password">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                    @error('password')
                        <div class="field-error">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                    Login
                </button>
            </form>

            <div class="login-footer">
                &copy; 2026 Sistem Informasi Klinik
            </div>
        </div>

    </div>
</div>

<script>
    // Tampilkan / sembunyikan password
    document.getElementById('togglePassword').addEventListener('click', function () {
        const input = document.getElementById('password');
        const show = input.type === 'password';

        input.type = show ? 'text' : 'password';
        this.querySelector('i').className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
    });
</script>

</body>

</html>