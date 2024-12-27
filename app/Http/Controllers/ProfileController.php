<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function editProfile()
    {
        $user = Auth::user();

        return view('admin.editProfile', compact('user'));
    }

    /**
     * Update the user's profile.
     */
    public function updateProfile(Request $request)
{
    $user = Auth::user();

    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'current_password' => 'nullable|string|min:8',
        'new_password' => 'nullable|string|min:8|confirmed',
    ]);

    // Update nama dan email
    $user->name = $request->input('name');
    $user->email = $request->input('email');

    // Verifikasi dan update password jika diisi
    if ($request->filled('new_password')) {
        if (!Hash::check($request->input('current_password'), $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini salah.']);
        }
        $user->password = Hash::make($request->input('new_password'));
    }

    // Simpan perubahan
    $user->save();

    return redirect()->route('admin.editProfile')->with('success', 'Profile updated successfully.');
}

   // Metode untuk log out
    public function logout()
    {
        Auth::logout(); // Logout pengguna
        return redirect('/login')->with('success', 'You have been logged out successfully.');
    }

}