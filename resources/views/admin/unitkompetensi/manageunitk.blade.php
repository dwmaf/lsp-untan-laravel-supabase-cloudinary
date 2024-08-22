@extends('layouts.adminnav')
@section('adminchild')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Daftar Unit Kompetensi {{ $skemas['nama_skema'] }}
    </div> 
    <div class="card-body">
        <a class="btn btn-primary mb-3" href="/admin/unitkompetensi/create" ><i class="fa-solid fa-plus"></i> Tambah Unit Kompetensi baru</a>
        <table id="datatablesSimple">
            <thead>
                    <tr>
                        <th >Kode Unit</th>
                        <th >Judul Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($unitkompetensis as $unitkompetensi)
                    <tr>
                        <td >{{ $unitkompetensi->kode_unit }}</td>
                        <td >{{ $unitkompetensi->judul_unit }}</td>
                        <td>
                            <a class="btn btn-warning" href="/admin/unitkompetensi/{{ $unitkompetensi->id }}/edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline" action="/admin/unitkompetensi/{{ $unitkompetensi->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Hapus data {{ $unitkompetensi->judul_unit }}?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection