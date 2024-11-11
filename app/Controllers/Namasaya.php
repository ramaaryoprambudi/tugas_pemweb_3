<?php

namespace App\Controllers;

class Namasaya extends BaseController
{
    public function index()
    {
        // return view('nama_saya');
    }
    function ambilBuku() {
        $buku = model('Bukumodel');
        $data = $buku->findAll();
        dd($data);
    }
}
