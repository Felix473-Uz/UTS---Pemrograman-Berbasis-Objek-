<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}

