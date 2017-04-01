<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

    public function Dosen()
    {
    	return $this->hasMany(Dosen::class);
    }

    public function Jadwal_Matakuliah()
    {
    	return $this->belongsTo(Jadwal_Matakuliah::class)
    }

    public function Matakuliah()
    {
    	return $this->hasMany(Matakuliah::class)
    }
}



