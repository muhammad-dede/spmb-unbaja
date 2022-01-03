<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    use HasFactory;

    protected $table = 'ref_jenis_kelamin';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
