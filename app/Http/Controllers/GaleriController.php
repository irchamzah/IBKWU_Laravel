<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeris = Galeri::all();
        return view('admin.halaman.galeri.index', compact('galeris'));
    }

    public function tambah_produk()
    {
        return view('admin.halaman.galeri.create');
    }

    public function edit_produk()
    {
        return view('admin.halaman.galeri.edit');
    }

    public function tambah_foto_produk()
    {
        return view('admin.halaman.galeri.tambah_foto');
    }

    public function edit_foto_produk()
    {
        return view('admin.halaman.galeri.edit_foto');
    }

    public function tambah_sosmed_produk()
    {
        return view('admin.halaman.galeri.tambah_sosmed');
    }
    
    public function edit_sosmed_produk()
    {
        return view('admin.halaman.galeri.edit_sosmed');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Galeri::create($input);

        return redirect('/galeri')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = date('Ymd') . "." . $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $galeri->update($input);

        return redirect('/galeri')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();

        return redirect('/galeri')->with('message', 'Data Berhasil Dihapus');
    }
}
