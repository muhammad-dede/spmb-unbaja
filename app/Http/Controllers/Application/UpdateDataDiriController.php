<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UpdateDataDiriController extends Controller
{
    public function edit()
    {
        return view('app.update-data-diri');
    }

    public function ajaxValidateDataDiri(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'nama_lengkap' => 'required|string|max:255',
                'nik' => 'required|numeric|digits_between:15,17|unique:pmb_pendaftar,nik',
                'id_jenis_kelamin' => 'required|string|max:10',
                'tempat_lahir' => 'required|string|max:255',
                'tgl_lahir' => 'required|date_format:Y-m-d|before:' . now()->toDateString(),
                'id_agama' => 'required|string|max:10',
                'telp' => 'required|max:30|regex:/^([0-9\s\-\+\(\)]*)$/',
            ], [
                'nama_lengkap.required' => 'Nama Lengkap harus diisi',
                'nama_lengkap.string' => 'Format tidak valid',
                'nama_lengkap.max' => 'Maksimal 255 karakter',
                'nik.required' => 'NIK harus diisi',
                'nik.numeric' => 'NIK harus diisi dengan angka',
                'nik.digits_between' => 'Min 15 digit & max 17 digit',
                'nik.unique' => 'NIK sudah terdaftar',
                'id_jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
                'id_jenis_kelamin.string' => 'Format tidak valid',
                'id_jenis_kelamin.max' => 'Maksimal 10 karakter',
                'tempat_lahir.required' => 'Tempat Lahir harus diisi',
                'tempat_lahir.string' => 'Format tidak valid',
                'tempat_lahir.max' => 'Maksimal 255 karakter',
                'tgl_lahir.required' => 'Tanggal Lahir harus diisi',
                'tgl_lahir.date_format' => 'Format tanggal tidak valid',
                'tgl_lahir.before' => 'Tanggal lahir harus diisi sebelum hari ini',
                'id_agama.required' => 'Agama harus diisi',
                'id_agama.string' => 'Format tidak valid',
                'id_agama.max' => 'Maksimal 10 karakter',
                'telp.required' => 'Nomor Telepon/HP harus diisi',
                'telp.max' => 'Maksimal 30 karakter',
                'telp.regex' => 'Format tidak valid',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'errors' => $validator->errors()->toArray()]);
            } else {
                return response()->json(['status' => 200]);
            }
        } else {
            return response()->json(['status' => 500]);
        }
    }

    public function ajaxValidateDataOrtu(Request $request)
    {
        if ($request->ajax()) {
            $validator = Validator::make($request->all(), [
                'nama_ibu' => 'required|string|max:255',
                'nama_ayah' => 'nullable|string|max:255',
                'id_pekerjaan_ortu' => 'nullable|string|max:10',
                'alamat_ortu' => 'nullable|string|max:255',
                'id_provinsi_ortu' => 'nullable|string|max:10',
                'id_kab_kota_ortu' => 'nullable|string|max:10',
                'id_kecamatan_ortu' => 'nullable|string|max:10',
                'kelurahan_ortu' => 'nullable|string|max:255',
                'dusun_kp_ortu' => 'nullable|string|max:255',
                'rt_ortu' => 'nullable|string|max:3',
                'rw_ortu' => 'nullable|string|max:3',
                'kode_pos_ortu' => 'nullable|string|max:10',
                'telp_ortu' => 'nullable|string|max:30',
                'nama_wali' => 'required|string|max:255',
                'id_pekerjaan_wali' => 'nullable|string|max:10',
                'alamat_wali' => 'nullable|string|max:255',
                'id_provinsi_wali' => 'nullable|string|max:10',
                'id_kab_kota_wali' => 'nullable|string|max:10',
                'id_kecamatan_wali' => 'nullable|string|max:10',
                'kelurahan_wali' => 'nullable|string|max:255',
                'rt_wali' => 'nullable|string|max:3',
                'rw_wali' => 'nullable|string|max:3',
                'telp_wali' => 'nullable|string|max:30',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => 400, 'errors' => $validator->errors()->toArray()]);
            } else {
                return response()->json(['status' => 200]);
            }
        } else {
            return response()->json(['status' => 500]);
        }
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
            'nama_ibu' => 'required|string|max:255',
            'nama_ayah' => 'nullable|string|max:255',
            'id_pekerjaan_ortu' => 'nullable|string|max:10',
            'alamat_ortu' => 'nullable|string|max:255',
            'id_provinsi_ortu' => 'nullable|string|max:10',
            'id_kab_kota_ortu' => 'nullable|string|max:10',
            'id_kecamatan_ortu' => 'nullable|string|max:10',
            'kelurahan_ortu' => 'nullable|string|max:255',
            'dusun_kp_ortu' => 'nullable|string|max:255',
            'rt_ortu' => 'nullable|string|max:3',
            'rw_ortu' => 'nullable|string|max:3',
            'kode_pos_ortu' => 'nullable|string|max:10',
            'telp_ortu' => 'nullable|string|max:30',
            'nama_wali' => 'required|string|max:255',
            'id_pekerjaan_wali' => 'nullable|string|max:10',
            'alamat_wali' => 'nullable|string|max:255',
            'id_provinsi_wali' => 'nullable|string|max:10',
            'id_kab_kota_wali' => 'nullable|string|max:10',
            'id_kecamatan_wali' => 'nullable|string|max:10',
            'kelurahan_wali' => 'nullable|string|max:255',
            'rt_wali' => 'nullable|string|max:3',
            'rw_wali' => 'nullable|string|max:3',
            'telp_wali' => 'nullable|string|max:30',
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
            'nama_ibu' => ucwords(strtolower($request->nama_ibu)),
            'nama_ayah' => ucwords(strtolower($request->nama_ayah)),
            'id_pekerjaan_ortu' => $request->id_pekerjaan_ortu,
            'alamat_ortu' => $request->alamat_ortu,
            'id_provinsi_ortu' => $request->id_provinsi_ortu,
            'id_kab_kota_ortu' => $request->id_kab_kota_ortu,
            'id_kecamatan_ortu' => $request->id_kecamatan_ortu,
            'kelurahan_ortu' => $request->kelurahan_ortu,
            'dusun_kp_ortu' => $request->dusun_kp_ortu,
            'rt_ortu' => $request->rt_ortu,
            'rw_ortu' => $request->rw_ortu,
            'kode_pos_ortu' => $request->kode_pos_ortu,
            'telp_ortu' => $request->telp_ortu,
            'nama_wali' => $request->nama_wali,
            'id_pekerjaan_wali' => $request->id_pekerjaan_wali,
            'alamat_wali' => $request->alamat_wali,
            'id_provinsi_wali' => $request->id_provinsi_wali,
            'id_kab_kota_wali' => $request->id_kab_kota_wali,
            'id_kecamatan_wali' => $request->id_kecamatan_wali,
            'kelurahan_wali' => $request->kelurahan_wali,
            'rt_wali' => $request->rt_wali,
            'rw_wali' => $request->rw_wali,
            'telp_wali' => $request->telp_wali,
        ]);

        User::where('id', auth()->id())->update([
            'name' => ucwords(strtolower($request->nama_lengkap)),
            'phone' => $request->telp,
        ]);

        return redirect()->route('home')->with('success', 'Berhasil memperbaharui data diri Kamu.');
    }
}
