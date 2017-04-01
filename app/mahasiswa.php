<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nama','nim','alamat'];

    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class)
    }

    $mahasiswa = Pengguna::find(1)->mahasiswa;
}
