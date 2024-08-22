@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/asesor" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar asesor</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Tambah Asesor baru
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/asesor" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" class="@error('nama_asesor') is-invalid @enderror" name="nama_asesor" id="nama_asesor" type="text" required autofocus />
                @error('nama_asesor')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="nama_asesor">Nama Asesor</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="skema_id" id="" required>
                    @foreach ($skemas as $skema)
                        <option value="{{ $skema->id }}">{{ $skema->nama_skema }}</option>
                    @endforeach
                </select>
                <label for="nama_skema">Skema yang diasesi</label>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>
@endsection