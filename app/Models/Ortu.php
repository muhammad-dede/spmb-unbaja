<?php

namespace App\Models;

use App\Models\Referensi\Pekerjaan;
use App\Models\Referensi\Wilayah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    protected $table = 'pmb_ortu';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar', 'id');
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
}
