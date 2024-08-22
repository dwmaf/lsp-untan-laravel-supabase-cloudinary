<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ManageBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/admin/berita/manageberita', [
            'beritas'=> Berita::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/berita/createberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'link_foto' => 'image|required'
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->konten_berita), 200);
        Berita::create($validatedData);
        return redirect('/admin/berita')->with('success', 'Berita baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return view('/admin/berita/certainberitaadmin', [
            'berita' => Berita::where('id',$berita->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        return view('/admin/berita/editberita', [
            'berita' => $berita
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required',
            'konten_berita' => 'required',
            'link_foto' => 'image|required'
        ]);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->konten_berita), 200);
        Berita::where('id', $berita->id)
            ->update($validatedData);

        return redirect('/admin/berita')->with('success', 'Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);
        return redirect('/admin/berita')->with('success', 'Berita berhasil dihapus');
    }
}
