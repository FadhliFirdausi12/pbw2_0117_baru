<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function editProfile()
    {
        $user = Auth()->user();

        return view('admin.editProfile', compact('user'));
    }

    public function showProfiles()
    {
        $user = Auth::user();
        return view('admin.editProfile', compact('user'));
    }

    public function updateSettings(Request $request)
    {
        $user = Auth::user();
        
        // Validasi input
        $request->validate([
            'username' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'current_password' => 'required|string|min:8',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->username = $request->input('username');
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        // Jika password diubah, update password
        if ($request->filled('new_password')) {
            $user->password = bcrypt($request->input('new_password'));
        }

        $user->save();

        return redirect()->route('admin.editProfile')->with('success', 'Profile updated successfully.');
    }
}
