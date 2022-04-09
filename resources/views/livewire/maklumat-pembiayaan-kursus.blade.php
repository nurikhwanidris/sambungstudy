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
    <form wire:submit.prevent="maklumatKursus">
        <div class="row">
            <div class="col-sm-12">
                <div class="row mb-3">
                    <label for="" class="col-sm-12 col-form-label col-form-label-md">29. Pembiayaan
                        Kursus /
                        Latihan yang pernah diterima</label>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-3">
                        <input type="text" name="pembiayaan[]" id="" class="form-control text-uppercase form-control-sm"
                            placeholder="Pembiayaan" wire:model='pembiaya.0'>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="tempoh[]" id="" class="form-control text-uppercase form-control-sm"
                            placeholder="Tempoh" wire:model='tempoh.0'>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="kursus[]" id="" class="form-control text-uppercase form-control-sm"
                            placeholder="Kursus/Latihan" wire:model='kursus.0'>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="tempohKontrak[]" id=""
                            class="form-control text-uppercase form-control-sm" placeholder="Tempoh Kontrak"
                            wire:model='tempohKontrak.0'>
                    </div>
                    <div class="col-sm-1">
                        <button class="btn text-white btn-info btn-sm">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                @foreach ($inputs as $key => $value)
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <input type="text" name="pembiayaan[]" id=""
                                class="form-control text-uppercase form-control-sm" placeholder="Pembiayaan"
                                wire:model='pembiaya.{{ $value }}'>
                            @error('pembiaya.' . $value)
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="tempoh[]" id="" class="form-control text-uppercase form-control-sm"
                                placeholder="Tempoh" wire:model='tempoh.{{ $value }}'>
                            @error('tempoh.' . $value)
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <input type="text" name="kursus[]" id="" class="form-control text-uppercase form-control-sm"
                                placeholder="Kursus/Latihan" wire:model='kursus.{{ $value }}'>
                            @error('kursus.' . $value)
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="tempohKontrak[]" id=""
                                class="form-control text-uppercase form-control-sm" placeholder="Tempoh Kontrak"
                                wire:model='tempohKontrak.{{ $value }}'>
                            @error('tempohKontrak.' . $value)
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-1">
                            <button class="btn text-white btn-danger btn-sm">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
                <div class="row mt-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary btn-sm float-right">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
