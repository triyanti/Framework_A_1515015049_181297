<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
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
   	$dosen = new Dosen();
   	$dosen->nama = 'triyanti';
   	$dosen->nip = '12345678';
   	$dosen->alamat = 'pattimura';
      $dosen->pengguna_id='6';
   	$dosen->save();
   	return "selamat data anda dengan username {$dosen->nama} telah disimpan";
   }
}
