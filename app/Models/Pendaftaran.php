<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pmb_pendaftaran';
    protected $primaryKey = 'no';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];

    public function pendaftar()
    {
        return $this->belongsTo(Pendaftar::class, 'id_pendaftar', 'id');
    }

    public function pindahan()
    {
        return $this->hasOne(Pindahan::class, 'no_pendaftaran', 'no');
    }
}
