<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Mitra;
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
        $mitras = Mitra::get();
        $footer = Footer::first();
        return view('admin.halaman.footer.index', compact('footer', 'mitras'));
    }

    public function update(Request $request, $id)
    {
        //validasi data
        $rules = [
            'address' => 'required|string|max:255',
            'address_2' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'phone_2' => 'required|string|max:255',
            'phone_3' => 'required|string|max:255',
            'link_1' => 'required|string|max:255',
            'link_2' => 'required|string|max:255',
            'link_3' => 'required|string|max:255',
            'link_4' => 'required|string|max:255',
        ];
        $message = [
            'address.required' => 'Tidak Boleh Kosong',
            'address.string' => 'Harus Berupa String',

            'address_2.required' => 'Tidak Boleh Kosong',
            'address_2.string' => 'Harus Berupa String',

            'phone.required' => 'Tidak Boleh Kosong',
            'phone.string' => 'Harus Berupa String',

            'phone_2.required' => 'Tidak Boleh Kosong',
            'phone_2.string' => 'Tidak Boleh Kosong',

            'phone_3.required' => 'Tidak Boleh Kosong',
            'phone_3.string' => 'Tidak Boleh Kosong',

            'link_1.required' => 'Tidak Boleh Kosong',
            'link_1.string' => 'Harus Berupa String',

            'link_2.required' => 'Tidak Boleh Kosong',
            'link_2.string' => 'Harus Berupa String',

            'link_3.required' => 'Tidak Boleh Kosong',
            'link_3.string' => 'Harus Berupa String',

            'link_4.required' => 'Tidak Boleh Kosong',
            'link_4.string' => 'Harus Berupa String',

        ];
        $this->validate($request, $rules, $message);

        //simpan ke database footer
        $footer = Footer::where('id', $request->id)->first();
        $footer->address = $request->address;
        $footer->address_2 = $request->address_2;
        $footer->phone = $request->phone;
        $footer->phone_2 = $request->phone_2;
        $footer->link_1 = $request->link_1;
        $footer->link_2 = $request->link_2;
        $footer->link_3 = $request->link_3;
        $footer->link_4 = $request->link_4;
        $footer->update();

        return Redirect::route('admin.halaman.footer')->with('message', 'Halaman footer Berhasil Diperbarui');
    }
}
