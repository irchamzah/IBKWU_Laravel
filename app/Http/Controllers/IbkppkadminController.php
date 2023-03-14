<?php

namespace App\Http\Controllers;

use App\Models\Ibkppkadmin;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class IbkppkadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ibkppkadmins = Ibkppkadmin::all();
        return view('ibkppkadmin.index', compact('ibkppkadmins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ibkppkadmin.create');
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

        Ibkppkadmin::create($input);

        return redirect('/ibkppkadmin')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibkppkadmin  $ibkppkadmin
     * @return \Illuminate\Http\Response
     */
    public function show(ibkppkadmin $ibkppkadmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibkppkadmin  $ibkppkadmin
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibkppkadmin $ibkppkadmin)
    {
        return view('ibkppkadmin.edit', compact('ibkppkadmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibkppkadmin  $ibkppkadmin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ibkppkadmin $ibkppkadmin)
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

        $ibkppkadmin->update($input);

        return redirect('/ibkppkadmin')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibkppkadmin  $ibkppkadmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ibkppkadmin $ibkppkadmin)
    {
        $ibkppkadmin->delete();

        return redirect('/ibkppkadmin')->with('message', 'Data Berhasil Dihapus');
    }
}
