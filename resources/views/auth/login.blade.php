<x-guest-layout>
    <div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
        <div class="card shadow-lg p-4 rounded-4 animate__animated animate__fadeInUp" style="max-width: 400px; width: 100%;">
            
            <!-- Judul -->
            <h2 class="text-center mb-4 fw-bold">🔑 Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-3" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control rounded-pill"
                                  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control rounded-pill"
                                  type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-1" />
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label small">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <!-- Tombol + Link -->
                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a class="small text-decoration-none text-secondary" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-success px-4 rounded-pill fw-bold">
                        Log In
                    </button>
                </div>
            </form>

            <!-- Link ke register -->
            <div class="text-center mt-4">
                <p class="mb-0 small">Belum punya akun? 
                    <a href="{{ route('register') }}" class="text-primary fw-bold text-decoration-none">
                        Daftar Sekarang
                    </a>
                </p>
            </div>
        </div>
    </div>

    {{-- Tambahkan animate.css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
</x-guest-layout>
