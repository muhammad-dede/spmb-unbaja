<?php

function all_jenis_kelamin()
{
    return \App\Models\Referensi\JenisKelamin::all();
}

function all_agama()
{
    return \App\Models\Referensi\Agama::all();
}

function all_pekerjaan()
{
    return \App\Models\Referensi\Pekerjaan::all();
}

function get_rt()
{
    $data = [];

    for ($x = 1; $x < 301; $x++) {
        $data[] = [
            'rt' => sprintf("%02s", $x)
        ];
    }

    return $data;
}

function get_rw()
{
    $data = [];

    for ($x = 1; $x < 301; $x++) {
        $data[] = [
            'rw' => sprintf("%02s", $x)
        ];
    }

    return $data;
}

function all_provinsi()
{
    return \App\Models\Referensi\Wilayah::where('level_wilayah', 1)->orderBy('nama_wilayah', 'asc')->get();
}
