<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        return view('admin.halaman.footer.index', compact('footer'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $rules = [
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'yt_link' => 'required|string|max:255',
            'ig_link' => 'required|string|max:255',
            'twt_link' => 'required|string|max:255',
            'li_link' => 'required|string|max:255',
        ];
        $message = [
            'phone.required' => 'Tidak Boleh Kosong',
            'phone.string' => 'Harus Berupa String',

            'email.required' => 'Tidak Boleh Kosong',
            'email.string' => 'Harus Berupa String',

            'address.required' => 'Tidak Boleh Kosong',
            'address.string' => 'Tidak Boleh Kosong',

            'yt_link.required' => 'Tidak Boleh Kosong',
            'yt_link.string' => 'Harus Berupa String',

            'ig_link.required' => 'Tidak Boleh Kosong',
            'ig_link.string' => 'Harus Berupa String',

            'twt_link.required' => 'Tidak Boleh Kosong',
            'twt_link.string' => 'Harus Berupa String',

            'li_link.required' => 'Tidak Boleh Kosong',
            'li_link.string' => 'Harus Berupa String',

        ];
        $this->validate($request, $rules, $message);

        //simpan ke database footer
        $footer = Footer::where('id', $request->id)->first();
        $footer->phone = $request->phone;
        $footer->email = $request->email;
        $footer->address = $request->address;
        $footer->yt_link = $request->yt_link;
        $footer->ig_link = $request->ig_link;
        $footer->twt_link = $request->twt_link;
        $footer->li_link = $request->li_link;
        $footer->update();

        return Redirect::route('admin.halaman.footer')->with('message', 'Halaman footer Berhasil Diperbarui');
    }
}
