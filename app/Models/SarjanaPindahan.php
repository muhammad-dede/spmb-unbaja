<?php

namespace App\Models;

use App\Models\Referensi\AsalSekolah;
use App\Models\Referensi\Jenjang;
use App\Models\Referensi\Jurusan;
use App\Models\Referensi\SatuanPendidikan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SarjanaPindahan extends Model
{
    use HasFactory;

    protected $table = 'pmb_sarjana';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar', 'id');
    }

    public function asalSekolah()
    {
        return $this->belongsTo(AsalSekolah::class, 'id_asal_sekolah', 'id');
    }

    public function satuanPendidikan()
    {
        return $this->belongsTo(SatuanPendidikan::class, 'id_satuan_pendidikan', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'id_jurusan', 'id');
    }

    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class, 'id_jenjang', 'id');
    }
}
