<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function daftar()
    {
        return view('auth.daftar');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:pmb_user,email|max:255',
            'phone' => 'required|unique:pmb_user,phone|max:30|regex:/^([0-9\s\-\+\(\)]*)$/',
            'password' => ['required', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'Nama harus diisi',
            'name.string' => 'Format nama tidak valid',
            'name.max' => 'Maksimal diisi 255 karakter',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'email.max' => 'Maksimal diisi 255 karakter',
            'phone.required' => 'Nomor telepon harus diisi',
            'phone.regex' => 'Format nomor telepon tidak didukung',
            'phone.unique' => 'Nomor telepon sudah terdaftar',
            'phone.max' => 'Maksimal diisi 30 karakter',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Minimal diisi 8 karakter',
            'password.confirmed' => 'Konfirmasi password tidak sama',
        ]);

        User::create([
            'name' => ucwords($request->name),
            'phone' => $request->phone,
            'email' => strtolower($request->email),
            'avatar' => url('/avatar/default.svg'),
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('masuk')->with('success', 'Berhasil mendaftar. Silahkan masuk dengan akunmu!');
    }
}
