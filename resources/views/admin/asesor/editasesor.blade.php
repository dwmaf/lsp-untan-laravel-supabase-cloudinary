@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/asesor" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar asesor</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Edit Asesor
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/asesor/{{ $asesor->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" class="@error('nama_asesor') @enderror" name="nama_asesor" id="nama_asesor" type="text" value="{{ $asesor->nama_asesor }}"/>
                @error('nama_asesor')
                    <div class="">{{ $message }}</div>
                @enderror
                <label for="nama_asesor">Nama Asesor</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="skema_id" id="" required>
                    @foreach ($skemas as $skema)
                    @if (old('skema_id', $asesor->skema_id) == $skema->id)
                        <option value="{{ $skema->id }}" selected>{{ $skema->nama_skema }}</option>
                    @else
                        <option value="{{ $skema->id }}" >{{ $skema->nama_skema }}</option>
                    @endif
                    @endforeach
                </select>
                <label for="nama_skema">Skema</label>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>


    
@endsection