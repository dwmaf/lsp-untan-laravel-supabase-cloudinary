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
        Daftar Berita
    </div>
    <div class="card-body">
        <a class="btn btn-primary mb-3" href="/admin/jadwal/create" ><i class="fa-solid fa-plus"></i> Tambah berita baru</a>
        <table id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Judul Berita</th>
                        <th >Berita Dibuat Pada</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($beritas as $berita)
                    <tr>
                        <td >{{ $loop->iteration}}</td>
                        <td >{{ $berita->judul_berita }}</td>
                        <td >{{ $berita->created_at }}</td>
                        <td >
                            <a class=" btn btn-warning" href="/admin/jadwal/{{ $berita->id }}/edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/admin/jadwal/{{ $berita->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class=" btn btn-danger border-0" onclick="return confirm('Hapus data {{ $berita->judul_berita }}?')" ><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

@endsection