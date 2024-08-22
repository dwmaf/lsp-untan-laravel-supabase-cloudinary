<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Skema;
use Illuminate\Http\Request;
class ManageAsesorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('/admin/asesor/manageasesor', [
            'asesors' => Asesor::with('skema')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/asesor/createasesor', [
            'skemas' =>Skema::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_asesor' => 'required',
            'skema_id' => 'required'
        ]);

        Asesor::create($validatedData);

        return redirect('/admin/asesor')->with('success', 'Asesor baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Asesor $asesor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asesor $asesor)
    {
        return view('/admin/asesor/editasesor', [
            'asesor' => $asesor,
            'skemas' =>Skema::all()
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asesor $asesor)
    {
        $validatedData = $request->validate([
            'nama_asesor' => 'required',
            'skema_id' => 'required'
        ]);

        Asesor::where('id', $asesor->id)
            ->update($validatedData);

        return redirect('/admin/asesor')->with('success', 'Asesor berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asesor $asesor)
    {
        Asesor::destroy($asesor->id);
        return redirect('/admin/asesor')->with('success', 'Asesor berhasil dihapus');
    }
}
