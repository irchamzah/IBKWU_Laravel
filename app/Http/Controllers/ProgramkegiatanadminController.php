<?php

namespace App\Http\Controllers;

use App\Models\Programkegiatanadmin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProgramkegiatanadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programkegiatanadmins = Programkegiatanadmin::all();
        return view('programkegiatanadmin.index', compact('programkegiatanadmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programkegiatanadmin.create');
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

        Programkegiatanadmin::create($input);

        return redirect('/programkegiatanadmin')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Programkegiatanadmin  $programkegiatanadmin
     * @return \Illuminate\Http\Response
     */
    public function show(Programkegiatanadmin $programkegiatanadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Programkegiatanadmin  $programkegiatanadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Programkegiatanadmin $programkegiatanadmin)
    {
        return view('programkegiatanadmin.edit', compact('programkegiatanadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Programkegiatanadmin  $programkegiatanadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Programkegiatanadmin $programkegiatanadmin)
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

        $programkegiatanadmin->update($input);

        return redirect('/programkegiatanadmin')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Programkegiatanadmin  $programkegiatanadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Programkegiatanadmin $programkegiatanadmin)
    {
        $programkegiatanadmin->delete();

        return redirect('/programkegiatanadmin')->with('message', 'Data Berhasil Dihapus');
    }
}
