<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index() {
        $nama = "Christina Larasati";

        $pelajaran = ["KESIS", "PSI", "ATI", "SISOP", "BASDAT", "ERP"];


        return view ('biodata', ['nama'=>$nama, 'matkul'=>$pelajaran]);
    }
}
