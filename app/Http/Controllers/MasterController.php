<?php

namespace App\Http\Controllers;

use App\Models\Referensi\Wilayah;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getWilayah($id)
    {
        $data = Wilayah::where('id_parent_wilayah', $id)->orderBy('nama_wilayah', 'asc')->get();
        return response()->json(['data' => $data]);
    }
}
