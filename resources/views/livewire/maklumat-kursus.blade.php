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
                                <form wire:submit.prevent="maklumatKursus">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <input type="text" name="" id="" wire:model='namaKursus.0'
                                                class="form-control text-uppercase form-control-sm"
                                                placeholder="Nama Kursus">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="" id=""
                                                class="form-control text-uppercase form-control-sm"
                                                placeholder="Penganjur" wire:model='penganjur.0'>
                                            @error('penganjur.0')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="" id=""
                                                class="form-control text-uppercase form-control-sm" placeholder="Tempat"
                                                wire:model='tempat.0'>
                                            @error('tempat.0')
                                                <span class="text-danger error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-sm-2">
                                            <input type="text" name="" id=""
                                                class="form-control text-uppercase form-control-sm" placeholder="Tempoh"
                                                wire:model='tempoh.0'>
                                            @error('tempoh.0')
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
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <input type="text" name="" id=""
                                                    wire:model='namaKursus.{{ $value }}'
                                                    class="form-control text-uppercase form-control-sm"
                                                    placeholder="Nama Kursus">
                                                @error('namaKursus.' . $value)
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="" id=""
                                                    class="form-control text-uppercase form-control-sm"
                                                    placeholder="Penganjur" wire:model='penganjur.{{ $value }}'>
                                                @error('penganjur.' . $value)
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="text" name="" id=""
                                                    class="form-control text-uppercase form-control-sm"
                                                    placeholder="Tempat" wire:model='tempat.{{ $value }}'>
                                                @error('tempat.' . $value)
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-sm-2">
                                                <input type="text" name="" id=""
                                                    class="form-control text-uppercase form-control-sm"
                                                    placeholder="Tempoh" wire:model='tempoh.{{ $value }}'>
                                                @error('tempoh.' . $value)
                                                    <span class="text-danger error">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-1">
                                                <button class="btn btn-danger btn-sm"
                                                    wire:click.prevent="remove({{ $key }})"><i
                                                        class="fas fa-minus"></i></button>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="row mt-3">
                                        <div class="col">
                                            <button type="submit"
                                                class="btn btn-primary btn-sm float-right">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @livewire('maklumat-pembiayaan-kursus')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
