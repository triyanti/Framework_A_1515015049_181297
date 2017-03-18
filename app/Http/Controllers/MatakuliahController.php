<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
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
   	$matakuliah = new Matakuliah();
   	$matakuliah->title = 'PBO';
   	$matakuliah->keterangan = 'sesuatu';
   	$matakuliah->save();
   	return "selamat matakuliah {$matakuliah->title} telah disimpan";
   }
}
