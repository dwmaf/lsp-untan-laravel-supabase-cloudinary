<?php

namespace App\Http\Controllers;

use App\Models\Unitkompetensi;
use App\Models\Skema;
use Illuminate\Http\Request;

class UnitkompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin/unitkompetensi/allunitk', [
            'unitkompetensis' => Unitkompetensi::with('skema')->get()
        ]);
        // dd("hey");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Unitkompetensi $unitkompetensi)
    {
        return view('/admin/unitkompetensi/createunitk', [
            'skemas' =>Skema::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_unit' => 'required|unique:unitkompetensis',
            'skema_id' => 'required',
            'judul_unit' => 'required'
        ]);

        Unitkompetensi::create($validatedData);

        return redirect('/admin/skema')->with('success', 'Unit Kompetensi baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skema $skema)
    {
        
        // return view('/admin/unitkompetensi/manageunitk', [
        //     // 'unitks' => Unitkompetensi::where('skema_id',$skema->id)->get(),
        //     // 'skema' => Skema::where('id',$skema->id)->get()
        //     'skema' => $skema
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unitkompetensi $unitkompetensi)
    {
        return view('/admin/unitkompetensi/editunitk', [
            'unitkompetensi' => $unitkompetensi,
            'skemas' =>Skema::all()
        ]);
        // dd($unitkompetensi);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Unitkompetensi $unitkompetensi)
    {
        $rules = [
            'skema_id' => 'required',
            'judul_unit' => 'required'
        ];
        if($request->kode_unit != $unitkompetensi->kode_unit){
            $rules['kode_unit'] = 'required|unique:unitkompetensis';
        }

        $validatedData = $request->validate($rules);

        Unitkompetensi::where('id', $unitkompetensi->id)
            ->update($validatedData);

        return redirect('/admin/skema')->with('success', 'Unit Kompetensi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unitkompetensi $unitkompetensi)
    {
        $id_unitk = $unitkompetensi->id;
        Unitkompetensi::destroy($unitkompetensi->id);
        return redirect('/admin/skema')->with('success', 'Unit Kompetensi berhasil dihapus');
    }
}
