@extends('layouts.app')

@section('title', 'Masuk ke akunmu')

@section('content')
<section class="auth-section">
    <div class="auth-shell">
        <aside class="auth-aside">
            <a class="brand brand-light" href="{{ route('home') }}"><span class="brand-mark"><i class="bi bi-layers-half"></i></span>kelasqu<span class="brand-dot">.</span></a>
            <div class="auth-aside-copy"><span class="section-kicker">RUANG TUMBUH PUNYAMU</span><h1>Belajar hari ini,<br>lebih siap <span>esok hari.</span></h1><p>Setiap hal besar selalu dimulai dari satu langkah kecil. Senang melihatmu kembali.</p></div>
            <div class="aside-quote"><i class="bi bi-quote"></i><p>“Investasi terbaik adalah investasi pada dirimu sendiri.”</p><span>— Benjamin Franklin</span></div>
            <div class="aside-decoration">K<span>.</span></div>
        </aside>
        <div class="auth-panel">
            <div class="auth-form-wrap">
                <span class="auth-mobile-mark">SELAMAT DATANG KEMBALI</span>
                <h2>Masuk ke akunmu</h2>
                <p class="auth-subtitle">Lanjutkan perjalanan belajarmu bersama Kelasqu.</p>
                @if ($errors->any())<div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>@endif
                <form method="POST" action="{{ url('/login') }}" class="auth-form">
                    @csrf
                    <label for="email" class="form-label">Alamat email</label>
                    <div class="input-wrap"><i class="bi bi-envelope"></i><input id="email" type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="nama@email.com" autocomplete="email" required autofocus></div>
                    <label for="password" class="form-label mt-3">Kata sandi</label>
                    <div class="input-wrap"><i class="bi bi-lock"></i><input id="password" type="password" name="password" class="form-control" placeholder="Masukkan kata sandi" autocomplete="current-password" required><button type="button" class="password-toggle" onclick="const input=document.getElementById('password');input.type=input.type==='password'?'text':'password'"><i class="bi bi-eye"></i></button></div>
                    <div class="d-flex justify-content-between align-items-center mt-3 mb-4"><label class="form-check small mb-0"><input class="form-check-input" type="checkbox" name="remember"><span class="form-check-label">Ingat saya</span></label><span class="form-hint">Jaga akunmu tetap aman</span></div>
                    <button class="btn btn-primary w-100 btn-lg rounded-pill" type="submit">Masuk <i class="bi bi-arrow-right ms-2"></i></button>
                </form>
                <p class="auth-switch">Belum punya akun? <a href="{{ route('register') }}">Daftar sekarang</a></p>
                <a class="back-home" href="{{ route('home') }}"><i class="bi bi-arrow-left"></i> Kembali ke beranda</a>
            </div>
        </div>
    </div>
</section>
@endsection
