<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $request->authenticate();
            $request->session()->regenerate();

            $user = Auth::user();

            $redirectRoute = '';

            if ($user->hasAnyRole(['super-admin', 'admin'])) {
                $redirectRoute = 'admin.dashboard';
            } else {
                $redirectRoute = 'pengunjung.beranda';
            }
            // ✅ Tambahkan pesan sukses login
            return redirect()->intended(route($redirectRoute, absolute: false))
                ->with('success', 'Berhasil login! Selamat datang, ' . Auth::user()->name . '.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // ❌ Jika gagal login, tampilkan pesan error
            return back()
                ->with('error', 'Email atau password salah!')
                ->withInput($request->only('email'));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ✅ Tambahkan pesan logout sukses
        return redirect('/login')->with('success', 'Berhasil logout.');
    }
}
