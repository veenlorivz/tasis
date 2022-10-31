<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function absen()
    {
        return $this->belongsTo(Absen::class);
    }

    public function pelanggaran(){
        return $this->hasMany(Pelanggaran::class);
    }

    public function kelas(){
        return $this->belongsTo(Siswa::class);
    }
}