<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
     public function awal()
   {
   	return "Welcome";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$ruangan = new Ruangan();
   	$ruangan->title = 'Ruangan_3';
   	$ruangan->save();
   	return "selamat {$ruangan->title} telah disimpan";
   }
}
