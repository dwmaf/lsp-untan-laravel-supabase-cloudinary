@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/jadwal" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar jadwal sertifikasi</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Edit Jadwal Sertifikasi
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/jadwal/{{ $jadwal->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <select class="form-select" name="skema_id" id="" required>
                    @foreach ($skemas as $skema)
                    @if (old('skema_id', $jadwal->skema_id) == $skema->id)
                        <option value="{{ $skema->id }}" selected>{{ $skema->nama_skema }}</option>
                    @else
                        <option value="{{ $skema->id }}" >{{ $skema->nama_skema }}</option>
                    @endif
                    @endforeach
                </select>
                <label for="nama_skema">Skema</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="asesor_id" id="" required>
                    @foreach ($asesors as $asesor)
                    @if (old('asesor_id', $jadwal->asesor_id) == $asesor->id)
                        <option value="{{ $asesor->id }}" selected>{{ $asesor->nama_asesor }}</option>
                    @else
                        <option value="{{ $asesor->id }}" >{{ $asesor->nama_asesor }}</option>
                    @endif
                    @endforeach
                </select>
                <label for="nama_skema">Asesor</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="kapasitas" id="kapasitas" value="{{ $jadwal->kapasitas }}" placeholder="isi kapasitas sertifikasi" required>
                <label for="kapasitas">Kapasitas</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="text" name="biaya" id="biaya" value="{{ $jadwal->biaya }}" placeholder="isi biaya sertifikasi" required>
                <label for="biaya">Biaya</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="daftar_mulai" id="daftar_mulai" value="{{ $jadwal->daftar_mulai }}" placeholder="isi tanggal mulai pendaftaran" required>
                <label for="daftar_mulai">Tanggal Mulai Pendaftaran</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="daftar_berakhir" id="daftar_berakhir" value="{{ $jadwal->daftar_berakhir }}" placeholder="isi tanggal berakhir pendaftaran" required>
                <label for="daftar_berakhir">Tanggal Berakhir Pendaftaran</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="tanggal_mulai" id="tanggal_mulai" value="{{ $jadwal->tanggal_mulai }}" placeholder="isi tanggal mulai pelaksanaan sertifikasi" required>
                <label for="tanggal_mulai">Tanggal Mulai Pelaksanaan Sertifikasi</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="date" name="tanggal_berakhir" id="tanggal_berakhir" value="{{ $jadwal->tanggal_berakhir }}" placeholder="isi tanggal berakhir pelaksanaan sertifikasi" required>
                <label for="tanggal_berakhir">Tanggal Berakhir Pelaksanaan Sertifikasi</label>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection