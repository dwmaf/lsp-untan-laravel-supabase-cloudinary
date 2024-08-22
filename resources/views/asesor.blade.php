@extends('layouts.navbar')
@section('child')
<div class="section-header pt-4">
    <h2>
        Daftar Asesor
    </h2>
</div>
<div class="container-fluid px-4 mt-4" style="max-width: 800px;">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Daftar Asesor yang terdapat di LSP UNTAN
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
                      @if(empty($asesor->skema->nama_skema))
                        <td>No data</td>
                      @else
                        <td>{{ $asesor->skema->nama_skema }}</td>
                      @endif
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
