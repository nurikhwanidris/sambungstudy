<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    // Protect the ID
    protected $guarded = ['id'];

    // User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // University
    public function universiti()
    {
        return $this->hasOne(University::class);
    }

    // Pegawai
    public function pegawai()
    {
        return $this->hasOne(MaklumatPegawai::class, 'id');
    }

    // Maklumat Permohonan
    public function maklumatPengajian()
    {
        return $this->belongsTo(MaklumatPengajian::class, 'user_id');
    }
}
