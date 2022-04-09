<?php

namespace App\Http\Livewire;

use App\Models\MaklumatAkademik as ModelsMaklumatAkademik;
use App\Models\University;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class MaklumatAkademik extends Component
{
    public $jenisKelayakan, $bidang, $universiti, $cgpa, $tahun;
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
        $this->jenisKelayakan = '';
        $this->bidang = '';
        $this->universiti = '';
        $this->cgpa = '';
        $this->tahun = '';
    }

    public function maklumatAkademik(){
        $validateData = $this->validate([
        'jenisKelayakan.0' => 'required',
        'bidang.0' => 'required',
        'universiti.0' => 'required',
        'cgpa.0' => 'required',
        'jenisKelayakan.*' => 'required',
        'bidang.*' => 'required',
        'universiti.*' => 'required',
        'cgpa.*' => 'required',
        'tahun.*' => 'required',
        ],

        [
        'jenisKelayakan.0.required' => 'jenisKelayakan field is required',
        'bidang.0.required' => 'bidang field is required',
        'universiti.0.required' => 'universiti field is required',
        'cgpa.0.required' => 'cgpa field is required',
        'tahun.0.required' => 'tahun field is required',
        'jenisKelayakan.*.required' => 'jenisKelayakan field is required',
        'bidang.*.required' => 'bidang field is required',
        'universiti.*.required' => 'universiti field is required',
        'cgpa.*.required' => 'cgpa field is required',
        'tahun.*.required' => 'tahun field is required',
        ]);

        foreach ($this->jenisKelayakan as $key => $value) {
            ModelsMaklumatAkademik::updateOrCreate([
                'user_id' => Auth::user()->id,
                'jenisKelayakan' => $this->jenisKelayakan[$key],
                'bidang' => $this->bidang[$key],
                'universiti' => $this->universiti[$key],
                'cgpa' => $this->cgpa[$key],
                'tahun' => $this->tahun[$key]
            ]);
        }

        $this->inputs = [];
        $this->resetInputFields();
        session()->flash('message', 'Maklumat akademik telah berjaya disimpan.');
    }

    public function render()
    {
        return view('livewire.maklumat-akademik',[
            'universities' => University::all(),
        ]);
    }

    public function mount()
    {
        $uid = Auth::user()->id;

        $checkExisting = ModelsMaklumatAkademik::where('user_id', $uid)->get();

        if(count($checkExisting) > 0){
            $this->updateMode = true;
            $this->inputs = [];
            $this->i = 1;
            foreach ($checkExisting as $key => $value) {
                $this->add($key);
                $this->jenisKelayakan[$key] = $value->jenisKelayakan;
                $this->bidang[$key] = $value->bidang;
                $this->universiti[$key] = $value->universiti;
                $this->cgpa[$key] = $value->cgpa;
                $this->tahun[$key] = $value->tahun;
            }
        }
    }
}
