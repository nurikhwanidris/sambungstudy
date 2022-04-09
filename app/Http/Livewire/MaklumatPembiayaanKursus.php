<?php

namespace App\Http\Livewire;

use App\Models\PembiayaanKursusPernahDiterima;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MaklumatPembiayaanKursus extends Component
{

    public $pembiaya, $tempoh, $kursus, $tempohKontrak;
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    private function resetInputFields(){
        $this->pembiaya = '';
        $this->tempoh = '';
        $this->kursus = '';
        $this->tempohKontrak = '';
    }

    public function render()
    {
        return view('livewire.maklumat-pembiayaan-kursus');
    }

    public function maklumatKursus()
    {
        $validateData = $this->validate(
            [
                'pembiaya.0' => 'required',
                'tempoh.0' => 'required',
                'kursus.0' => 'required',
                'tempohKontrak.0' => 'required',
                'pembiaya.*' => 'required',
                'tempoh.*' => 'required',
                'kursus.*' => 'required',
                'tempohKontrak.*' => 'required',
            ],
            [
                'pembiaya.0.required' => 'pembiaya field is required',
                'tempoh.0.required' => 'tempoh field is required',
                'kursus.0.required' => 'kursus field is required',
                'tempohKontrak.0.required' => 'tempohKontrak field is required',
                'pembiaya.*.required' => 'pembiaya field is required',
                'tempoh.*.required' => 'tempoh field is required',
                'kursus.*.required' => 'kursus field is required',
                'tempohKontrak.*.required' => 'tempohKontrak field is required',
            ]
        );

        foreach ($this->pembiaya as $key => $value) {
            PembiayaanKursusPernahDiterima::updateOrCreate(
                [
                    'user_id' => Auth::user()->id,
                    'pembiaya' => $this->pembiaya[$key],
                    'tempoh' => $this->tempoh[$key],
                    'kursus' => $this->kursus[$key],
                    'tempohKontrak' => $this->tempohKontrak[$key],
                ]
            );
        }

        $this->inputs = [];
        $this->resetInputFields();
        session()->flash('message', 'Berjaya simpan kedalam database.');
    }

    public function mount()
    {
        $uid = Auth::user()->id;

        $checkExisting = PembiayaanKursusPernahDiterima::where('user_id', $uid)->get();

        if (count($checkExisting) > 0) {
            $this->updateMode = true;
            $this->inputs = [];
            $this->i = 1;
            foreach ($checkExisting as $key => $value) {
                $this->add($key);
                $this->pembiaya[$key] = $value->pembiaya;
                $this->tempoh[$key] = $value->tempoh;
                $this->kursus[$key] = $value->kursus;
                $this->tempohKontrak[$key] = $value->tempohKontrak;
            }
        }
    }
}
