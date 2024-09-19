@extends('layouts.navbar')
@section('child')
<div class="container-fluid px-4 mt-4" style="max-width: 800px;">
    <div class="card">
        <img src="{{ cloudinary()->getUrl($berita[0]['image_public_id'])}}" alt="Berita Image" class="card-img-top">
        {{-- <img src="{{ asset('storage/'.$berita[0]['link_foto']) }}" alt="no-image"> --}}
        <div class="card-body">
            <h5 class="card-title">{{ $berita[0]['judul_berita'] }}</h5>
            <h6 class="">{{ $berita[0]['created_at'] }}</h6>
            <p>{!! $berita[0]['konten_berita'] !!}</p>
        </div>
    </div>
</div>
@endsection