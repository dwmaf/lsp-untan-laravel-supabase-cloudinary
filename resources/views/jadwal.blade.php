@extends('layouts.navbar')
@section('child')
    <div class="section-header pt-4">
        <h2>
            Jadwal Sertifikasi
        </h2>
    </div>
    <div class="container-fluid px-4 mt-4">
        <div class="row">
            @foreach ($jadwals as $jadwal)
                <div class="col-md-4 my-2">
                    <div class="card jadwal">
                        <div class="card-body jadwal-body">
                            @if (\Carbon\Carbon::now()->lessThanOrEqualTo(\Carbon\Carbon::parse($jadwal->daftar_berakhir)))
                                <span class="badge bg-success">Pendaftaran dibuka</span>
                            @else
                                <span class="badge bg-warning">Pendaftaran sudah ditutup</span>
                            @endif
                            <br>
                            <h5 class="card-title jadwal-title"><i class="fas fa-book"></i> {{ $jadwal->skema->nama_skema }}
                            </h5>
                            <p><i class="fas fa-calendar-alt"></i> Pendaftaran:
                                {{ \Carbon\Carbon::parse($jadwal->daftar_mulai)->format('d M Y') }} sampai
                                {{ \Carbon\Carbon::parse($jadwal->daftar_berakhir)->format('d M Y') }}</p>
                            <p><i class="fas fa-calendar-day"></i> Pelaksanaan:
                                {{ \Carbon\Carbon::parse($jadwal->tanggal_mulai)->format('d M Y') }} sampai
                                {{ \Carbon\Carbon::parse($jadwal->tanggal_berakhir)->format('d M Y') }}</p>
                            <p><i class="fas fa-users"></i> Kapasitas: {{ $jadwal->kapasitas }} orang</p>
                            <p><i class="fas fa-money-bill"></i> Biaya: Rp. {{ $jadwal->biaya }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
