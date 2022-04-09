<?php

namespace App\Http\Livewire;

use App\Models\KursusPernahDiterima;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MaklumatKursus extends Component
{
    public $namaKursus, $penganjur, $tempat, $tempoh;
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
        $this->namaKursus = '';
        $this->penganjur = '';
        $this->tempat = '';
        $this->tempoh = '';
    }

    public function maklumatKursus()
    {
        $validateData = $this->validate(
            [
                'namaKursus.0' => 'required',
                'penganjur.0' => 'required',
                'tempat.0' => 'required',
                'tempoh.0' => 'required',
                'namaKursus.*' => 'required',
                'penganjur.*' => 'required',
                'tempat.*' => 'required',
                'tempoh.*' => 'required',
            ],
            [
                'namaKursus.0.required' => 'namaKursus field is required',
                'penganjur.0.required' => 'penganjur field is required',
                'tempat.0.required' => 'tempat field is required',
                'tempoh.0.required' => 'tempoh field is required',
                'namaKursus.*.required' => 'namaKursus field is required',
                'penganjur.*.required' => 'penganjur field is required',
                'tempat.*.required' => 'tempat field is required',
                'tempoh.*.required' => 'tempoh field is required',
            ]
        );

        foreach ($this->namaKursus as $key => $value) {
            KursusPernahDiterima::updateOrCreate(
                [
                    'user_id' => Auth::user()->id,
                    'namaKursus' => $this->namaKursus[$key],
                    'penganjur' => $this->penganjur[$key],
                    'tempat' => $this->tempat[$key],
                    'tempoh' => $this->tempoh[$key],
                ]
            );
        }

        $this->inputs = [];
        $this->resetInputFields();
        session()->flash('message', 'Maklumat akademik telah berjaya disimpan.');
    }

    public function render()
    {
        return view('livewire.maklumat-kursus');
    }

    public function mount()
    {
        $uid = Auth::user()->id;

        $checkExisting = KursusPernahDiterima::where('user_id', $uid)->get();

        if ($checkExisting->count() > 0) {
            $this->updateMode = true;
            $this->inputs = [];
            $this->i = 1;
            foreach ($checkExisting as $key => $value) {
                $this->namaKursus[$key] = $value->namaKursus;
                $this->penganjur[$key] = $value->penganjur;
                $this->tempat[$key] = $value->tempat;
                $this->tempoh[$key] = $value->tempoh;
                array_push($this->inputs ,$key+1);
            }
        }
    }
}
