@extends('layouts.navbar')
@section('child')
<div>
    <div class="flex flex-col justify-center items-center gap-3 mt-3">
        <h1 class="font-bold text-3xl pb-4">Akun yang mencurigakan</h1>
        <div class="flex flex-row w-[80%]">
            <div class="w-full h-10 bg-[#F0F2F5] rounded-l-xl flex flex-row items-center justify-center">
                <input class="outline-non bg-transparent placeholder:text-[#637587]" placeholder="Cari No Rekening di sini..." type="text">
            </div>
            <button class="h-10 w-20 rounded-r-xl bg-white border border-slate-700 flex items-center justify-center">Search</button>
        </div>
    </div>
</div>
@endsection