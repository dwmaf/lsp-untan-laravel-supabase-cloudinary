@extends('layouts.navbar')
@section('child')
<div class="section-header pt-4">
    <h2>
        Berita
    </h2>
</div>
<div class="container-fluid px-4 mt-4" >
    <div class="row">
        @foreach ($beritas as $berita)
        <div class="col-md-4">
            <div class="card jadwal">
                {{-- <img src="{{ cloudinary()->getUrl($berita->image_public_id)}}" alt="Berita Image" class="card-img-top"> --}}
                <img src="{{ asset('storage/'.$berita->link_foto) }}" alt="no-image" class="card-img-top ">
                <div class="card-body jadwal-body">
                    <h5 class="card-title fw-bolder">{{ $berita->judul_berita }}</h5>
                    <h6 class="">{{ \Carbon\Carbon::parse($berita->created_at)->format('j M Y') }}</h6>
                    <p>{{ $berita->excerpt }}</p>
                    <a href="/berita/{{ $berita->id }}">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection