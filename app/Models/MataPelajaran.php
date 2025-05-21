<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MataPelajaran extends Model
{
    use HasFactory;

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function nilai()
    {
        return $this->hasMany(Nilai::class);
    }
}

