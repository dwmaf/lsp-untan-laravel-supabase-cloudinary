@extends('layouts.navbar')
@section('child')
<header class="py-5 bg-image-full" style="background-image: url('/kantor-bnsp-with-overlay-50.jpg')">
    <div class="text-center my-5">
        <img src="" alt="">
        <h1 class="text-white fs-3 fw-bolder">Lembaga Sertifikasi Profesi UNTAN</h1>
        <p class="text-white-50 mb-0">BNSP No</p>
    </div>
</header>
<div class="d-flex justify-content-center ">
    <div class="container-fluid row align-items-center justify-content-between py-5 px-5" style="max-width: 800px;">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-diagram-project"></i></div>
            <h2 class="h4 fw-bolder">{{ $jumlah_skema }} Skema</h2>
            <p>Skema sertifikasi adalah </p>
            
        </div>
        <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="fa-solid fa-users-line"></i></div>
            <h2 class="h4 fw-bolder">{{ $jumlah_asesor }} orang Asesor</h2>
            <p>Asesor bertugas</p>
            
        </div>
    </div>
</div>

@endsection