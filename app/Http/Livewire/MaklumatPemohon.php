<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MaklumatPemohon extends Component
{
    public function render()
    {
        // Get pegawai info
        $user = Auth::user();
        $idPegawai = $user->idPegawai;
        $pegawai = DB::table('maklumat_pegawais')->where('id', $idPegawai)->first();

        // Get umur pegawai
        $tarikhLahir = $pegawai->tarikhLahir;
        $umur = date_diff(date_create(str_replace('-', '.', $tarikhLahir)), date_create('now'))->y;

        // Get negeri lahir
        $negeriLahir = substr($pegawai->noKP, 6, 2);

        return view('livewire.maklumat-pemohon',[
            'pegawai' => $pegawai,
            'negeriLahir' => $negeriLahir,
            'umur' => $umur,
        ]);
    }
}
