<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function lengkapiDataDiriForm()
    {
        return view('app.lengkapi-data-diri');
    }

    public function lengkapiDataDiriSave(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|max:30|regex:/^([0-9\s\-\+\(\)]*)$/',
        ], [
            'name.required' => 'Harus diisi.',
            'name.string' => 'Format tidak sesuai.',
            'name.max' => 'Maksimal 255 karakter.',
            'phone.required' => 'Harus diisi.',
            'phone.max' => 'Maksimal 30 karakter.',
            'phone.regex' => 'Format tidak sesuai.',
        ]);

        $user = User::findOrFail(auth()->id());
        $user->update([
            'name' => ucwords(strtolower($request->name)),
            'phone' => $request->phone,
        ]);

        return redirect()->route('home')->with('success', 'Berhasil melengkapi data diri!');
    }
}
