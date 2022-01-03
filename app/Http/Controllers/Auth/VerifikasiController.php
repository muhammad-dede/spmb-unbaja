<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerifikasiController extends Controller
{
    public function notice()
    {
        return view('auth.verifikasi');
    }

    public function verify(EmailVerificationRequest  $request)
    {
        $request->fulfill();

        return redirect('/home');
    }

    public function send(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return redirect()->back()->with('resend', 'Link verifikasi baru telah dikirim ke alamat email Kamu!');
    }
}
