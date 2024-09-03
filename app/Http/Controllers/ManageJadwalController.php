<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Jadwal;
use App\Models\Skema;
use Illuminate\Http\Request;

class ManageJadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin/jadwal/managejadwal', [
            'jadwals' => Jadwal::with('skema')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/jadwal/createjadwal', [
            'skemas' => Skema::get(),
            'asesors' => Asesor::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'kapasitas' => 'required',
            'skema_id' => 'required',
            'asesor_id' => 'required',
            'biaya' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'daftar_mulai' => 'required',
            'daftar_berakhir' => 'required'
        ]);
        Jadwal::create($validatedData);
        return redirect('/admin/jadwal')->with('success', 'Jadwal Sertifikasi baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('/admin/jadwal/editjadwal', [
            'jadwal' => $jadwal,
            'asesors' => Asesor::all(),
            'skemas' =>Skema::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $validatedData = $request->validate([
            'kapasitas' => 'required',
            'skema_id' => 'required',
            'asesor_id' => 'required',
            'biaya' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_berakhir' => 'required',
            'daftar_mulai' => 'required',
            'daftar_berakhir' => 'required'
        ]);

        Jadwal::where('id', $jadwal->id)
            ->update($validatedData);

        return redirect('/admin/jadwal')->with('success', 'Jadwal Sertifikasi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        Jadwal::destroy($jadwal->id);
        return redirect('/admin/jadwal')->with('success', 'Jadwal Sertifikasi berhasil dihapus');
    }
}
