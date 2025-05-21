<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}

