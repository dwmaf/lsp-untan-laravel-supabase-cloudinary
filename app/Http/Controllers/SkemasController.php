<?php

namespace App\Http\Controllers;
use App\Models\Skema;
use App\Models\Unitkompetensi;
use Illuminate\Http\Request;

class SkemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('skema', [
            'skemas' => Skema::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
        
    // }

    /**
     * Display the specified resource.
     */
    public function show(Skema $skema)
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail Unit Kompetensi',
            'unik' => Unitkompetensi::where('skema_id',$skema->id)->get(),
            'skema' => Skema::where('id',$skema->id)->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}

