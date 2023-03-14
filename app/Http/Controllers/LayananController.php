<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $layanans = Layanan::all();
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'image' => ['required', 'max:5000|mimes:jpeg,png,jpg'],
        ];
        $message = [
            'title.required' => ' Title Tidak Boleh Kosong',
            'title.string' => ' Title Harus Berupa String',
            'title.max' => ' Title Terlalu Panjang',

            'description.required' => ' Deskripsi Tidak Boleh Kosong',

            'image.required' => ' Foto tidak boleh kosong',
            'image.max' => ' Ukuran File terlalu besar',
        ];
        $this->validate($request, $rules, $message);

        //mengubah nama file foto yang diupload
        $imageName = time() . '.' . $request->image->extension();
        $request->file('image')->move(public_path('img/fotolayanan'), $imageName);
        //simpan ke database user
        Layanan::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('/layanan')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Layanan $layanan)
    {
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Layanan $layanan)
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

        $layanan->update($input);

        return redirect('/layanan')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();

        return redirect('/layanan')->with('message', 'Data Berhasil Dihapus');
    }
}
