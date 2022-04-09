@extends('layouts.main')

@section('content')
<div class="row">
    {{-- Maklumat Diri Pemohon --}}
    <div class="col-lg-6 pl-0">
        <div class="card shadow mb-3">
            <a href="#maklumatDiriPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="false" aria-controls="maklumatDiriPemohon">
                <h6 class="m-0 font-weight-bold text-primary">Seksyen A - Maklumat Diri Pemohon</h6>
            </a>
            <div class="collapse" id="maklumatDiriPemohon">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-md">1. Nama
                                    Penuh</label>
                                <div class="col-sm-9">
                                    <input type="text" name="namaPenuh"
                                        class="form-control form-control-md text-capitalize" id="colFormLabelSm"
                                        placeholder="Saddiq bin Sigaraga">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">2. No Kad
                                    Pengenalan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="ic" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">3. Tarikh Lahir</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tarikhLahir" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">4. Umur</label>
                                <div class="col-sm-3">
                                    <input type="number" name="umur" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">5. Negeri Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="negeriLahir" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">6. Taraf
                                    Perkahwinan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="statusPerkahwinan" id=""
                                        class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label md">7. Jantina</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jantina" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">8. Kecacatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="kecacatan" id="" class="form-control form-control-md">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Maklumat Perkhidmatan Pemohon --}}
    <div class="col-lg-6 pr-0">
        <div class="card shadow mb-4">
            <a href="#maklumatPerkhidmatanPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="maklumatPerkhidmatanPemohon">
                <h6 class="m-0 font-weight-bold text-primary">Seksyen B - Maklumat Perkhidmatan Pemohon</h6>
            </a>
            <div class="collapse" id="maklumatPerkhidmatanPemohon">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">9. Klasifikasi
                                    Perkhidmatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="klasifikasiPerkhidmatan" id=""
                                        class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">10. Skim
                                    Perkhidmatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="skimPerkhidmatan" id=""
                                        class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">11. Gred Jawatan</label>
                                <div class="col-sm-3">
                                    <input type="text" name="gredJawatan" id="" class="form-control form-control-md">
                                </div>
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">12. Gaji Pokok</label>
                                <div class="col-sm-3 input-group">
                                    <span class="input-group-text">RM</span>
                                    <input type="text" name="gajiPokok" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-sm">13. JUPEM Negeri /
                                    Bahagian</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jupemBahagian" id="" class="form-control form-control-md">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">14. Alamat Tempat
                                    Bertugas</label>
                                <div class="col-sm-9">
                                    <input type="text" name="alamatTempatBertugas1" id=""
                                        class="form-control form-control-md mb-1"
                                        placeholder="Jabatan Ukur Dan Pemetaan Malaysia">
                                    <input type="text" name="alamatTempatBertugas2" id=""
                                        class="form-control form-control-md mb-1"
                                        placeholder="Wisma JUPEM, Jalan Sultan Yahya Petra">
                                    <input type="text" name="alamatTempatBertugas3" id=""
                                        class="form-control form-control-md" placeholder="50578 Kuala Lumpur">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form label-md">15. No Telefon
                                    Bimbit</label>
                                <div class="col-sm-3">
                                    <input type="text" name="telefonBimbit" id="" class="form-control form-control-md">
                                </div>
                                <label for="" class="col-sm-3 col-form-label col-form label-sm">15. No Telefon
                                    Pejabat</label>
                                <div class="col-sm-3">
                                    <input type="text" name="telefonPejabat" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">16. Emel Jabatan</label>
                                <div class="col-sm-9">
                                    <input type="email" name="emelJabatan" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">17. Tarikh
                                    Lantikan</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tarikhLantikan" id="" class="form-control form-control-md">
                                </div>
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">18. Tarikh
                                    Disahkan</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tarikhDisahkan" id="" class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-sm-12 col-form-label col-form-label-md">19. <u>Lantikan pertama
                                        ke
                                        <b class="fw-bold">PERKHIDMATAN
                                            KERAJAAN</b> jika selain dari</u></label>
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">a. Skim
                                    Perkhidmatan</label>
                                <div class="col-sm-3">
                                    <input type="text" name="skimPerkhidmatan2" id=""
                                        class="form-control form-control-md">
                                </div>
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">b. Tarikh
                                    Lantikan</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tarikhLantikan2" id=""
                                        class="form-control form-control-md">
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
    {{-- Maklumat Akademik --}}
    <div class="col-lg-6 pl-0">
        <div class="card shadow mb-4">
            <a href="#maklumatAkademik" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="maklumatAkademik">
                <h6 class="m-0 font-weight-bold text-primary">Seksyen C - Maklumat Akademik</h6>
            </a>
            <div class="collapse" id="maklumatAkademik">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row mb-3">
                                <span for="" class="text-muted col-sm-12 col-form-label col-form-label-md">19.
                                    Kelayakan</span>
                                <div class="col-sm-12">
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">a. Sijil</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="sijil" list="universities" id=""
                                                class="form-control form-control-md"
                                                placeholder="Bidang & Institusi/Universiti">
                                            <datalist id="universities">
                                                @foreach ($universities as $universiti)
                                                <option value="{{ $universiti->namaUniversiti }}">
                                                    @endforeach
                                            </datalist>
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="sijilCgpa" id=""
                                                class="form-control form-control-md" placeholder="Kelas/CGPA">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="sijilTahun" id=""
                                                class="form-control form-control-md" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">b.
                                            Diploma</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="diploma" list="universities" id=""
                                                class="form-control form-control-md"
                                                placeholder="Bidang & Institusi/Universiti">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="diplomaCgpa" id=""
                                                class="form-control form-control-md" placeholder="Kelas/CGPA">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="diplomaTahun" id=""
                                                class="form-control form-control-md" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">c. Sarjana
                                            Muda</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="sarjanaMuda" list="universities" id=""
                                                class="form-control form-control-md"
                                                placeholder="Bidang & Institusi/Universiti">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="sarjanaMudaCgpa" id=""
                                                class="form-control form-control-md" placeholder="Kelas/CGPA">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="sarjanaMudaTahun" id=""
                                                class="form-control form-control-md" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">d. Dip. Lepasan
                                            Ijazah</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="lepasanIjazah" list="universities" id=""
                                                class="form-control form-control-md"
                                                placeholder="Bidang & Institusi/Universiti">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="lepasanIjazahCgpa" id=""
                                                class="form-control form-control-md" placeholder="Kelas/CGPA">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="lepasanIjazahTahun" id=""
                                                class="form-control form-control-md" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">e.
                                            Sarjana</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="sarjana" list="universities" id=""
                                                class="form-control form-control-md"
                                                placeholder="Bidang & Institusi/Universiti">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="sarjanaCgpa" id=""
                                                class="form-control form-control-md" placeholder="Kelas/CGPA">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="sarjanaTahun" id=""
                                                class="form-control form-control-md" placeholder="Tahun">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <label for="" class="col-sm-2 col-form-label col-form-label-sm">f. Ph.D</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="phd" list="universities" id=""
                                                class="form-control form-control-md"
                                                placeholder="Bidang & Institusi/Universiti">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="phdCgpa" id="" class="form-control form-control-md"
                                                placeholder="Kelas/CGPA">
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="phdTahun" id=""
                                                class="form-control form-control-md" placeholder="Tahun">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 pr-0">
        <div class="card shadow mb-4">
            <a href="#maklumatPengajian" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="maklumatPengajian">
                <h6 class="m-0 font-weight-bold text-primary">Seksyen D - Maklumat Perkhidmatan Pemohon</h6>
            </a>
            <div class="collapse" id="maklumatPengajian">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">20. Bidang
                                    Pengajian</label>
                                <div class="col-sm-9">
                                    <input type="text" name="bidangPengajian" id=""
                                        class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">21. Peringkat
                                    Pengajian</label>
                                <div class="col-sm-9">
                                    <input type="text" name="peringkatPengajian" id=""
                                        class="form-control form-control-md">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">22. Kaedah
                                    Pengajian</label>
                                <div class="align-middle col-sm-9">
                                    <input type="radio" name="sepenuhMasa" value="Sepenuh Masa">
                                    <label for="">Sepenuh Masa</label>
                                    <input type="radio" name="separuhMasa" value="Separuh Masa">
                                    <label for="">Separuh Masa</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">23. Mod
                                    Pengajian</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="penyelidikan" id="" value="Penyelidikan">
                                    <label for="">Penyelidikan</label>
                                    <input type="radio" name="kerjaKhusus" id="" value="Kerja Khusus">
                                    <label for="">Kerja Khusus</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">24. Nama
                                    Institusi</label>
                                <div class="col-sm-9">
                                    <input type="text" name="namaInstitusi" id="namaInstitusi"
                                        class="form-control form-control-md" list="universities">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">25. Tempat
                                    Pengajian</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="dalamNegara" id="" value="Dalam Negara">
                                    <label for="">Dalam Negara</label>
                                    <input type="radio" name="luarNegara" id="" value="Luar Negara">
                                    <label for="">Luar Negara</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">26. Tempoh
                                    Pengajian</label>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" name="tempohPengajianTahun"
                                            class="form-control form-control-md">
                                        <span class="input-group-text" id="basic-addon2">Tahun</span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" name="tempohPengajianBulan"
                                            class="form-control form-control-md">
                                        <span class="input-group-text" id="basic-addon2">Bulan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">27. Tarikh
                                    Pengajian</label>
                                <div class="col-sm-3">
                                    <input type="date" name="mulaPengajian" id="" class="form-control form-control-md">
                                </div>
                                <label for="" class="col-sm-2 col-form-label col-form-label-md">hingga</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tamatPengajian" id="" class="form-control form-control-md">
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
    <div class="col-lg-6 pl-0">
        <div class="card shadow mb-4">
            <a href="#maklumatKursus" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="maklumatKursus">
                <h6 class="m-0 font-weight-bold text-primary">Seksyen E - Maklumat Kursus/Latihan yang Pernah Diikuti
                    dan Pembiayaan yang Pernah Diterima</h6>
            </a>
            <div class="collapse" id="maklumatKursus">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row mb-2">
                                <label for="" class="col-sm-12 col-form-label col-form-label-md">28. Kursus/Latihan
                                    Jangka Sederhana yang pernah diikuti dalam tempoh 2 tahun yang lepas.</label>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="namaKursus[]" id="" class="form-control form-control-md"
                                        placeholder="Nama Kursus">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="penganjur[]" id="" class="form-control form-control-md"
                                        placeholder="Penganjur">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempat[]" id="" class="form-control form-control-md"
                                        placeholder="Tempat">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row mb-2">
                                <label for="" class="col-sm-12 col-form-label col-form-label-md">29. Pembiayaan Kursus /
                                    Latihan yang pernah diterima</label>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-sm-3">
                                    <input type="text" name="pembiayaan[]" id="" class="form-control form-control-md"
                                        placeholder="Pembiayaan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempoh[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="kursus[]" id="" class="form-control form-control-md"
                                        placeholder="Kursus/Latihan">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="tempohKontrak[]" id="" class="form-control form-control-md"
                                        placeholder="Tempoh Kontrak">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 pr-0">
        <div class="card shadow mb-4">
            <a href="#pengakuanPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                aria-expanded="true" aria-controls="pengakuanPemohon">
                <h6 class="m-0 font-weight-bold text-primary">Seksyen F - Pengakuan Pemohon</h6>
            </a>
            <div class="collapse" id="pengakuanPemohon">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <label for="" class="col-sm-11 col-form-label col-form-label-md">30. a. Saya telah
                                    mengisytiharkan harta.</label>
                                <div class="col-sm-1">
                                    <input type="checkbox" name="isytiharHarta" id="" class="" value="ya">
                                </div>
                            </div>
                            <div class="row">
                                <label for="" class="col-sm-11 col-form-label col-form-label-md">b. Saya mengaku bahawa
                                    semua keterangan di atas adalah benar. Sekiranya kenyataan yang diberikan tidak
                                    benar,
                                    Jawatankuasa Perancangan dan Penyelarasan Latihan (JKPPL) JUPEM berhak membatalkan
                                    permohonan ini.</label>
                                <div class="col-sm-1">
                                    <input type="checkbox" name="isytiharHarta" id="" class="" value="ya">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <label for="" class="col-sm-2 col-form-label col-form-label-md">Tarikh</label>
                                <div class="col-sm-3">
                                    <input type="date" name="tarikhSah" id="" class="form-control form-control-md">
                                </div>
                                <label for="" class="col-sm-3 col-form-label col-form-label-md">Tandatangan
                                    Pemohon</label>
                                <div class="col-sm-3">
                                    <input type="file" name="tandatanganPemohon" id=""
                                        class="form-control form-control-md">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary float-right">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- ubah ni nanti ikut keperluan --}}
<div class="mb-3 p-2">
    <div class="col-lg-6">
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