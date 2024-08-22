@extends('layouts.navbar')
@section('child')
<div class="section-header pt-4">
    <h2>
        Skema Sertifikasi
    </h2>
</div>
<div class="container-fluid px-4 mt-4" style="max-width: 800px;">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Skema Sertifikasi yang terdapat di LSP UNTAN
        </div>
        <div class="card-body">
          <table  id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Skema Sertifikasi</th>
                        <th >Action</th>
                    </tr>
            </thead>
                <tbody>
                    @foreach ($skemas as $skema)
                    <tr>
                        <td >{{ $loop->iteration }}</td>
                        <td >
                            {{ $skema->nama_skema }}
                        </td>
                        <td><a class="btn btn-primary" href="javascript:void(0)" data-id="{{ $skema->id }}" id="btn-show-unitk-guest"><i class="fa-solid fa-eye"></i> Lihat Unit Kompetensi</a></td>
                    </tr>
                    @endforeach
                </tbody>
        </table> 
        </div>
    </div>
</div>
@endsection
