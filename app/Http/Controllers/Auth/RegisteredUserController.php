<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Tampilkan halaman registrasi.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Proses pendaftaran user baru.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi data input
        $request->validate([
            'name'          => ['required', 'string', 'max:255'],
            'nim'           => ['required', 'string', 'max:50'],
            'tempat_lahir'  => ['required', 'string', 'max:100'],
            'tanggal_lahir' => ['required', 'date'],
            'email'         => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'      => ['required', 'confirmed', Rules\Password::defaults()],
            'profile_photo' => ['nullable', 'image', 'max:2048'], // maksimal 2MB
        ]);

        // Simpan foto jika ada
        $path = null;
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
        }

        // Simpan user ke database
        $user = User::create([
            'name'          => $request->name,
            'nim'           => $request->nim,
            'tempat_lahir'  => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'profile_photo' => $path,
        ]);

        // Trigger event Registered
        event(new Registered($user));

        // Login user otomatis
        Auth::login($user);

        return redirect()->route('dashboard');

    }
}
