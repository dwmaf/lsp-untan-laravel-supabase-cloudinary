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
        Daftar Skema
    </div>
    <div class="card-body">
        <a class="btn btn-primary mb-3" href="/admin/skema/create" ><i class="fa-solid fa-plus"></i> Tambah skema baru</a>
        <table id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Skema</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skemas as $skema)
                    <tr>
                        <td >{{ $loop->iteration }}</td>
                        <td >{{ $skema->nama_skema }}</td>
                        <td>
                            <a class="btn btn-warning" href="/admin/skema/{{ $skema->id }}/edit" ><i class="fa-solid fa-pen-to-square"></i></a>
                            <form class="d-inline" action="/admin/skema/{{ $skema->id }}" method="post">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger border-0" onclick="return confirm('Hapus data skema?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>
</div>
@endsection