<?php

namespace App\Models;

use App\Models\Referensi\AsalSekolah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    use HasFactory;

    protected $table = 'pmb_pendidikan';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar', 'id');
    }

    public function asalSekolah()
    {
        return $this->belongsTo(AsalSekolah::class, 'id_asal_sekolah', 'id');
    }
}
