@extends('layouts.navbar')
@section('child')
<div class="container-fluid px-4 pt-4" style="max-width: 1000px;">
    <div class="section-header ">
        <h2 class="fw-bolder">
            TENTANG KAMI
        </h2>
    </div>
    <h2 class="fw-bolder" style="color:#03326b">LSP Pihak 1 UNTAN</h2>
    <p style="color:#87929f">LSP Pihak 1 UNTAN adalah lembaga pelaksana uji kompetensi dan sertifikasi kompetensi. LSP Pihak 1 UNTAN Berdiri tanggal 21 Agustus 2023 berdasarkan surat Keputusan Rektor Unversitas Tanjungpura No. 3214/UN22/OT.00/2023 Tentang Pendirian Lembaga Sertifikasi Profesi Pihak Kesatu Universitas Tanjungpura.</p>
    <h2 class="fw-bolder mt-5" style="color:#03326b">Visi</h2>
    <p style="color:#87929f">Mewujudkan Lembaga Sertifikasi Profesi menjadi pusat keunggulan dalam sertifikasi kompetensi, meningkatkan profesionalisme tenaga kerja, dan mendorong pertumbuhan sektor industri di tingkat Regional, Nasional dan Internasional.</p>
    <h2 class="fw-bolder mt-5" style="color:#03326b">Misi</h2>
    <ul class="pb-5" style="color:#87929f">
        <li>Mengembangkan standar kompetensi yang akurat dan relevan</li>
        <li>Memberikan layanan sertifikasi yang transparan dan profesional</li>
        <li>Bekerjasama dan bersinergi dengan institusi pendidikan dan industri untuk meningkatkan mutu tenaga kerja</li>
        <li>Melakukan penilaian kompetensi yang objektif dan adil</li>
        <li>Memastikan validitas dan kualitas penilaian kompetensi</li>
    </ul>
    <div class="section-header pt-5">
        <h2 class="fw-bolder">
            Struktur & Organisasi
        </h2>
    </div>
    <h4 class="fw-bolder" style="color:#03326b">Pengurus LSP UNTAN</h4>
    <table class="table table-hover" style="color:#87929f">
        @foreach ($penguruses as $pengurus)
        <tr>
            <td>{{ $pengurus->role }}</td>
            <td>: {{ $pengurus->nama }}</td>
        </tr>
        @endforeach
    </table>
    <h4 class="fw-bolder mt-4" style="color:#03326b">Pelaksana Komite LSP UNTAN</h4>
    <table class="table table-hover" style="color:#87929f">
        @foreach ($pelaksanas as $pelaksana)
            <tr>
                <td>{{ $pelaksana->role }}</td>
                <td>: {{ $pelaksana->nama }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection