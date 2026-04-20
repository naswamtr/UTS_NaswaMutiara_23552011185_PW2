<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
        'akreditasi' 
    ];

    public function mahasiswas()
    {
        return $this->hasMany(
            Mahasiswa::class,
            'id_jurusan'
        );
    }

    // Relasi ke Matakuliah
    public function matakuliahs()
    {
        return $this->hasMany(
            Matakuliah::class,
            'id_jurusan'
        );
    }
}