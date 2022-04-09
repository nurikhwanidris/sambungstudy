<div>
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
                                        <input type="text" name="namaPenuh"
                                            class="form-control form-control-md text-uppercase" id="colFormLabelSm"
                                            placeholder="Saddiq bin Sigaraga" value="{{ $pegawai->namaPegawai }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">2. No Kad
                                        Pengenalan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="ic" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->noKP }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">3. Tarikh
                                        Lahir</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="tarikhLahir" id="tarikhLahir"
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->tarikhLahir }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">4. Umur</label>
                                    <div class="col-sm-3">
                                        <input type="number" name="umur" id="umur"
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $umur }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">5. Negeri
                                        Lahir</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="negeriLahir" id=""
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
                                            class="form-control form-control-md text-uppercase">
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
                                        <input type="text" name="jantina" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="@if ($pegawai->Jantina == 1) Lelaki @else Perempuan @endif"
                                            readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">8. Kecacatan</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="kecacatan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
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
