@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/skema" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar skema</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Tambah Skema baru
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/skema" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input  type="text" class="form-control @error('nama_skema') is-invalid @enderror" name="nama_skema" id="nama_skema" placeholder="isi nama skema" autofocus required value="{{ old("nama_skema") }}">
                @error('nama_skema')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="nama_asesor">Nama Skema</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>

    {{-- <div class="px-5">
        <h1 class="text-3xl py-4">Tambah skema baru</h1>
        <a href="/admin/skema" class="text-cyan-700 hover:underline py-4">Kembali ke daftar skema</a>
        <form method="POST" action="/admin/skema" class="flex-col flex max-w-80">
            @csrf
            <label for="nama_skema">Skema</label>
            <input type="text" class="@error('nama_skema') @enderror" name="nama_skema" id="nama_skema" placeholder="isi nama skema" autofocus required>
            @error('nama_skema')
                <div class="">{{ $message }}</div>
            @enderror
            <button type="submit" class="text-cyan-700">Tambah</button>
        </form>
    </div> --}}
@endsection