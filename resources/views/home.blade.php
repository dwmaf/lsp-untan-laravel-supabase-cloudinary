@extends('layouts.navbar')
@section('child')
<header class="py-5 bg-image-full" style="background-image: url('/bg-lsp-untan-for-home (5).jpg')">
    <div class="text-center my-5">
        <img src="" alt="">
        <h1 class="text-white fs-3 fw-bolder">Lembaga Sertifikasi Profesi Pihak 1 UNTAN</h1>
        {{-- <p class="text-white-50 mb-0">BNSP No</p> --}}
    </div>
</header>
<div class="stat d-flex justify-content-center ">
    <div class="container row align-items-center justify-content-between py-5 px-5" style="max-width: 800px;">
        <div class="col-lg-4 mb-5 mb-lg-0 bg-white px-4 py-4 rounded shadow-sm">
            <i class="fa-solid fa-diagram-project fa-2x mb-3" style="color:#0d6efd"></i>
            <div class="statistik d-flex align-items-center mb-4">
                <h3 class=" h2 fw-bolder " style="color:#0a57ca">{{ $jumlah_skema }} </h3>
                <h4 class=" h4 fw-bolder mx-2">Skema</h4>
            </div>
            <p>Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
                dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p>
            <a href="/skema" class="readmore text-decoration-none">More <i class="fa-solid fa-arrow-right mx-2"></i></a>
            
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0 bg-white px-4 py-4 rounded shadow-sm">
            <i class="fa-solid fa-users-line fa-2x mb-3" style="color:#0d6efd"></i>
            <div class="statistik d-flex align-items-center mb-4">
                <h2 class="h2 fw-bolder" style="color:#0a57ca">{{ $jumlah_asesor }}</h2>
                <h4 class="h4 fw-bolder mx-2"> Asesor</h4>
            </div>
            <p>Asesor adalah seseorang yang ditugaskan oleh LSP dan memiliki
                kompetensi dan memenuhi persyaratan untuk melakukan uji kompetensi pada jenis dan kualifikasi tertentu.</p>
            <a href="/asesor" class="readmore text-decoration-none">More <i class="fa-solid fa-arrow-right mx-2"></i></a>
        </div>
    </div>
</div>

<div class="section-header ">
    <h2 class="fw-bolder">
        Jadwal Sertifikasi
    </h2>
</div>
<div class="row mx-3">
    <div class="col-md-4  my-2">
        <p class="bg-white rounded shadow-sm p-3">Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
            dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p>
    </div>
    <div class="col-md-4  my-2"><p class="bg-white rounded shadow-sm p-3">Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
        dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p></div>
    <div class="col-md-4  my-2"><p class="bg-white rounded shadow-sm p-3">Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
        dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p></div>
</div>

<div class="section-header mt-5 ">
    <h2 class="fw-bolder">
        Berita
    </h2>
</div>
<div class="row mx-3">
    <div class="col-md-4  my-2">
        <p class="bg-white rounded shadow-sm p-3">Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
            dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p>
    </div>
    <div class="col-md-4 my-2 "><p class="bg-white rounded shadow-sm p-3">Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
        dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p></div>
    <div class="col-md-4 my-2"><p class="bg-white rounded shadow-sm p-3">Skema sertifikasi adalah paket kompetensi dan persyaratan spesifik yang berkaitan
        dengan kategori jabatan atau keterampilan tertentu dari seseorang yang relevan dengan dunia kerja.</p></div>
</div>
@endsection