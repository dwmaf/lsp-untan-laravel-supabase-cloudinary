<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use App\Models\Unitkompetensi;
use Illuminate\Http\Request;
 
class ManageSkemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin/skema/manageskema', [
            'skemas' => Skema::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/skema/createskema');
    }

    /**
     * Store a newly created resource in storage. 
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_skema' => 'required|unique:skemas'
        ]);

        Skema::create($validatedData);

        return redirect('/admin/skema')->with('success', 'Skema baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skema $skema)
    {
        
        return view('/admin/unitkompetensi/manageunitk', [
            'unitkompetensis' => Unitkompetensi::where('skema_id',$skema->id)->get(),
            // 'skema' => Skema::where('id',$skema->id)->get()
            'skemas' => $skema
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skema $skema)
    {
        return view('/admin/skema/editskema', [
            'skema' => $skema
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skema $skema)
    {
        $rules = [];
        if($request->nama_skema != $skema->nama_skema){
            $rules['nama_skema'] = 'required|unique:skemas';
        }

        $validatedData = $request->validate($rules);

        Skema::where('id', $skema->id)
            ->update($validatedData);

        return redirect('/admin/skema')->with('success', 'Skema berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skema $skema)
    {
        Skema::destroy($skema->id);
        return redirect('/admin/skema')->with('success', 'Skema berhasil dihapus');
    }
}
