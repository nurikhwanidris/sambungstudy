<div>
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
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
                                                value="{{ old('bidangPegajian') }}" wire:model='bidangPengajian'>
                                            @error('bidangPengajian')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">21. Peringkat
                                            Pengajian</label>
                                        <div class="col-sm-3">
                                            <select name="" id="" class="form-control text-uppercase"
                                                wire:model='peringkatPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Ijazah Sarjana Muda">Sarjana Muda</option>
                                                <option value="Ijazah Sarjana">Ijazah Sarjana</option>
                                                <option value="PhD">PhD</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">22. Kaedah
                                            Pengajian</label>
                                        <div class="align-middle col-sm-3">
                                            <select name="kaedahPengajian" id="" class="form-control text-uppercase"
                                                wire:model='kaedahPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Sepenuh Masa">Sepenuh Masa</option>
                                                <option value="Separuh Masa">Separuh Masa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">23. Mod
                                            Pengajian</label>
                                        <div class="col-sm-3">
                                            <select name="modPengajian" id="" class="form-control text-uppercase"
                                                wire:model='modPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Penyelidikan">Penyelidikan</option>
                                                <option value="Kerja Kursus">Kerja Kursus</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">24. Nama
                                            Institusi</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="namaInstitusi" id="namaInstitusi"
                                                class="form-control form-control-md text-uppercase" list="universities"
                                                wire:model='namaInstitusi'>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">25. Tempat
                                            Pengajian</label>
                                        <div class="col-sm-3">
                                            <select name="tempatPengajian" id="" class="form-control text-uppercase"
                                                wire:model='tempatPengajian'>
                                                <option value="">Sila Pilih</option>
                                                <option value="Dalam Negara">Dalam Negara</option>
                                                <option value="Luar Negara">Luar Negara</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">26. Tempoh
                                            Pengajian</label>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <input type="text" name="tempohPengajianTahun"
                                                    class="form-control form-control-md text-uppercase"
                                                    wire:model='tempohPengajianTahun'>
                                                <span class="input-group-text" id="basic-addon2">Tahun</span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="input-group">
                                                <input type="text" name="tempohPengajianBulan"
                                                    class="form-control form-control-md text-uppercase"
                                                    wire:model='tempohPengajianBulan'>
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
                                                wire:model='mulaPengajian'>
                                        </div>
                                        <label for=""
                                            class="col-sm-1 text-center col-form-label col-form-label-md">hingga</label>
                                        <div class="col-sm-3">
                                            <input type="date" name="tamatPengajian" id=""
                                                class="form-control form-control-md text-uppercase"
                                                wire:model='tamatPengajian'>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col">
                                            <button type="submit"
                                                class="btn btn-primary btn-sm float-right">Simpan</button>
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
</div>
