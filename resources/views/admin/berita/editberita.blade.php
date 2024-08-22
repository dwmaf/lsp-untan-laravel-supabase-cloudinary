@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/berita" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar berita</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Edit Berita
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/berita/{{ $asesor->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" name="judul_berita" id="judul_berita" type="text" value="{{ $berita->judul_berita }}"/>
                <label for="judul_berita">Judul Berita</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="konten_berita" id="konten_berita" type="text" value="{{ $berita->konten_berita }}"/>
                <label for="konten_berita">Judul Berita</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>


    
@endsection