<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;

class UpdateDataDiriController extends Controller
{
    public function edit()
    {
        return view('app.update-data-diri');
    }

    public function update(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|numeric|digits_between:15,17|unique:pmb_pendaftar,nik',
            'id_jenis_kelamin' => 'required|string|max:10',
            'tempat_lahir' => 'required|string|max:255',
            'tgl_lahir' => 'required|date_format:Y-m-d|before:' . now()->toDateString(),
            'id_agama' => 'required|string|max:10',
            'telp' => 'required|max:30|regex:/^([0-9\s\-\+\(\)]*)$/',
        ]);

        Pendaftar::create([
            'id_user' => auth()->id(),
            'nama_lengkap' => ucwords(strtolower($request->nama_lengkap)),
            'nik' => $request->nik,
            'id_jenis_kelamin' => $request->id_jenis_kelamin,
            'tempat_lahir' => ucwords(strtolower($request->tempat_lahir)),
            'tgl_lahir' => $request->tgl_lahir,
            'id_agama' => $request->id_agama,
            'telp' => $request->telp,
        ]);

        User::where('id', auth()->id())->update([
            'name' => ucwords(strtolower($request->nama_lengkap)),
            'phone' => $request->telp,
        ]);

        return redirect()->route('home')->with('success', 'Berhasil memperbaharui data diri Kamu.');
    }
}
