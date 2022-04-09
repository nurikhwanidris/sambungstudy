@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Senarai Permohonan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-left">Pemohon</th>
                                    <th class="text-left">Bahagian</th>
                                    <th class="text-left">Seksyen</th>
                                    <th class="text-left">Jawatan</th>
                                    <th class="text-center">Gred</th>
                                    <th class="text-left">Jenis Pengajian</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permohonan as $item)
                                    <tr>
                                        <td class="text-left">
                                            {{ $item->pegawai->namaPegawai }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->pegawai->Bahagian }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->pegawai->Seksyen }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->pegawai->namaJawatan }}
                                        </td>
                                        <td class="text-center">
                                            {{ $item->pegawai->Gred }}
                                        </td>
                                        <td class="text-left">
                                            {{ $item->maklumatPengajian->peringkatPengajian }}
                                        </td>
                                        <td class="text-center">
                                            <a href="/bkp/papar/{{ $item->id }}">Papar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
