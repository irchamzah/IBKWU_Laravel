<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
        $imageName = date('Ymd') . time() . '.' . $request->image->extension();
        $request->file('image')->move(public_path('img/fotoslider'), $imageName);
        //simpan ke database user
        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect('/slider')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $rules = [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'image' => ['max:5000|mimes:jpeg,png,jpg'],
        ];
        $message = [
            'title.required' => ' Title Tidak Boleh Kosong',
            'title.string' => ' Title Harus Berupa String',
            'title.max' => ' Title Terlalu Panjang',

            'description.required' => ' Deskripsi Tidak Boleh Kosong',

            'image.max' => ' Ukuran File terlalu besar',
        ];
        $this->validate($request, $rules, $message);

        //simpan ke database user
        $slider->title = $request->title;
        $slider->description = $request->description;
        if (!empty($request->image)) {
            if (\File::exists(public_path('img/fotoslider/') . $slider->image)) {
                \File::delete(public_path('img/fotoslider/') . $slider->image);
            }
            $fileName = date('Ymd') . time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('img/fotoslider'), $fileName);
            $slider->image = $fileName;
        }
        $slider->update();
        // $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //     'image' => 'image'
        // ]);

        // $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'image/';
        //     $imageName = date('Ymd') . "." . $image->getClientOriginalName();
        //     $image->move($destinationPath, $imageName);
        //     $input['image'] = $imageName;
        // } else {
        //     unset($input['image']);
        // }

        // $slider->update($input);

        return redirect('/slider')->with('message', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if (\File::exists(public_path('img/fotoslider/') . $slider->image)) {
            \File::delete(public_path('img/fotoslider/') . $slider->image);
        }
        $slider->delete();

        return redirect('/slider')->with('message', 'Data Berhasil Dihapus');
    }
}
