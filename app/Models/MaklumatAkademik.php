<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaklumatAkademik extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function permohonan()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
