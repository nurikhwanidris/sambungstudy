<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaklumatPegawai extends Model
{
    use HasFactory;

    // // Maklumat pegawai
    // public function pegawai()
    // {
    //     return $this->belongsTo(MaklumatPegawai::class, 'id');
    // }

    // User
    public function user()
    {
        return $this->hasOne(User::class, 'user_id');
    }
}
