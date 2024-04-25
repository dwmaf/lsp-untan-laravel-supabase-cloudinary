<?php

namespace App\Http\Controllers;

use App\Models\PenerimaSertif;
use App\Http\Requests\StorePenerimaSertifRequest;
use App\Http\Requests\UpdatePenerimaSertifRequest;

class PenerimaSertifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('certiholder', [
            'certiholders' => PenerimaSertif::with('skema')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenerimaSertifRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PenerimaSertif $penerimaSertif)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenerimaSertif $penerimaSertif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenerimaSertifRequest $request, PenerimaSertif $penerimaSertif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenerimaSertif $penerimaSertif)
    {
        //
    }
}
