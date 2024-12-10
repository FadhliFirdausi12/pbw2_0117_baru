<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SettingController;


class AdminController extends Controller
{
    public function setting()
    {
        $user = Auth::user(); // Mendapatkan data pengguna yang sedang login
        return view('admin.setting', compact('user')); // Mengirim data $user ke view
    }
}
