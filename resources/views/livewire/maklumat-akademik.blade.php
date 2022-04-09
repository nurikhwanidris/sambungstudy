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
                <a href="#maklumatAkademik" class="d-block card-header py-3" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="maklumatAkademik">
                    <h6 class="m-0 font-weight-bold text-primary">Seksyen C - Maklumat Akademik</h6>
                </a>
                <form wire:submit.prevent="maklumatAkademik">
                    <div class="collapse show" id="maklumatAkademik">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row mb-3">
                                        <span for="" class="text-muted col-sm-12 col-form-label col-form-label-md">19.
                                            Kelayakan</span>
                                        <div class="col-sm-12">
                                            <div class="row mb-3">
                                                <div class="col-sm-2">
                                                    <input type="text" name="jenisKelayakan" id=""
                                                        class="form-control text-uppercase form-control-sm"
                                                        placeholder="Jenis Kelayakan" wire:model="jenisKelayakan.0">
                                                    @error('jenisKelayakan.0')
                                                        <span class="text-danger error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="bidang" id=""
                                                        class="form-control text-uppercase form-control-sm"
                                                        placeholder="Bidang" wire:model="bidang.0">
                                                    @error('bidang.0')
                                                        <span class="text-danger error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-3">
                                                    <input type="text" name="universiti" list="universities" id=""
                                                        class="form-control text-uppercase form-control-sm"
                                                        placeholder="Istitusi/Universiti" wire:model="universiti.0">
                                                </div>
                                                <div class="col-sm-2">
                                                    <input type="text" name="cgpa" id=""
                                                        class="form-control text-uppercase form-control-sm"
                                                        placeholder="Kelas/CGPA" wire:model="cgpa.0">
                                                    @error('cgpa.0')
                                                        <span class="text-danger error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" name="tahun" id=""
                                                        class="form-control text-uppercase form-control-sm"
                                                        placeholder="Tahun" wire:model="tahun.0">
                                                    @error('tahun.0')
                                                        <span class="text-danger error">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="col-sm-1">
                                                    <button class="btn text-white btn-info btn-sm"
                                                        wire:click.prevent="add({{ $i }})">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            @foreach ($inputs as $key => $value)
                                                <div class=" add-input">
                                                    <div class="row mb-3">
                                                        <div class="col-sm-2">
                                                            <input type="text" name="jenisKelayakan" id=""
                                                                class="form-control text-uppercase form-control-sm"
                                                                placeholder="Jenis Kelayakan"
                                                                wire:model="jenisKelayakan.{{ $value }}">
                                                            @error('jenisKelayakan.' . $value)
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="bidang" id=""
                                                                class="form-control text-uppercase form-control-sm"
                                                                placeholder="Bidang"
                                                                wire:model="bidang.{{ $value }}">
                                                            @error('bidang.' . $value)
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="text" name="universiti" list="universities"
                                                                id=""
                                                                class="form-control text-uppercase form-control-sm"
                                                                placeholder="Istitusi/Universiti"
                                                                wire:model="universiti.{{ $value }}">
                                                            @error('universiti.' . $value)
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <input type="text" name="cgpa" id=""
                                                                class="form-control text-uppercase form-control-sm"
                                                                placeholder="Kelas/CGPA"
                                                                wire:model="cgpa.{{ $value }}">
                                                            @error('cgpa.' . $value)
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-sm-1">
                                                            <input type="text" name="tahun" id=""
                                                                class="form-control text-uppercase form-control-sm"
                                                                placeholder="Tahun"
                                                                wire:model="tahun.{{ $value }}">
                                                            @error('tahun.' . $value)
                                                                <span class="text-danger error">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-1">
                                                            <button class="btn btn-danger btn-sm"
                                                                wire:click.prevent="remove({{ $key }})"><i
                                                                    class="fas fa-minus"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <datalist id="universities">
                                                @foreach ($universities as $universiti)
                                                    <option value="{{ $universiti->namaUniversiti }}">
                                                @endforeach
                                            </datalist>
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
