<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'nik_ktp',
        'nama_lengkap',
        'no_hp',
        'alamat',
        'tanggal_lahir'
    ];

    public function simpanan_anggota()
    {
        return $this->hasMany(SimpananAnggota::class);
    }

}
