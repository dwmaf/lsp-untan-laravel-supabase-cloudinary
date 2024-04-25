@extends('layouts.navbar')
@section('child')
<div class="container-fluid px-4" style="max-width: 800px;">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Skema Sertifikasi
        </div>
        <div class="card-body">
          <table  id="datatablesSimple">
            <thead>
                    <tr>
                        <th >No</th>
                        <th >Skema Sertifikasi</th>
                    </tr>
            </thead>
                <tbody>
                    @foreach ($skemas as $skema)
                    <tr>
                        <td >{{ $skema->id }}</td>
                        <td >{{ $skema->nama_skema }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table> 
        </div>
    </div>
</div>
@endsection
