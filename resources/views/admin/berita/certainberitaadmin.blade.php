@extends('layouts.adminnav')
@section('adminchild')
    <a href="/admin/berita" class="btn btn-success "><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar berita</a>
    <a class=" btn btn-warning" href="/admin/berita/{{ $berita[0]['id'] }}/edit"><i class="fa-solid fa-pen-to-square"></i></a>
    <form action="/admin/berita/{{ $berita[0]['id'] }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button class=" btn btn-danger border-0" onclick="return confirm('Hapus data {{ $berita[0]['judul_berita'] }}?')"><i
                class="fa-solid fa-trash-can"></i></button>
    </form>
    <div class="container-fluid px-4 mt-4" style="max-width: 800px;">
        <div class="card">
            <img src="{{ asset('storage/'.$berita[0]['link_foto']) }}" alt="no-image">
            <div class="card-body">
                <h5 class="card-title">{{ $berita[0]['judul_berita'] }}</h5>
                {{-- <h6 class="">{{ $berita->created_at }}</h6> --}}
                <p>{!! $berita[0]['konten_berita'] !!}</p>
            </div>
        </div>
    </div>
@endsection
