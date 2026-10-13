<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Belajar dengan cara baru') · Kelasqu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('css/kelasqu.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg topbar">
        <div class="container">
            <a class="navbar-brand brand" href="{{ route('home') }}">
                <span class="brand-mark"><i class="bi bi-layers-half"></i></span>
                kelasqu<span class="brand-dot">.</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-label="Buka menu">
                <i class="bi bi-list fs-3"></i>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <div class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                    @auth
                        <a class="nav-link px-lg-3" href="{{ auth()->user()->isAdmin() ? route('admin.dashboard') : route('dashboard') }}">Dashboard</a>
                        <span class="nav-user"><span class="avatar">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>{{ auth()->user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}" class="ms-lg-2">
                            @csrf
                            <button class="btn btn-outline-dark btn-sm rounded-pill px-3" type="submit">Keluar</button>
                        </form>
                    @else
                        <a class="nav-link px-lg-3" href="{{ route('home') }}#kelas">Jelajahi kelas</a>
                        <a class="nav-link px-lg-3" href="{{ route('login') }}">Masuk</a>
                        <a class="btn btn-primary rounded-pill px-4 ms-lg-2" href="{{ route('register') }}">Mulai belajar <i class="bi bi-arrow-up-right ms-1"></i></a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    @if (session('success') || session('error'))
        <div class="container pt-3">
            <div class="alert {{ session('success') ? 'alert-success' : 'alert-warning' }} alert-dismissible fade show" role="alert">
                {{ session('success') ?? session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        </div>
    @endif

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
