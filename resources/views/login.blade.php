@extends('layouts.navbar')
@section('child')    
<div class="flex justify-center items-center h-[100vh]">
    <div class="px-4 w-full max-w-[400px] h-[400px] bg-white flex flex-col ">
        <h5 class="font-semibold text-xl mb-6">Silahkan masuk ke akun anda</h5>
        <form class="flex flex-col text-left mb-8">
            <h4 class="pb-2">Username</h4>
            <div class="border rounded-xl border-[#DBE0E5] h-[56px] flex items-center">
                <input class="pl-4 outline-none bg-transparent font-normal text-sm" type="text" placeholder="Username">
            </div>
            <h4 class="pt-4 pb-2">Password</h4>
            <div class="border rounded-xl border-[#DBE0E5] h-[56px] flex items-center">
                <input class="pl-4 outline-none bg-transparent font-normal text-sm" type="password" placeholder="Password">
            </div>
            <button class="mt-4 bg-slate-600 rounded-md w-full h-[35px] text-sm text-white drop-shadow-xl">Sign in</button>
        </form>
        <div class="text-xs">Belum punya akun? <a class="text-cyan-600" href="/register">Sign up</a></div>
    </div>
</div>
@endsection