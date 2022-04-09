@extends('layouts.main')

@section('content')
    {{-- Section A Maklumat Pemohon --}}
    @livewire('maklumat-pemohon')
    {{-- Section B Maklumat Perkhidmatan Pemohon --}}
    @livewire('maklumat-perkhidmatan')
    {{-- Section C Maklumat Akademik --}}
    @livewire('maklumat-akademik')
    {{-- Section D Maklumat Pengajian --}}
    @livewire('maklumat-pengajian')
    {{-- Section E Maklumat Kursus --}}
    @livewire('maklumat-kursus')
    {{-- Seksyen F Pengakuan Pemohon --}}
    @livewire('pengakuan-pemohon')
    {{-- Ubah ni nanti ikut keperluan --}}
    <div class="mb-3 p-2">
        <div class="col-lg-12">
            <span class="text-danger">Arahan:</span>
            <ol>
                <li>Lengkapkan borang dengan jelas menggunakan <b>HURUF BESAR</b></li>
                <li>Perlu diisi dalam <b>DUA SALINAN</b></li>
                <li>Borang permohonan ini hendaklah disertakan bersama :-
                    <ul>
                        <li>Senarai Tugas</li>
                        <li>Sinosis Kertas Cadangan Penyelidikan (Pemohon ijazah Sarjana dan Ph.D)</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>
@endsection
