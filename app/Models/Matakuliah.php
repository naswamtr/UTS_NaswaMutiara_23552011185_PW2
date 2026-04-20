<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    // WAJIB sesuai database
    protected $table = 'matakuliahs';

    protected $primaryKey = 'id';

    protected $fillable = [
        'kode_matakuliah',
        'nama_matakuliah',
        'sks',
        'jurusan_id'
    ];

    public function jurusan()
    {
        return $this->belongsTo(
            Jurusan::class,
            'jurusan_id',
            'id'
        );
    }
}