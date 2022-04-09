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
                                    <th class="text-center">Status</th>
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
                                            @if ($item->status == 1)
                                                <span class="badge badge-success">Diterima</span>
                                            @elseif($item->status == 2)
                                                <span class="badge badge-danger">Ditolak</span>
                                            @elseif ($item->status == 3)
                                                <span class="badge badge-secondary">Sedang Diproses</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{-- <a href="{{ route('permohonan.show', $item->id) }}" --}}
                                            <a href="#" class="btn btn-primary btn-sm">
                                                <i class="fas fa-print"></i>
                                            </a>
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
