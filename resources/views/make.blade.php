@extends('layouts.navbar')
@section('child')
    <div class="bg-white w-full h-auto flex flex-col items-center">
        <form class="flex flex-col w-full max-w-[512px] text-left pl-4 pr-4 pt-4">
            <h1 class="text-3xl font-bold">Laporkan Sebuah Rekening</h1>
            <h5 class="text-base font-semibold pt-8 pb-2">No Rekening</h5>
            <div class="w-full h-[56px] bg-[#F0F2F5] rounded-xl flex justify-center">
                <input type="text" placeholder="No Rekening" class="outline-none bg-transparent w-full pl-4">
            </div>

            <h3 class="pt-4 pb-4 text-lg font-bold">Apa alasan melaporkan akun ini?</h3>
            <div class="flex flex-col gap-2">
                <div class="border border-[#DBE0E5] rounded-xl h-[56px] flex items-center">
                    <input class="ml-4" name="reason" value="Scam" type="radio">
                    <label class="pl-4" for="Scam">Scam</label>
                </div>

                <div class="border border-[#DBE0E5] rounded-xl h-[56px] flex items-center">
                    <input class="ml-4" name="reason" value="Bullying" type="radio">
                    <label class="pl-4" for="Bullying">Bullying</label>
                </div>

                <div class="border border-[#DBE0E5] rounded-xl h-[56px] flex items-center">
                    <input class="ml-4" name="reason" value="Pelanggaran Hukum" type="radio">
                    <label class="pl-4" for="Pelanggaran Hukum">Pelanggaran Hukum</label>
                </div>

                <div class="border border-[#DBE0E5] rounded-xl h-[56px] flex items-center">
                    <input class="ml-4" name="reason" value="Penyalahgunaan Finansial" type="radio">
                    <label class="pl-4" for="Penyalahgunaan Finansial">Penyalahgunaan Finansial</label>
                </div>
            </div>

            <h5 class="text-base font-semibold pt-8 pb-2">Kronologi</h5>
            <div class="w-full h-[112px] bg-[#F0F2F5] rounded-xl  ">
                <input type="text" placeholder="Kronologi" class="outline-none w-full pl-4 pt-2 bg-transparent">
            </div>
            <button class="bg-slate-600 rounded-md  w-full h-[35px] text-sm text-white drop-shadow-xl my-8">Submit</button>
        </form>
    </div>
@endsection