<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <a href="#maklumatPerkhidmatanPemohon" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="maklumatPerkhidmatanPemohon">
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
                                        <input type="text" name="klasifikasiPerkhidmatan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">10. Skim
                                        Perkhidmatan</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="skimPerkhidmatan" id=""
                                            class="form-control form-control-md text-uppercase" value="">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">11. Gred
                                        Jawatan</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="gredJawatan" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->Gred }}" readonly>
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md text-right">12. Gaji
                                        Pokok</label>
                                    <div class="col-sm-3 input-group">
                                        <span class="input-group-text">RM</span>
                                        <input type="text" name="gajiPokok" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-sm">13. JUPEM Negeri /
                                        Bahagian</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="jupemBahagian" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">14. Alamat Tempat
                                        Bertugas</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="alamatTempatBertugas1" id=""
                                            class="form-control form-control-md text-uppercase mb-1"
                                            placeholder="Jabatan Ukur Dan Pemetaan Malaysia">
                                        <input type="text" name="alamatTempatBertugas2" id=""
                                            class="form-control form-control-md text-uppercase mb-1"
                                            placeholder="Wisma JUPEM, Jalan Sultan Yahya Petra">
                                        <input type="text" name="alamatTempatBertugas3" id=""
                                            class="form-control form-control-md text-uppercase"
                                            placeholder="50578 Kuala Lumpur">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form label-md">15. No Telefon
                                        Bimbit</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="telefonBimbit" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form label-sm">15. No Telefon
                                        Pejabat</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="telefonPejabat" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">16. Emel
                                        Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="email" name="emelJabatan" id=""
                                            class="form-control form-control-md text-uppercase"
                                            value="{{ $pegawai->Email }}" readonly>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">17. Tarikh
                                        Lantikan</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="tarikhLantikan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">18. Tarikh
                                        Disahkan</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="tarikhDisahkan" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-12 col-form-label col-form-label-md">19. <u>Lantikan
                                            pertama
                                            ke
                                            <b class="fw-bold">PERKHIDMATAN
                                                KERAJAAN</b> jika selain dari no. 9</u></label>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">a. Skim
                                        Perkhidmatan</label>
                                    <div class="col-sm-3">
                                        <input type="text" name="skimPerkhidmatan2" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                    <label for="" class="col-sm-3 col-form-label col-form-label-md">b. Tarikh
                                        Lantikan</label>
                                    <div class="col-sm-3">
                                        <input type="date" name="tarikhLantikan2" id=""
                                            class="form-control form-control-md text-uppercase">
                                    </div>
                                </div>
                                <div class="row mt-3">
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
