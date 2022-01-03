<?php

namespace App\Models;

use App\Models\Referensi\Jenjang;
use App\Models\Referensi\Jurusan;
use App\Models\Referensi\SatuanPendidikan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pindahan extends Model
{
    use HasFactory;

    protected $table = 'pmb_pindahan';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class, 'no_pendaftaran', 'no');
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
