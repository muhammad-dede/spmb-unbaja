<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class LupaPasswordController extends Controller
{
    public function request()
    {
        return view('auth.lupa-password');
    }

    public function email(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:pmb_user',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.exists' => 'Email tidak terdaftar.',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    public function passwordReset(Request $request)
    {
        $token = $request->route()->parameter('token');

        return view('auth.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
}
