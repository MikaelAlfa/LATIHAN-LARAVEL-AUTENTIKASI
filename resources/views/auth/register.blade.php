<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow-lg p-4 rounded-4 animate__animated animate__fadeInDown" style="max-width: 500px; width: 100%;">
            <h2 class="text-center mb-4 fw-bold">📝 Daftar Akun</h2>

            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="form-control rounded-pill"
                                  type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="text-danger mt-1" />
                </div>

                <!-- NIM -->
                <div class="mb-3">
                    <label for="nim" class="form-label fw-semibold">NIM</label>
                    <input id="nim" class="form-control rounded-pill" type="text" name="nim" value="{{ old('nim') }}" required>
                </div>

                <!-- Tempat Lahir -->
                <div class="mb-3">
                    <label for="tempat_lahir" class="form-label fw-semibold">Tempat Lahir</label>
                    <input id="tempat_lahir" class="form-control rounded-pill" type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                </div>

                <!-- Tanggal Lahir -->
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label fw-semibold">Tanggal Lahir</label>
                    <input id="tanggal_lahir" class="form-control rounded-pill" type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control rounded-pill"
                                  type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control rounded-pill"
                                  type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="form-control rounded-pill"
                                  type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-1" />
                </div>

                <!-- Foto Profil -->
                <div class="mb-4">
                    <label for="profile_photo" class="form-label fw-semibold">Foto Profil</label>
                    <input id="profile_photo" type="file" name="profile_photo" class="form-control" accept="image/*">
                </div>

                <!-- Tombol -->
                <div class="d-flex justify-content-between align-items-center">
                    <a class="text-decoration-none small text-secondary" href="{{ route('login') }}">
                        Sudah Punya Akun?
                    </a>

                    <button type="submit" class="btn btn-primary px-4 rounded-pill fw-bold">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>

    {{-- Tambahkan animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</x-guest-layout>
