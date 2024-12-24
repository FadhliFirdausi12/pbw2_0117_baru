<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\View\View;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return View
     */
    public function create(): View
    {
        // Menampilkan halaman untuk meminta reset password
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  Request  $request
     * @return RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validasi email yang diterima
        $validated = $request->validate([
            'email' => ['required', 'email'],
        ]);

        // Kirim link reset password ke email yang valid
        $status = Password::sendResetLink(
            $validated
        );

        // Tampilkan pesan berdasarkan hasil pengiriman link
        if ($status == Password::RESET_LINK_SENT) {
            return back()->with('status', __($status));
        }

        // Jika gagal, kembalikan ke halaman sebelumnya dengan pesan error
        return back()
            ->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
    }
}