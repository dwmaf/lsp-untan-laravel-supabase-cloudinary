@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/jadwal" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar jadwal sertifikasi</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Tambah Jadwal Sertifikasi
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/jadwal" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <select class="form-select" name="skema_id" id="" required>
                    @foreach ($skemas as $skema)
                        <option value="{{ $skema->id }}">{{ $skema->nama_skema }}</option>
                    @endforeach
                </select>
                <label for="nama_skema">Sertifikasi yang akan dilaksanakan</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="asesor_id" id="" required>
                    @foreach ($asesors as $asesor)
                        <option value="{{ $asesor->id }}">{{ $asesor->nama_asesor }}</option>
                    @endforeach
                </select>
                <label for="nama_asesor">Asesor</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="kapasitas" id="kapasitas" type="text" required  />
                <label for="kapasitas">Kapasitas</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="biaya" id="kapasitas" type="text" required  />
                <label for="kapasitas">Biaya</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="daftar_mulai" id="daftar_mulai" type="date" required  />
                <label for="daftar_mulai">Tanggal Mulai Pendaftaran</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="daftar_berakhir" id="daftar_berakhir" type="date" required  />
                <label for="daftar_berakhir">Tanggal Berakhir Pendaftaran</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="tanggal_mulai" id="tanggal_mulai" type="date" required  />
                <label for="tanggal_mulai">Tanggal Mulai Pelaksanaan Sertifikasi</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" name="tanggal_berakhir" id="tanggal_berakhir" type="date" required  />
                <label for="tanggal_berakhir">Tanggal Berakhir Pelaksanaan Sertifikasi</label>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>

    
@endsection