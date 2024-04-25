@extends('layouts.navbar')
@section('child')
<div class="">
    <h1 class="">Daftar Pemegang Sertifikat</h1>
    
    <table class="">
    <thead>
            <tr>
                <th class="">Pemegang Sertifikat</th>
                <th class="">Skema</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($certiholders as $certiholder)
            <tr>
                <td class="">{{ $certiholder->nama_holder }}</td>
                <td class="">{{ $certiholder->skema->nama_skema }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection