@extends('layouts.navbar')
@section('child')
<div class="container-fluid px-4" style="max-width: 800px;">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Asesor
        </div>
        <div class="card-body">
          {{-- taruh sini tabelnya--}}
          <table id="datatablesSimple">
              <thead>
                  <tr>
                      <th >No</th>
                      <th >Asesor</th>
                      <th >Skema Sertifikasi</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($asesors as $asesor)
                  <tr>
                      <td >{{ $loop->iteration }}</td>
                      <td >{{ $asesor->nama_asesor }}</td>
                      <td >{{ $asesor->skema->nama_skema }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
