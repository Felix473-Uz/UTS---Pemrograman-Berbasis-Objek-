<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    public function mataPelajaran()
    {
        return $this->hasMany(MataPelajaran::class);
    }

    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}
