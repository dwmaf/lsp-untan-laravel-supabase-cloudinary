@extends('layouts.adminnav')
@section('adminchild')
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Tambah Unit Kompetensi Baru
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/unitkompetensi" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" class="@error('kode_unit') is-invalid @enderror" name="kode_unit" id="kode_unit" type="text" required autofocus />
                @error('kode_unit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="kode_unit">Kode Unit</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" class="@error('judul_unit') is-invalid @enderror" name="judul_unit" id="judul_unit" type="text" required autofocus />
                @error('judul_unit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="judul_unit">Judul Unit</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="skema_id" id="" required>
                    @foreach ($skemas as $skema)
                        <option value="{{ $skema->id }}">{{ $skema->nama_skema }}</option>
                    @endforeach
                </select>
                <label for="nama_skema">Skema </label>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection