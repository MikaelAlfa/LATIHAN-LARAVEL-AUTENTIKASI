<x-app-layout>
    <div class="container my-5">
        <!-- Foto Profil -->
        <div class="text-center mb-4">
            @if(Auth::user()->profile_photo)
                <img src="{{ asset('storage/' . Auth::user()->profile_photo) }}" 
                     alt="Foto Profil" 
                     class="rounded-circle shadow-lg border border-4 border-primary animate__animated animate__fadeInDown" 
                     width="160" height="160"
                     style="object-fit: cover;">
            @else
                <img src="https://via.placeholder.com/160" 
                     alt="Default Foto" 
                     class="rounded-circle shadow-lg opacity-50 animate__animated animate__fadeInDown" 
                     width="160" height="160">
            @endif
        </div>

        <!-- Profil User -->
        <div class="card shadow-lg border-0 p-4 animate__animated animate__fadeInUp bg-light">
            <h3 class="text-center fw-bold mb-4 text-primary">
                👋 Halo, {{ Auth::user()->name }}!
            </h3>
            <div class="row text-center">
                <div class="col-md-4 mb-3">
                    <div class="p-3 rounded bg-white shadow-sm hover-card">
                        <i class="bi bi-envelope-fill fs-3 text-primary"></i>
                        <p class="mb-0 mt-2"><strong>Email</strong></p>
                        <p class="text-muted small">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="p-3 rounded bg-white shadow-sm hover-card">
                        <i class="bi bi-person-vcard fs-3 text-success"></i>
                        <p class="mb-0 mt-2"><strong>NIM</strong></p>
                        <p class="text-muted small">{{ Auth::user()->nim }}</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="p-3 rounded bg-white shadow-sm hover-card">
                        <i class="bi bi-geo-alt-fill fs-3 text-danger"></i>
                        <p class="mb-0 mt-2"><strong>Tempat Lahir</strong></p>
                        <p class="text-muted small">{{ Auth::user()->tempat_lahir }}</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="p-3 rounded bg-white shadow-sm hover-card">
                        <i class="bi bi-calendar-event fs-3 text-warning"></i>
                        <p class="mb-0 mt-2"><strong>Tanggal Lahir</strong></p>
                        <p class="text-muted small">{{ Auth::user()->tanggal_lahir }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Aksi -->
        <div class="d-flex justify-content-between mt-4 animate__animated animate__fadeInUp">
            <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-lg shadow">
                <i class="bi bi-pencil-square"></i> Edit Profil
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-danger btn-lg shadow">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <!-- Bootstrap & Animate.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        /* Efek hover biar tidak membosankan */
        .hover-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
        }
        .hover-card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
    </style>
</x-app-layout>
