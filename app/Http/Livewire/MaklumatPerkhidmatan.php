<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MaklumatPerkhidmatan extends Component
{
    public function render()
    {
        // Check for first time user login
        $user = Auth::user();
        $idPegawai = $user->idPegawai;
        $pegawai = DB::table('maklumat_pegawais')->where('id', $idPegawai)->first();

        return view('livewire.maklumat-perkhidmatan',[
            'pegawai' => $pegawai,
        ]);
    }
}
