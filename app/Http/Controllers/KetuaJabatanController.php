<?php

namespace App\Http\Controllers;

use App\Models\KetuaJabatan;
use Illuminate\Support\Facades\DB;
use App\Models\MaklumatAkademik;
use App\Models\MaklumatPengajian;
use App\Models\KursusPernahDiterima;
use App\Models\PembiayaanKursusPernahDiterima;
use App\Models\Permohonan;
use App\Models\University;
use Illuminate\Http\Request;

class KetuaJabatanController extends Controller
{
    public function index()
    {
        return view('jtk.pub.index',[
            'permohonan' => Permohonan::all(),
        ]);
    }

    public function show(Permohonan $permohonan)
    {

        // Get Pemohon ID
        $pegawai = DB::table('maklumat_pegawais')->where('id', $permohonan->id)->first();

        // Get umur pegawai
        $umur = date_diff(date_create(str_replace('-', '.', $pegawai->tarikhLahir)), date_create('now'))->y;

        // Get negeri lahir
        $negeriLahir = substr($pegawai->noKP, 6, 2);

        return view('jtk.pub.show',[
            'pegawai' => $pegawai,
            'negeriLahir' => $negeriLahir,
            'umur' => $umur,
            'universities' => University::all(),
            'maklumatAkademiks' => MaklumatAkademik::where('user_id', $permohonan->id)->get(),
            'maklumatPengajian' => MaklumatPengajian::where('user_id', $permohonan->id)->first(),
            'maklumatKursuses' => KursusPernahDiterima::where('user_id', $permohonan->id)->get(),
            'pembiayaanKursuses' => PembiayaanKursusPernahDiterima::where('user_id', $permohonan->id)->get(),
            'pengakuan' => Permohonan::where('user_id', $permohonan->id)->first()
        ]);

        // dd(MaklumatAkademik::where('user_id', $permohonan->id)->get());

    }

    // public function save(Request $request)
    // {
    //     KetuaJabatan::updateOrCreate([
    //         'permohonan_id' => $request->permohonan_id,
    //         ''
    //     ]);

    //     return redirect()->route('jtk.pub.index');
    // }

}
