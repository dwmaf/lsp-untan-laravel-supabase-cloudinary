@extends('layouts.adminnav')
@section('adminchild')
    <a href="/admin/berita" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar berita</a>
    <a class=" btn btn-warning" href="/admin/jadwal/{{ $berita->id }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
    <form action="/admin/jadwal/{{ $berita->id }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class=" btn btn-danger border-0" onclick="return confirm('Hapus data {{ $berita->judul_berita }}?')"><i
                class="fa-solid fa-trash-can"></i></button>
    </form>
    <div class="container-fluid px-4 mt-4" style="max-width: 800px;">
        <div class="card">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $berita->judul_berita }}</h5>
                {{-- <h6 class="">{{ $berita->created_at }}</h6> --}}
                <p>{!! $berita->konten_berita !!}</p>
            </div>
        </div>
    </div>
@endsection
