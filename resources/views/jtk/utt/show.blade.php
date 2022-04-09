@extends('layouts.main')

@section('content')
    <div class="row">
        {{-- Maklumat Diri Pemohon --}}
        <div class="col-lg-12">
            <div class="card shadow mb-3">
                <a href="#maklumatDiriPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="maklumatDiriPemohon">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen A - Maklumat Diri Pemohon</h6>
                </a>
                <div class="collapse show" id="maklumatDiriPemohon">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-md">1.
                                        Nama
                                        Penuh</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" name="namaPenuh"
                                            class="form-control form-control-md text-uppercase text-uppercase"
                                            id="colFormLabelSm" placeholder="Saddiq bin Sigaraga"
                                            value="{{ $pegawai->namaPegawai }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">2. No Kad
                                        Pengenalan</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" name="ic" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->noKP }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">3. Tarikh
                                        Lahir</label>
                                    <div class="col-sm-3">
                                        <input readonly type="date" name="tarikhLahir" id="tarikhLahir"
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->tarikhLahir }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">4. Umur</label>
                                    <div class="col-sm-3">
                                        <input readonly type="number" name="umur" id="umur"
                                            class="form-control form-control-md text-uppercase" value="{{ $umur }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">5. Negeri
                                        Lahir</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="negeriLahir" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="@if ($negeriLahir == '01') Johor @elseif($negeriLahir == '02')Kedah @elseif($negeriLahir == '03')Kelantan @elseif ($negeriLahir == '04')Melaka @elseif($negeriLahir == '05')Negeri Sembilan @elseif($negeriLahir == '06')Pahang @elseif($negeriLahir == '07')Perak @elseif($negeriLahir == '08')Perlis @elseif($negeriLahir == '09')Pulau Pinang @elseif($negeriLahir == '10')Selangor
                                        @elseif($negeriLahir == '11')Terengganu @elseif($negeriLahir == '12')Wilayah Persekutuan Kuala Lumpur @elseif($negeriLahir == '13')
                                            Sabah @elseif($negeriLahir == '14')Sarawak @elseif($negeriLahir == '15')Lain-lain @elseif($negeriLahir == '16')Wilayah  Persekutuan Labuan @endif"
                                            readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">6. Taraf
                                        Perkahwinan</label>
                                    <div class="col-sm-3">
                                        <select name="statusPerkahwinan" id=""
                                            class="form-control form-control-md text-uppercase" readonly>
                                            <option value="">Sila Pilih</option>
                                            <option value="1" @if ($pegawai->Status == 1) selected @endif>Bujang
                                            </option>
                                            <option value="2" @if ($pegawai->Status == 2) selected @endif>
                                                Berkahwin
                                            </option>
                                            <option value="3" @if ($pegawai->Status == 3) selected @endif>Duda
                                            </option>
                                            <option value="4" @if ($pegawai->Status == 4) selected @endif>Janda
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label md">7. Jantina</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="jantina" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="@if ($pegawai->Jantina == 1) Lelaki @else Perempuan @endif"
                                            readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">8. Kecacatan</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="kecacatan" id=""
                                            class="form-control form-control-md text-uppercase" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#maklumatPerkhidmatanPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="maklumatPerkhidmatanPemohon">
                    <h6 class="m-0 font-weight-bold text-primary">
                        Seksyen B - Maklumat Perkhidmatan Pemohon
                    </h6>
                </a>
                <div class="collapse show" id="maklumatPerkhidmatanPemohon">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">9. Klasifikasi
                                        Perkhidmatan</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" name="klasifikasiPerkhidmatan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">10. Skim
                                        Perkhidmatan</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" name="skimPerkhidmatan" id=""
                                            class="form-control form-control-md text-uppercase" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">11. Gred
                                        Jawatan</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="gredJawatan" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->Gred }}" readonly>
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md text-right">12. Gaji
                                        Pokok</label>
                                    <div class="col-sm-3 input-group">
                                        <span class="input-group-text">RM</span>
                                        <input readonly type="text" name="gajiPokok" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">13. JUPEM Negeri /
                                        Bahagian</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" name="jupemBahagian" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">14. Alamat Tempat
                                        Bertugas</label>
                                    <div class="col-sm-9">
                                        <input readonly type="text" name="alamatTempatBertugas1" id=""
                                            class="form-control form-control-md text-uppercase mb-1"
                                            placeholder="Jabatan Ukur Dan Pemetaan Malaysia">
                                        <input readonly type="text" name="alamatTempatBertugas2" id=""
                                            class="form-control form-control-md text-uppercase mb-1"
                                            placeholder="Wisma JUPEM, Jalan Sultan Yahya Petra">
                                        <input readonly type="text" name="alamatTempatBertugas3" id=""
                                            class="form-control form-control-md text-uppercase"
                                            placeholder="50578 Kuala Lumpur">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form label-md">15. No Telefon
                                        Bimbit</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="telefonBimbit" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form label-sm">15. No Telefon
                                        Pejabat</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="telefonPejabat" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">16. Emel
                                        Jabatan</label>
                                    <div class="col-sm-9">
                                        <input readonly type="email" name="emelJabatan" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->Email }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">17. Tarikh
                                        Lantikan</label>
                                    <div class="col-sm-3">
                                        <input readonly type="date" name="tarikhLantikan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">18. Tarikh
                                        Disahkan</label>
                                    <div class="col-sm-3">
                                        <input readonly type="date" name="tarikhDisahkan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-12 col-form-label col-form-label-md">19. <u>Lantikan
                                            pertama
                                            ke
                                            <b class="fw-bold">PERKHIDMATAN
                                                KERAJAAN</b> jika selain dari</u></label>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">a. Skim
                                        Perkhidmatan</label>
                                    <div class="col-sm-3">
                                        <input readonly type="text" name="skimPerkhidmatan2" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">b. Tarikh
                                        Lantikan</label>
                                    <div class="col-sm-3">
                                        <input readonly type="date" name="tarikhLantikan2" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#maklumatAkademik" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="maklumatAkademik">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen C - Maklumat Akademik</h6>
                </a>
                <div class="collapse show" id="maklumatAkademik">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row mb-3">
                                    <span for="" class="text-muted col-sm-12 col-form-label col-form-label-md">19.
                                        Kelayakan</span>
                                    <div class="col-sm-12">
                                        @foreach ($maklumatAkademiks as $maklumatAkademik)
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <input type="text" name="sijil" list="universities" id=""
                                                        class="form-control form-control-md text-uppercase"
                                                        placeholder="Bidang & Institusi/Universiti"
                                                        value="{{ $maklumatAkademik->jenisKelayakan }}" readonly>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="text" name="sijilCgpa" id=""
                                                        class="form-control form-control-md text-uppercase"
                                                        placeholder="Kelas/CGPA" value="{{ $maklumatAkademik->bidang }}"
                                                        readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="sijilTahun" id=""
                                                        class="form-control form-control-md text-uppercase"
                                                        placeholder="Tahun" value="{{ $maklumatAkademik->cgpa }}"
                                                        readonly>
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="sijilTahun" id=""
                                                        class="form-control form-control-md text-uppercase"
                                                        placeholder="Tahun" value="{{ $maklumatAkademik->tahun }}"
                                                        readonly>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#maklumatPengajian" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="maklumatPengajian">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen D - Maklumat Pengajian Pemohon</h6>
                </a>
                <form wire:submit.prevent="maklumatPengajian">
                    <div class="collapse show" id="maklumatPengajian">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">20. Bidang
                                            Pengajian</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="bidangPengajian" id=""
                                                class="form-control form-control-md text-uppercase @error('bidangPengajian') is-invalid @enderror"
                                                value="{{ $maklumatPengajian->bidangPengajian }}"
                                                wire:model='bidangPengajian' readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">21. Peringkat
                                            Pengajian</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="peringkatPengajian" id=""
                                                class="form-control form-control-md text-uppercase @error('peringkatPengajian') is-invalid @enderror"
                                                value="{{ $maklumatPengajian->peringkatPengajian }}"
                                                wire:model='peringkatPengajian' readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">22. Kaedah
                                            Pengajian</label>
                                        <div class="align-middle col-sm-3">
                                            {{-- <select name="kaedahPengajian" id="" class="form-control"
                                                wire:model='kaedahPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Sepenuh Masa">Sepenuh Masa</option>
                                                <option value="Separuh Masa">Separuh Masa</option>
                                            </select> --}}
                                            <input type="text" name="" id="" class="form-control text-uppercase"
                                                value="{{ $maklumatPengajian->kaedahPengajian }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">23. Mod
                                            Pengajian</label>
                                        <div class="col-sm-3">
                                            {{-- <select name="modPengajian" id="" class="form-control"
                                                wire:model='modPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Penyelidikan">Penyelidikan</option>
                                                <option value="Kerja Kursus">Kerja Kursus</option>
                                            </select> --}}
                                            <input type="text" name="" id="" class="form-control text-uppercase"
                                                value="{{ $maklumatPengajian->modPengajian }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">24. Nama
                                            Institusi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namaInstitusi" id="namaInstitusi"
                                                class="form-control form-control-md text-uppercase" list="universities"
                                                wire:model='namaInstitusi'
                                                value="{{ $maklumatPengajian->namaInstitusi }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">25. Tempat
                                            Pengajian</label>
                                        <div class="col-sm-3">
                                            {{-- <select name="tempatPengajian" id="" class="form-control"
                                                wire:model='tempatPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Dalam Negara">Dalam Negara</option>
                                                <option value="Luar Negara">Luar Negara</option>
                                            </select> --}}
                                            <input type="text" name="" id="" class="form-control text-uppercase"
                                                value="{{ $maklumatPengajian->tempatPengajian }}" readonly>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">26. Tempoh
                                            Pengajian</label>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <input type="text" name="tempohPengajianTahun"
                                                    class="form-control form-control-md text-uppercase"
                                                    wire:model='tempohPengajianTahun'
                                                    value="{{ $maklumatPengajian->tempohPengajianTahun }}" readonly>
                                                <span class="input-group-text" id="basic-addon2">Tahun</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <input type="text" name="tempohPengajianBulan"
                                                    class="form-control form-control-md text-uppercase"
                                                    wire:model='tempohPengajianBulan'
                                                    value="{{ $maklumatPengajian->tempohPengajianBulan }}" readonly>
                                                <span class="input-group-text" id="basic-addon2"
                                                    wire:model='tempohPengajianBulan'>Bulan</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">27. Tarikh
                                            Pengajian</label>
                                        <div class="col-sm-3">
                                            <input type="date" name="mulaPengajian" id=""
                                                class="form-control form-control-md text-uppercase"
                                                wire:model='mulaPengajian'
                                                value="{{ $maklumatPengajian->MulaPengajian }}" readonly>
                                        </div>
                                        <label for=""
                                            class="col-sm-1 text-center col-form-label col-form-label-md">hingga</label>
                                        <div class="col-sm-3">
                                            <input type="date" name="tamatPengajian" id=""
                                                class="form-control form-control-md text-uppercase"
                                                wire:model='tamatPengajian'
                                                value="{{ $maklumatPengajian->TamatPengajian }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#maklumatKursus" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="maklumatKursus">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen E - Maklumat Kursus/Latihan yang Pernah
                        Diikuti
                        dan Pembiayaan yang Pernah Diterima</h6>
                </a>

                <div class="collapse show" id="maklumatKursus">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-12 col-form-label col-form-label-md">28.
                                        Kursus/Latihan
                                        Jangka Sederhana yang pernah diikuti dalam tempoh 2 tahun yang
                                        lepas.</label>
                                </div>
                                @foreach ($maklumatKursuses as $maklumatKursus)
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <input type="text" name="namaKursus[]" id="" wire:model='namaKursus1'
                                                class="form-control form-control-md text-uppercase"
                                                placeholder="Nama Kursus" value="{{ $maklumatKursus->namaKursus }}"
                                                readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="penganjur[]" id=""
                                                class="form-control form-control-md text-uppercase" placeholder="Penganjur"
                                                wire:model='penganjur1' value="{{ $maklumatKursus->penganjur }}"
                                                readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="tempat[]" id=""
                                                class="form-control form-control-md text-uppercase" placeholder="Tempat"
                                                wire:model='tempat1' value="{{ $maklumatKursus->tempat }}" readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="tempoh[]" id=""
                                                class="form-control form-control-md text-uppercase" placeholder="Tempoh"
                                                wire:model='tempoh1' value="{{ $maklumatKursus->tempoh }}" readonly>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row mb-3">
                                    <label for="" class="col-sm-12 col-form-label col-form-label-md">29. Pembiayaan
                                        Kursus /
                                        Latihan yang pernah diterima</label>
                                </div>
                                @foreach ($pembiayaanKursuses as $pembiayaanKursus)
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <input type="text" name="pembiayaan[]" id=""
                                                class="form-control form-control-md text-uppercase"
                                                placeholder="Pembiayaan" wire:model='pembiaya1'
                                                value="{{ $pembiayaanKursus->pembiaya }}" readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="tempoh[]" id=""
                                                class="form-control form-control-md text-uppercase" placeholder="Tempoh"
                                                wire:model='tempoh1' value="{{ $pembiayaanKursus->tempoh }}" readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="kursus[]" id=""
                                                class="form-control form-control-md text-uppercase"
                                                placeholder="Kursus/Latihan" wire:model='kursus1'
                                                value="{{ $pembiayaanKursus->kursus }}" readonly>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="tempohKontrak[]" id=""
                                                class="form-control form-control-md text-uppercase"
                                                placeholder="Tempoh Kontrak" wire:model='tempohKontrak1'
                                                value="{{ $pembiayaanKursus->tempohKontrak }}" readonly>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#pengakuanPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="pengakuanPemohon">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen F - Pengakuan Pemohon</h6>
                </a>
                <div class="collapse show" id="pengakuanPemohon">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <label for="istiharHarta" class="col-sm-11 col-form-label col-form-label-md">30.
                                        a.
                                        Saya telah
                                        mengisytiharkan harta.</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="isytiharHarta" id="istiharHarta"
                                            class="float-right" value="ya" checked>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="sah" class="col-sm-11 col-form-label col-form-label-md">b. Saya
                                        mengaku
                                        bahawa
                                        semua keterangan di atas adalah benar. Sekiranya kenyataan yang diberikan
                                        tidak
                                        benar,
                                        Jawatankuasa Perancangan dan Penyelarasan Latihan (JKPPL) JUPEM berhak
                                        membatalkan
                                        permohonan ini.</label>
                                    <div class="col-sm-1">
                                        <input type="checkbox" name="sah" id="sah" class="float-right" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <label for="" class="col-sm-2 col-form-label col-form-label-md">Tarikh</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="tarikhSah" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pengakuan->created_at }}" wire:model='tarikhSah'>
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">Tandatangan
                                        Pemohon</label>
                                    <div class="col-sm-3">
                                        <input type="file" name="tandatanganPemohon" id=""
                                            class="form-control form-control-md text-uppercase"
                                            wire:model='tandatanganPemohon'
                                            accept="image/png, image/jpg, image/jpeg, image/tif">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#ulasanTatatertib" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="ulasanTatatertib">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen G - Pengesahan Ketua Jabatan/Bahagian
                    </h6>
                    <small class="text-muted">31. a.
                        Tindakan Tatatertib.</small>
                </a>
                <div class="collapse show" id="ulasanTatatertib">
                    <div class="card-body">

                            <div class="row d-none">
                                <div class="col-sm-12">
                                    <div class="row">
                                        @csrf
                                    </div>
                                    <div class="row">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">Permohonan
                                            ID</label>
                                        <div class="col-sm-3">
                                            <input type="text" name="permohonanID" id=""
                                                class="form-control form-control-md text-uppercase"
                                                value="{{ $pengakuan->id }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">Pemohon pernah
                                            dikenakan
                                            tindakan?</label>
                                        <div class="col-sm-2">
                                            <select name="tindakan" id="tindakan"
                                                class="form-control text-uppercase form-control-md">
                                                <option value="">Sila Pilih</option>
                                                <option value="ADA">ADA</option>
                                                <option value="TIADA">TIADA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">
                                            Jenis Tindakan
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" name="jenisTindakan" id=""
                                                class="form-control form-control-md">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">
                                            Tahun
                                        </label>
                                        <div class="col-sm-3">
                                            <input type="text" name="tahunTindakan" id=""
                                                class="form-control form-control-md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <textarea name="ulasan" id="" cols="30" rows="10" class="form-control">Sila masukkan ulasan</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-sm btn-primary float-right">Simpan
                                                Ulasan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
