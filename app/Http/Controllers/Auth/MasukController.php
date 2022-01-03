<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Rules\Masuk\CekAkun;
use App\Rules\Masuk\CekPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function masuk()
    {
        return view('auth.masuk');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', new CekAkun],
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Format email tidak valid',
        ]);

        $request->validate([
            'password' => ['required', 'min:8', new CekPassword($request->email)],
        ], [
            'password.required' => 'Password harus diisi',
            'password.min' => 'Minimal 8 karakter',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }

        return redirect('masuk')->with('error', 'Email/Password tidak sesuai!');
    }
}
