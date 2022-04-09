<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Permohonan;
use Livewire\WithFileUploads;

class PengakuanPemohon extends Component
{
    use WithFileUploads;

    public $istiharHarta, $tarikhSah, $tandatanganPemohon;

    public function pengakuanPemohon()
    {


        $uid = Auth::user()->id;

        $pengakuan = new Permohonan();

        $pengakuan->user_id = $uid;
        $pengakuan->tarikhPengakuan = $this->tarikhSah;
        $pengakuan->tandatanganPemohon = $this->tandatanganPemohon;

        $this->tandatanganPemohon->store('pengesahan');

        $pengakuan->save();

        session()->flash('message', 'Berjaya simpan kedalam database.');

    }

    public function render()
    {
        return view('livewire.pengakuan-pemohon');
    }
}
