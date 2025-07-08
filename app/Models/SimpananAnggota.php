<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SimpananAnggota extends Model
{
    protected $fillable = [
        'anggota_id',
        'tanggal',
        'jenis',
        'nominal',
        'keterangan'
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }
}
