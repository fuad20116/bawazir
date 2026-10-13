@extends('layouts.app')

@section('title', 'Belajar hal baru, wujudkan mimpimu')

@section('content')
<section class="landing-hero">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6 hero-copy">
                <div class="eyebrow"><span class="eyebrow-dot"></span> Ruang belajar untuk masa depanmu</div>
                <h1>Langkah kecil hari ini,<br><span>skill besar</span> esok nanti.</h1>
                <p>Belajar keahlian baru dengan kelas pilihan, mentor berpengalaman, dan ritme yang nyaman buat kamu.</p>
                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg rounded-pill px-4">Temukan kelasmu <i class="bi bi-arrow-right ms-2"></i></a>
                    <a href="#kelas" class="btn btn-light btn-lg rounded-pill px-4">Jelajahi kelas</a>
                </div>
                <div class="hero-social-proof">
                    <div class="avatar-stack"><span>R</span><span>A</span><span>D</span><span><i class="bi bi-plus"></i></span></div>
                    <div><strong>Belajar bareng 2.400+ orang</strong><small>Komunitas yang terus berkembang</small></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-art">
                    <div class="hero-glow"></div>
                    <div class="floating-note note-top"><i class="bi bi-stars"></i> Belajar sesuai ritmemu</div>
                    <div class="learning-card">
                        <div class="learning-card-image"><span class="art-orbit"></span><i class="bi bi-brush-fill"></i><span class="art-label">CREATIVE<br>THINKING</span></div>
                        <div class="learning-card-body">
                            <span class="tag tag-purple">DESAIN</span>
                            <h3>Design thinking<br>untuk pemula</h3>
                            <div class="learning-meta"><span><i class="bi bi-play-circle"></i> 18 materi</span><span><i class="bi bi-star-fill text-warning"></i> 4.9</span></div>
                            <div class="mentor-line"><span class="mentor-avatar">NP</span><span>Nadia Putri <small>Design mentor</small></span><i class="bi bi-arrow-up-right ms-auto"></i></div>
                        </div>
                    </div>
                    <div class="floating-note note-bottom"><span class="note-icon"><i class="bi bi-check-lg"></i></span><span><strong>Progress kamu</strong><small>Terus melangkah. Kamu hebat!</small></span></div>
                    <span class="decor decor-one">✳</span><span class="decor decor-two">✦</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="trust-strip">
    <div class="container d-flex flex-wrap align-items-center justify-content-between gap-3">
        <span>Belajar bersama mentor dari berbagai bidang</span>
        <div class="trust-names"><b>studio<span>+</span></b><b class="trust-serif">nusa.</b><b>ruang<span class="text-primary">karya</span></b><b class="trust-wide">belajar<span>baik</span></b></div>
    </div>
</section>
<section class="section-pad" id="kelas">
    <div class="container">
        <div class="section-heading d-flex justify-content-between align-items-end flex-wrap gap-3">
            <div><span class="section-kicker">PILIH JALUR BELAJARMU</span><h2>Kelas yang bikin kamu<br>makin <span>berkembang.</span></h2></div>
            <p>Materi praktis, mentor inspiratif,<br>dan ilmu yang bisa langsung dipakai.</p>
        </div>
        <div class="row g-4 mt-2">
            <div class="col-md-6 col-lg-3"><div class="category-card category-lilac"><div class="category-icon"><i class="bi bi-bezier2"></i></div><span>01 / KREATIF</span><h3>Desain &<br>kreativitas</h3><i class="bi bi-arrow-up-right category-arrow"></i></div></div>
            <div class="col-md-6 col-lg-3"><div class="category-card category-blue"><div class="category-icon"><i class="bi bi-code-slash"></i></div><span>02 / TEKNOLOGI</span><h3>Teknologi &<br>digital</h3><i class="bi bi-arrow-up-right category-arrow"></i></div></div>
            <div class="col-md-6 col-lg-3"><div class="category-card category-peach"><div class="category-icon"><i class="bi bi-graph-up-arrow"></i></div><span>03 / BISNIS</span><h3>Bisnis &<br>karier</h3><i class="bi bi-arrow-up-right category-arrow"></i></div></div>
            <div class="col-md-6 col-lg-3"><div class="category-card category-mint"><div class="category-icon"><i class="bi bi-camera-reels"></i></div><span>04 / LIFESTYLE</span><h3>Gaya hidup &<br>personal</h3><i class="bi bi-arrow-up-right category-arrow"></i></div></div>
        </div>
    </div>
</section>
<section class="bottom-cta">
    <div class="container d-flex flex-wrap align-items-center justify-content-between gap-4">
        <div><span class="section-kicker">MULAI DARI SINI</span><h2>Versi terbaik dirimu<br>dimulai dari <span>satu kelas.</span></h2></div>
        <a href="{{ route('register') }}" class="btn btn-light btn-lg rounded-pill px-4">Daftar gratis <i class="bi bi-arrow-up-right ms-2"></i></a>
    </div>
</section>
<footer class="site-footer"><div class="container d-flex flex-wrap justify-content-between gap-3"><a class="brand" href="{{ route('home') }}"><span class="brand-mark"><i class="bi bi-layers-half"></i></span>kelasqu<span class="brand-dot">.</span></a><span>© {{ date('Y') }} Kelasqu. Tumbuh, satu kelas setiap hari.</span></div></footer>
@endsection
