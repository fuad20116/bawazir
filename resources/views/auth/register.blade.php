@extends('layouts.app')

@section('title', 'Buat akun Kelasqu')

@section('content')
<section class="auth-section">
    <div class="auth-shell">
        <aside class="auth-aside auth-aside-register">
            <a class="brand brand-light" href="{{ route('home') }}"><span class="brand-mark"><i class="bi bi-layers-half"></i></span>kelasqu<span class="brand-dot">.</span></a>
            <div class="auth-aside-copy"><span class="section-kicker">MULAI PERJALANAN BARUMU</span><h1>Ruang belajar<br>yang <span>tumbuh</span><br>bersamamu.</h1><p>Bangun skill, temukan inspirasi, dan buka peluang baru. Semua dimulai dari sini.</p></div>
            <div class="register-benefits"><span><i class="bi bi-check-circle-fill"></i> Kelas pilihan dari mentor ahli</span><span><i class="bi bi-check-circle-fill"></i> Belajar kapan pun, di mana pun</span><span><i class="bi bi-check-circle-fill"></i> Akses komunitas pembelajar</span></div>
            <div class="aside-decoration">Q<span>.</span></div>
        </aside>
        <div class="auth-panel">
            <div class="auth-form-wrap">
                <span class="auth-mobile-mark">MULAI PERJALANANMU</span>
                <h2>Buat akun gratis</h2>
                <p class="auth-subtitle">Isi beberapa detail dan mulai belajar hari ini.</p>
                @if ($errors->any())<div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>@endif
                <form method="POST" action="{{ url('/register') }}" class="auth-form">
                    @csrf
                    <label for="name" class="form-label">Nama lengkap</label>
                    <div class="input-wrap"><i class="bi bi-person"></i><input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nama kamu" autocomplete="name" maxlength="100" required autofocus></div>
                    <label for="email" class="form-label mt-3">Alamat email</label>
                    <div class="input-wrap"><i class="bi bi-envelope"></i><input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="nama@email.com" autocomplete="email" required></div>
                    <label for="password" class="form-label mt-3">Kata sandi</label>
                    <div class="input-wrap"><i class="bi bi-lock"></i><input id="password" type="password" name="password" class="form-control" placeholder="Minimal 8 karakter" autocomplete="new-password" required><button type="button" class="password-toggle" onclick="const input=document.getElementById('password');input.type=input.type==='password'?'text':'password'"><i class="bi bi-eye"></i></button></div>
                    <label for="password_confirmation" class="form-label mt-3">Konfirmasi kata sandi</label>
                    <div class="input-wrap"><i class="bi bi-shield-lock"></i><input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="Ulangi kata sandi" autocomplete="new-password" required></div>
                    <button class="btn btn-primary w-100 btn-lg rounded-pill mt-4" type="submit">Buat akun <i class="bi bi-arrow-right ms-2"></i></button>
                </form>
                <p class="auth-switch">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                <a class="back-home" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i> Kembali ke beranda</a>
            </div>
        </div>
    </div>
</section>
@endsection
