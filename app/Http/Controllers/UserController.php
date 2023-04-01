<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // dd($users);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
            'image' => ['required', 'max:5000|mimes:jpeg,png,jpg'],
        ];

        $message = [
            'name.required' => ' Nama Tidak Boleh Kosong',
            'name.string' => ' Nama Harus Berupa String',
            'name.max' => ' Nama Terlalu Panjang',

            'image.required' => ' Foto tidak boleh kosong',
            'image.max' => ' Ukuran File terlalu besar',

            'email.required' => ' Email Tidak Boleh Kosong',
            'email.string' => ' Email Harus Berupa String',
            'email.email' => ' Email Harus Berupa Email',
            'email.max' => ' Email Terlalu Panjang',
            'email.unique' => ' Email Sudah Digunakan',

            'password.required' => ' Password tidak boleh kosong',
            'password.string' => ' Password Harus Berupa String',
            'password.min' => ' Password Terlalu Pendek',
            'password.confirmed' => ' Password Harus Sama',
        ];
        $this->validate($request, $rules, $message);

        //mengubah nama file foto yang diupload
        $imageName = date('Ymd') . time() . '.' . $request->image->extension();
        $request->file('image')->move(public_path('img/fotoadmin'), $imageName);
        //simpan ke database user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imageName,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/admin/akun')->with('message', 'Akun Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::whereId($id)->first();
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->id);
        $rules = [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:admins',
            'image' => 'max:5000|mimes:jpeg,png,jpg',
            'password' => 'confirmed',
        ];
        $message = [
            'name.required' => ' Nama Tidak Boleh Kosong',
            'name.string' => ' Nama Harus Berupa String',
            'name.max' => ' Nama Terlalu Panjang',

            'email.required' => ' Email Tidak Boleh Kosong',
            'email.string' => ' Email Harus Berupa String',
            'email.email' => ' Email Harus Berupa Email',
            'email.max' => ' Email Terlalu Panjang',
            'email.unique' => ' Email Sudah Digunakan',

            'image.max' => ' Ukuran File Terlalu Besar',
            'image.mimes' => ' File Format Harus jpeg,png,jpg',

            // 'password.required'=>' Password tidak boleh kosong',
            // 'password.string'=>' Password Harus Berupa String',
            // 'password.min'=>' Password Terlalu Pendek',
            'password.confirmed' => ' Password Harus Sama',
        ];
        $this->validate($request, $rules, $message);

        //simpan ke database user
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }
        if (!empty($request->image)) {
            if (\File::exists(public_path('img/fotoadmin/') . $user->image)) {
                \File::delete(public_path('img/fotoadmin/') . $user->image);
            }
            $fileName = date('Ymd') . time() . '.' . $request->image->extension();
            $request->file('image')->move(public_path('img/fotoadmin'), $fileName);
            $user->image = $fileName;
        }
        $user->update();

        return redirect('/admin/akun')->with('message', 'Akun Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $userCount = User::count();
        if ($userCount < 2) {
            return redirect('/admin/akun')->with('error', 'Tidak Boleh Menghapus Akun Terakhir');
        } else {
            $request = User::where('id', $request->id)->first();
            if (\File::exists(public_path('img/fotoadmin/') . $request->image)) {
                \File::delete(public_path('img/fotoadmin/') . $request->image);
            }
            $request->delete();

            return redirect('/admin/akun')->with('message', 'Akun Berhasil Dihapus');
        }
    }
}
