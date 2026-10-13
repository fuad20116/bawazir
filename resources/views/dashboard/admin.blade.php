@extends('layouts.app')

@section('title', 'Dashboard admin')

@section('content')
<section class="dashboard-section">
    <div class="container dashboard-container">
        <div class="dashboard-heading">
            <div><span class="section-kicker">PANEL ADMINISTRATOR</span><h1>Halo, {{ explode(' ', auth()->user()->name)[0] }} <span class="wave">✦</span></h1><p>Ringkasan aktivitas dan perkembangan Kelasqu hari ini.</p></div>
            <div class="admin-badge"><i class="bi bi-shield-check"></i> Administrator</div>
        </div>
        <div class="admin-welcome"><div><span class="banner-kicker">KELASQU OVERVIEW</span><h2>Belajar yang baik<br>dimulai dari ruang yang tepat.</h2><p>Pantau komunitas dan konten kelas dari satu tempat.</p></div><div class="admin-welcome-icon"><i class="bi bi-grid-1x2"></i><span>ADMIN<br>SPACE</span></div></div>
        <div class="row g-3 dashboard-stats">
            <div class="col-sm-6 col-xl-3"><div class="stat-card"><span class="stat-icon stat-icon-purple"><i class="bi bi-people"></i></span><div><small>Total pengguna</small><strong>{{ number_format($userCount, 0, ',', '.') }}</strong></div><span class="stat-note">akun pembelajar</span></div></div>
            <div class="col-sm-6 col-xl-3"><div class="stat-card"><span class="stat-icon stat-icon-blue"><i class="bi bi-journal-richtext"></i></span><div><small>Total kelas</small><strong>{{ number_format($courseCount, 0, ',', '.') }}</strong></div><span class="stat-note">di katalog</span></div></div>
            <div class="col-sm-6 col-xl-3"><div class="stat-card"><span class="stat-icon stat-icon-green"><i class="bi bi-broadcast"></i></span><div><small>Kelas terbit</small><strong>{{ number_format($publishedCount, 0, ',', '.') }}</strong></div><span class="stat-note">aktif untuk dipelajari</span></div></div>
            <div class="col-sm-6 col-xl-3"><div class="stat-card"><span class="stat-icon stat-icon-orange"><i class="bi bi-calendar2-check"></i></span><div><small>Hari ini</small><strong>{{ now()->format('d') }}</strong></div><span class="stat-note">{{ now()->translatedFormat('F Y') }}</span></div></div>
        </div>
        <div class="row g-4 mt-1">
            <div class="col-lg-7"><div class="panel-card"><div class="panel-heading"><div><span class="section-kicker">KOMUNITAS</span><h2>Pengguna terbaru</h2></div><span class="count-pill">{{ $userCount }} pengguna</span></div>
                <div class="table-responsive"><table class="table admin-table align-middle mb-0"><thead><tr><th>Nama</th><th>Email</th><th>Bergabung</th></tr></thead><tbody>
                    @forelse ($users as $user)<tr><td><span class="table-person"><span class="avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</span><strong>{{ $user->name }}</strong></span></td><td>{{ $user->email }}</td><td>{{ $user->created_at->format('d M Y') }}</td></tr>
                    @empty<tr><td colspan="3" class="text-center py-5 text-secondary">Belum ada pengguna baru.</td></tr>@endforelse
                </tbody></table></div>
            </div></div>
            <div class="col-lg-5"><div class="panel-card"><div class="panel-heading"><div><span class="section-kicker">KATALOG</span><h2>Kelas terbaru</h2></div><i class="bi bi-three-dots"></i></div>
                <div class="admin-course-list">
                    @forelse ($courses as $course)<div class="admin-course-row"><span class="mini-course-icon cover-{{ $course->accent }}"><i class="bi bi-journal-bookmark"></i></span><div class="min-w-0"><strong>{{ $course->title }}</strong><small>{{ $course->category }} · {{ $course->instructor }}</small></div><span class="publish-dot {{ $course->is_published ? 'is-live' : '' }}" title="{{ $course->is_published ? 'Terbit' : 'Draft' }}"></span></div>
                    @empty<div class="empty-state py-4"><p>Belum ada kelas.</p></div>@endforelse
                </div>
                <div class="panel-foot"><i class="bi bi-info-circle"></i> Ringkasan ditampilkan dari data katalog kelas.</div>
            </div></div>
        </div>
        <div class="admin-tip mt-4"><i class="bi bi-lightbulb"></i><span><strong>Tips admin</strong> Untuk mengelola kelas dan pengguna, gunakan panel database atau tambahkan modul manajemen sesuai kebutuhan.</span></div>
    </div>
</section>
@endsection
