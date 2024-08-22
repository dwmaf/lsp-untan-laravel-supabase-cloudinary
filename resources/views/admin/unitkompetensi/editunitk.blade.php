@extends('layouts.adminnav')
@section('adminchild')
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Edit Unit Kompetensi
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/unitkompetensi/{{ $unitkompetensi->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" class="@error('kode_unit') @enderror" name="kode_unit" id="kode_unit" type="text" value="{{ $unitkompetensi->kode_unit }}" required/>
                @error('kode_unit')
                    <div class="">{{ $message }}</div>
                @enderror
                <label for="kode_unit">Kode Unit</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" class="@error('judul_unit') @enderror" name="judul_unit" id="judul_unit" type="text" value="{{ $unitkompetensi->judul_unit }}" required  />
                @error('judul_unit')
                    <div class="">{{ $message }}</div>
                @enderror
                <label for="judul_unit">Judul Unit</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select" name="skema_id" id="" required>
                    @foreach ($skemas as $skema)
                    @if (old('skema_id', $unitkompetensi->skema_id) == $skema->id)
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