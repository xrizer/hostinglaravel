<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('pemain.laporan');
    }

    public function jurnalumum()
    {
        return view('pemain.jurnalumum');
    }
    public function bukubesar()
    {
        return view('pemain.bukubesar');
    }
    public function neracasaldo()
    {
        return view('pemain.neracasaldo');
    }
    public function labarugi()
    {
        return view('pemain.labarugi');
    }
    public function neraca()
    {
        return view('pemain.neraca');
    }
    public function perubahanmodal()
    {
        return view('pemain.perubahanmodal');
    }
        public function neracalajur()
    {
        return view('pemain.neracalajur');
    }
}

