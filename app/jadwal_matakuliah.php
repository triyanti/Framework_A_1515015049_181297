<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

    public function Dosen_Matakuliah()
    {
    	return $this->hasMany(Dosen_Matakuliah::class)
    }

    public function Ruangan()
    {
    	return $this->hasOne(Ruangan::class)
    }
}
