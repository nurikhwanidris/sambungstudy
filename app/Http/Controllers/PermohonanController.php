<?php

namespace App\Http\Controllers;

use App\Models\Permohonan;
use App\Models\University;
use App\Models\MaklumatPengajian;
use App\Models\MaklumatPegawai;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePermohonanRequest;
use App\Http\Requests\UpdatePermohonanRequest;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permohonan.index',[
            'permohonan' => Permohonan::where('id', Auth::user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permohonan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermohonanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermohonanRequest $request)
    {
        $validatePermohonan = $request->validate([
            'ic' => 'required',
            'tarikhPengakuan' => 'required',
            'tandatanganPemohon' => 'required'
        ]);

        // Insert permohonan 1st
        Permohonan::create($validatePermohonan);

        $validateMaklumatPengajian = $request->validate([
            'bidangPengajian' => 'required',
            'peringkatPengajian' => 'required',
            'kaedahPengajian' => 'required',
            'modPengajian' => 'required',
            'namaInstitusi' => 'required',
            'tempatPengajian' => 'required',
            'tempohPengajian' => 'required',
            'tarikhMulaPengajian' => 'required',
            'tarikhAkhirPengajian' => 'required',
        ]);

        // Insert maklumat pengajian 2nd
        $validateMaklumatPengajian = new MaklumatPengajian;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function show(Permohonan $permohonan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function edit(Permohonan $permohonan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermohonanRequest  $request
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermohonanRequest $request, Permohonan $permohonan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permohonan  $permohonan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permohonan $permohonan)
    {
        //
    }
}
