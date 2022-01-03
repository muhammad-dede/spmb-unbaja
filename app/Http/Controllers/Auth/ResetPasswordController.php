<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function reset(Request $request)
    {
        $token = $request->route()->parameter('token');

        return view('auth.reset-password')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:pmb_user',
            'password' => 'required|min:8|confirmed',
        ], [
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.exists' => 'Email tidak terdaftar.',
            'password.required' => 'Password baru harus diisi.',
            'password.min' => 'Password baru minimal diisi 8 karakter.',
            'password.confirmed' => 'Password baru tidak match.',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return $status === Password::PASSWORD_RESET
            ? redirect()->route('masuk')->with('success', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
}
