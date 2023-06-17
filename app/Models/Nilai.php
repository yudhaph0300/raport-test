<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    public function matapelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'matapelajaran_id');
    }

    // public function matapelajaran()
    // {
    //     return $this->hasMany(MataPelajaran::class);
    // }
}
