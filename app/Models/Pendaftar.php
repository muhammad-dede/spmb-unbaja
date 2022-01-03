<?php

namespace App\Models;

use App\Models\Referensi\Agama;
use App\Models\Referensi\JenisKelamin;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pmb_pendaftar';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'id_pendaftar', 'id');
    }

    public function ortu()
    {
        return $this->hasOne(Ortu::class, 'id_pendaftar', 'id');
    }

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class, 'id_pendaftar', 'id');
    }

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
}
