@extends('layouts.navbar')
@section('child')
<div class="section-header pt-4">
    <h2>
        Jadwal Sertifikasi
    </h2>
</div>
<div class="container-fluid px-4 mt-4" >
    <div class="row">
        @foreach ($jadwals as $jadwal)
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $jadwal->skema->nama_skema }}</h5>
                    <p>Pendaftaran: {{ $jadwal->daftar_mulai }} sampai {{ $jadwal->daftar_berakhir }}</p>
                    <p>Pelaksanaan: {{ $jadwal->tanggal_mulai }} sampai {{ $jadwal->tanggal_berakhir }}</p>
                    <p>Kapasitas: {{ $jadwal->kapasitas }}</p>
                    <p>Biaya: {{ $jadwal->biaya }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
