<?php

namespace App\Models\Referensi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghasilan extends Model
{
    use HasFactory;

    protected $table = 'ref_penghasilan';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public $incrementing = false;

    protected $guarded = [];
}
