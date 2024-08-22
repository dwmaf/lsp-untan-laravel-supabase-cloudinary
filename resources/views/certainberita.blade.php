@extends('layouts.navbar')
@section('child')
<div class="container-fluid px-4 mt-4" style="max-width: 800px;">
    <div class="card">
        <img src="" alt="">
        <div class="card-body">
            {{-- <h5 class="card-title">{{ $berita }}</h5> --}}
            <h5 class="card-title">{{ $berita[0]['judul_berita'] }}</h5>
            <h6 class="">{{ $berita[0]['created_at'] }}</h6>
            <p>{{ $berita[0]['konten_berita'] }}</p>
        </div>
    </div>
</div>
@endsection