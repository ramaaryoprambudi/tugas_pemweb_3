<?php

namespace App\Controllers;

class AmbilBuku extends BaseController
{
    public function index()
    {
        function ambilBuku() {
        $buku = model('BukuModel');
        $data = $buku->findAll();
        dd($data);
        }
    }
    
}
