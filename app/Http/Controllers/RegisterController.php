<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Masyarakat;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register'); // Tampilan form register
    }

    public function register(Request $request)
    {
        $request->validate([
            'nik' => 'required|unique:masyarakats,nik|size:16',
            'nama' => 'required|string|max:35',
            'username' => 'required|unique:masyarakats,username|max:25',
            'password' => 'required|min:6|confirmed',
            'telp' => 'nullable|max:13',
            'alamat' => 'nullable|string',
        ]);

        // Simpan data masyarakat ke database
        Masyarakat::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'telp' => $request->telp,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}

