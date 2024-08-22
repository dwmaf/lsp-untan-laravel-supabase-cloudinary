@extends('layouts.adminnav')
@section('adminchild')
@if (session()->has('success'))    
<div class="alert alert-primary" role="alert">
    {{ session('success') }}
</div>
@endif
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Daftar Jadwal Sertifikasi
    </div>
    <div class="card-body">
        <a class="btn btn-primary mb-3" href="/admin/jadwal/create" ><i class="fa-solid fa-plus"></i> Tambah asesor baru</a>
        <table id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Skema</th>
                        <th >Asesor</th>
                        <th >Kapasitas</th>
                        <th >Biaya</th>
                        <th >Daftar Mulai</th>
                        <th >Daftar Berakhir</th>
                        <th >Tanggal Mulai</th>
                        <th >Tanggal Berakhir</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwals as $jadwal)
                    <tr>
                        <td >{{ $loop->iteration}}</td>
                        <td >{{ $jadwal->skema->nama_skema }}</td>
                        @if(empty($jadwal->asesor->nama_asesor))
                            <td>No data</td>
                        @else
                            <td>{{ $jadwal->skema->nama_asesor }}</td>
                        @endif
                        <td >{{ $jadwal->kapasitas }}</td>
                        <td >{{ $jadwal->biaya }}</td>
                        <td >{{ $jadwal->daftar_mulai }}</td>
                        <td >{{ $jadwal->daftar_berakhir }}</td>
                        <td >{{ $jadwal->tanggal_mulai }}</td>
                        <td >{{ $jadwal->tanggal_berakhir }}</td>
                        <td >
                            <a class=" btn btn-warning" href="/admin/jadwal/{{ $jadwal->id }}/edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/admin/jadwal/{{ $jadwal->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class=" btn btn-danger border-0" onclick="return confirm('Hapus data ini?')" ><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

@endsection