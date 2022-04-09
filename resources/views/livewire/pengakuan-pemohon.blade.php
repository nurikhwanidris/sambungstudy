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
                <a href="#pengakuanPemohon" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="pengakuanPemohon">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen F - Pengakuan Pemohon</h6>
                </a>
                <form wire:submit.prevent="pengakuanPemohon">
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
                                                class="float-right" value="ya" wire:model='istiharHarta'>
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
                                            <input type="checkbox" name="sah" id="sah" class="float-right"
                                                value="ya">
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
                                                class="form-control form-control-md" value="" wire:model='tarikhSah'>
                                        </div>
                                        <label for="" class="col-sm-3 col-form-label col-form-label-md">Tandatangan
                                            Pemohon</label>
                                        <div class="col-sm-3">
                                            <input type="file" name="tandatanganPemohon" id=""
                                                class="form-control form-control-md" wire:model='tandatanganPemohon'
                                                accept="image/png, image/jpg, image/jpeg, image/tif">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <button type="submit"
                                                class="btn btn-primary btn-sm float-right">Submit</button>
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
