<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
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
   	$mahasiswa = new Mahasiswa();
   	$mahasiswa->nama = 'triyanti';
   	$mahasiswa->nim = '12345678';
   	$mahasiswa->alamat = 'pattimura';
    $mahasiswa->pengguna_id='6';
   	$mahasiswa->save();
   	return "selamat data anda dengan nama {$mahasiswa->nama} telah disimpan";
   }
}
