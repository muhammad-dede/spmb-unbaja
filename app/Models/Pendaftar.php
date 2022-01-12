<?php

namespace App\Models;

use App\Models\Referensi\Agama;
use App\Models\Referensi\JenisKelamin;
use App\Models\Referensi\Pekerjaan;
use App\Models\Referensi\Wilayah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pmb_pendaftar';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function jenisKelamin()
    {
        return $this->belongsTo(JenisKelamin::class, 'id_jenis_kelamin', 'id');
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class, 'id_agama', 'id');
    }

    public function pekerjaanOrtu()
    {
        return $this->belongsTo(Pekerjaan::class, 'id_pekerjaan_ortu', 'id');
    }

    public function kelurahanOrtu()
    {
        return $this->belongsTo(Wilayah::class, 'id_kelurahan_ortu', 'id');
    }

    public function kecamatanOrtu()
    {
        return $this->belongsTo(Wilayah::class, 'id_kecamatan_ortu', 'id');
    }

    public function kabKotaOrtu()
    {
        return $this->belongsTo(Wilayah::class, 'id_kab_kota_ortu', 'id');
    }

    public function provinsiOrtu()
    {
        return $this->belongsTo(Wilayah::class, 'id_provinsi_ortu', 'id');
    }

    public function pekerjaanWali()
    {
        return $this->belongsTo(Pekerjaan::class, 'id_pekerjaan_wali', 'id');
    }

    public function kelurahanWali()
    {
        return $this->belongsTo(Wilayah::class, 'id_kelurahan_wali', 'id');
    }

    public function kecamatanWali()
    {
        return $this->belongsTo(Wilayah::class, 'id_kecamatan_wali', 'id');
    }

    public function kabKotaWali()
    {
        return $this->belongsTo(Wilayah::class, 'id_kab_kota_wali', 'id');
    }

    public function provinsiWali()
    {
        return $this->belongsTo(Wilayah::class, 'id_provinsi_wali', 'id');
    }
}
