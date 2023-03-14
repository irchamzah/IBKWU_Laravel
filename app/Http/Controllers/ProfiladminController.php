<?php

namespace App\Http\Controllers;

use App\Models\Profiladmin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProfiladminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiladmins = Profiladmin::all();
        return view('profiladmin.index', compact('profiladmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiladmin.create');
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

        Profiladmin::create($input);

        return redirect('/profiladmin')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function show(Profiladmin $profiladmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Profiladmin $profiladmin)
    {
        return view('profiladmin.edit', compact('profiladmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profiladmin $profiladmin)
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

        $profiladmin->update($input);

        return redirect('/profiladmin')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profiladmin  $profiladmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profiladmin $profiladmin)
    {
        $profiladmin->delete();

        return redirect('/profiladmin')->with('message', 'Data Berhasil Dihapus');
    }
}
