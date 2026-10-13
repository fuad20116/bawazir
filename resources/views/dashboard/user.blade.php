@extends('layouts.app')

@section('title', 'Dashboard belajar')

@section('content')
<section class="dashboard-section">
    <div class="container dashboard-container">
        <div class="dashboard-heading">
            <div><span class="section-kicker">DASHBOARD BELAJAR</span><h1>Hai, {{ explode(' ', auth()->user()->name)[0] }} <span class="wave">✦</span></h1><p>Senang melihatmu kembali. Yuk, lanjutkan langkah baikmu hari ini.</p></div>
            <div class="today-chip"><i class="bi bi-calendar3"></i> {{ now()->translatedFormat('l, d F Y') }}</div>
        </div>
        <div class="welcome-banner">
            <div><span class="banner-kicker">SEDIKIT DEMI SEDIKIT, JADI BUKIT</span><h2>Terus bertumbuh dengan<br>belajar hal baru.</h2><p>Temukan inspirasi baru dan mulai kelas yang paling cocok untukmu.</p><a href="#kelas-tersedia" class="btn btn-light rounded-pill px-4">Jelajahi kelas <i class="bi bi-arrow-down ms-2"></i></a></div>
            <div class="banner-art"><div class="banner-circle"></div><i class="bi bi-book-half"></i><span class="banner-spark spark-a">✦</span><span class="banner-spark spark-b">✳</span><span class="banner-label">KEEP<br>GROWING</span></div>
        </div>
        <div class="row g-3 dashboard-stats">
            <div class="col-sm-6 col-lg-4"><div class="stat-card"><span class="stat-icon stat-icon-purple"><i class="bi bi-journal-bookmark"></i></span><div><small>Kelas tersedia</small><strong>{{ $courseCount }}</strong></div><span class="stat-note">pilihan untukmu</span></div></div>
            <div class="col-sm-6 col-lg-4"><div class="stat-card"><span class="stat-icon stat-icon-green"><i class="bi bi-lightning-charge"></i></span><div><small>Ritme belajar</small><strong>Siap!</strong></div><span class="stat-note">mulai kapan saja</span></div></div>
            <div class="col-sm-6 col-lg-4"><div class="stat-card"><span class="stat-icon stat-icon-orange"><i class="bi bi-award"></i></span><div><small>Langkah selanjutnya</small><strong>Belajar</strong></div><span class="stat-note">pilih kelas pertamamu</span></div></div>
        </div>
        <div class="courses-heading" id="kelas-tersedia"><div><span class="section-kicker">KURASI UNTUKMU</span><h2>Mulai dari kelas <span>favorit.</span></h2></div><span class="course-total">{{ $courses->count() }} kelas pilihan</span></div>
        <div class="row g-4">
            @forelse ($courses as $course)
                <div class="col-md-6 col-xl-3"><article class="course-card">
                    <div class="course-cover cover-{{ $course->accent }}"><span class="course-category">{{ $course->category }}</span><span class="course-art-icon"><i class="bi {{ $loop->index === 0 ? 'bi-bezier2' : ($loop->index === 1 ? 'bi-code-slash' : ($loop->index === 2 ? 'bi-megaphone' : 'bi-bar-chart-line')) }}"></i></span><span class="cover-caption">{{ str_pad((string) ($loop->iteration), 2, '0', STR_PAD_LEFT) }} / KELASQU</span></div>
                    <div class="course-card-body"><div class="course-rating"><span><i class="bi bi-star-fill"></i> {{ $course->rating }}</span><span>{{ $course->level }}</span></div><h3>{{ $course->title }}</h3><p class="instructor"><span class="instructor-avatar">{{ strtoupper(substr($course->instructor, 0, 1)) }}</span>{{ $course->instructor }}</p><div class="course-footer"><span><i class="bi bi-play-circle"></i> {{ $course->lessons }} materi</span><span><i class="bi bi-clock"></i> {{ $course->duration }}</span></div></div>
                </article></div>
            @empty
                <div class="col-12"><div class="empty-state"><i class="bi bi-journal-plus"></i><h3>Kelas baru sedang disiapkan</h3><p>Coba cek kembali nanti untuk menemukan kelas pertamamu.</p></div></div>
            @endforelse
        </div>
    </div>
</section>
@endsection
