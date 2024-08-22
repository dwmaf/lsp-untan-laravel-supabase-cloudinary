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
        Daftar Asesor
    </div>
    <div class="card-body">
        <a class="btn btn-primary mb-3" href="/admin/asesor/create" ><i class="fa-solid fa-plus"></i> Tambah asesor baru</a>
        <table id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Asesor</th>
                        <th >Skema</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asesors as $asesor)
                    <tr>
                        <td >{{ $loop->iteration}}</td>
                        <td >{{ $asesor->nama_asesor }}</td>
                        @if(empty($asesor->skema->nama_skema))
                            <td>No data</td>
                        @else
                            <td>{{ $asesor->skema->nama_skema }}</td>
                        @endif
                        <td >
                            <a class=" btn btn-warning" href="/admin/asesor/{{ $asesor->id }}/edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/admin/asesor/{{ $asesor->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class=" btn btn-danger border-0" onclick="return confirm('Hapus data {{ $asesor->nama_asesor }}?')" ><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

@endsection