<?php

namespace App\Http\Livewire;

use App\Models\MaklumatPengajian as ModelsMaklumatPengajian;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MaklumatPengajian extends Component
{
    public $bidangPengajian;
    public $peringkatPengajian;
    public $kaedahPengajian;
    public $modPengajian;
    public $namaInstitusi;
    public $tempatPengajian;
    public $tempohPengajianTahun;
    public $tempohPengajianBulan;
    public $mulaPengajian;
    public $tamatPengajian;

    public function render()
    {
        return view('livewire.maklumat-pengajian');
    }

    public function maklumatPengajian()
    {
        $uid = Auth::user()->id;

        $maklumatPengajian = new ModelsMaklumatPengajian();

        $maklumatPengajian->user_id = $uid;
        $maklumatPengajian->bidangPengajian = $this->bidangPengajian;
        $maklumatPengajian->peringkatPengajian = $this->peringkatPengajian;
        $maklumatPengajian->kaedahPengajian = $this->kaedahPengajian;
        $maklumatPengajian->modPengajian = $this->modPengajian;
        $maklumatPengajian->namaInstitusi = $this->namaInstitusi;
        $maklumatPengajian->tempatPengajian = $this->tempatPengajian;
        $maklumatPengajian->tempohPengajianTahun = $this->tempohPengajianTahun;
        $maklumatPengajian->tempohPengajianBulan = $this->tempohPengajianBulan;
        $maklumatPengajian->mulaPengajian = $this->mulaPengajian;
        $maklumatPengajian->tamatPengajian = $this->tamatPengajian;

        $maklumatPengajian->save();

        session()->flash('message', 'Berjaya disimpan kedalam database.');
    }

    public function mount()
    {
        $uid = Auth::user()->id;

        $checkExisting = ModelsMaklumatPengajian::where('user_id', $uid)->first();

        if (!is_null($checkExisting)) {
            $this->bidangPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->bidangPengajian;
            $this->peringkatPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->peringkatPengajian;
            $this->kaedahPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->kaedahPengajian;
            $this->modPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->modPengajian;
            $this->namaInstitusi = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->namaInstitusi;
            $this->tempatPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->tempatPengajian;
            $this->tempohPengajianTahun = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->tempohPengajianTahun;
            $this->tempohPengajianBulan = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->tempohPengajianBulan;
            $this->mulaPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->mulaPengajian;
            $this->tamatPengajian = ModelsMaklumatPengajian::where('user_id', Auth::user()->id)->first()->tamatPengajian;
        }
    }
}
