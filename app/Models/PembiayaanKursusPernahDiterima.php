<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembiayaanKursusPernahDiterima extends Model
{
    use HasFactory;

    // Protect the ID
    protected $guarded = ['id'];

    // Link with the pemohon model
    public function pemohon()
    {
        return $this->hasOne(Permohonan::class);
    }
}
