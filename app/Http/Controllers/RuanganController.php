<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
     public function awal()
   {
      return view('ruangan.awal',['data'=>Ruangan::all()]);
   	//return "Welcome";
   }
   public function tambah()
   {
      return view('ruangan.tambah');
   	//return $this->simpan();
   
   public function simpan(Requests $input)
   {
   	$ruangan = new Ruangan();
   	$ruangan->title = $input->title;
      $informasi = $ruangan->save() ? 'berhasil simpan data' : 'gagal simpan data';
      return redirect('ruangan')->with(['informasi'=>$informasi]);
   	//return "selamat {$ruangan->title} telah disimpan";
   }
   public function edit($id)
    {
        $ruangan = Ruangan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
    }
    public function lihat($id)
    {
        $ruangan = Ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }
    public function update($id, Requests $input)
    {
        $ruangan = Ruangan::find($id);
        $ruangan->title = $input->title;
        $informasi = $ruangan->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangan = Ruangan::find($id);
        $informasi = $ruangan->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}
