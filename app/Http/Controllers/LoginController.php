<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Masyarakat;

class LoginController extends Controller
{
    // Menampilkan form login
    public function showLoginForm()
    {
        return view('login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial pengguna
        $user = Masyarakat::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Login berhasil
            Auth::login($user);
            return redirect()->route('dashboard'); // Ganti 'dashboard' dengan halaman setelah login
        }

        // Jika gagal
        return back()->withErrors(['login_error' => 'Username atau password salah']);
    }
}
