<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function fakultas()
    {
        return view('web.fakultas');
    }

    public function kontakKami()
    {
        return view('web.kontak-kami');
    }

    public function tanyaJawab()
    {
        return view('web.tanya-jawab');
    }
}
