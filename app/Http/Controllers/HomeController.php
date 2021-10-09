<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Data::all();
        return view('home', compact('datas'));
    }

    public function create()
    {
        if (auth()->user()->is_admin == 1) {
            return view('pdk.create');
        }else{
            return view('lurah');
        }
    }

    public function store(Request $request)
    {
        {
            $request->validate([
                'nik' => 'required|numeric|digits:16',
                'nama' => 'required',
                'jk' => 'required',
                'kota' => 'required',
                'kec' => 'required',
                'kel' => 'required',
                'rt_rw' => 'required',
                'jln' => 'required',
                'agama' => 'required',
                'gawe' => 'required',
                'foto' => 'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
    
    
    
            $imgname = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('foto'), $imgname);
    
    
            Data::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'jk' => $request->jk,
                'kota' => $request->kota,
                'kec' => $request->kec,
                'kel' => $request->kel,
                'rt_rw' => $request->rt_rw,
                'jln' => $request->jln,
                'agama' => $request->agama,
                'gawe' => $request->gawe,
                'foto' => $imgname,
    
            ]);
    
            return redirect()->route('home');
        }
    }

    public function destroy($id)
    {
        $datas = Data::destroy($id);
        return redirect()->route('home')
        ->with('success','Data Penduduk deleted successfully');
    }

    public function edit($id)
    {
        $datas = Data::find($id);
        return view ('pdk.edit', compact('datas'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([

            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $cek = Data::where('id', $id)->first();
        if($request->foto != NULL){

            $imgname = $request->foto->getClientOriginalName();
            $request->foto->move(public_path('foto'), $imgname);
        }else{
            $imgname = $cek->foto;
        }

        Data::where('id', $id)->update([
            'nik' => $request->nik, 
            'nama' => $request->nama,   
            'jk' => $request->jk,
            'kota' => $request->kota,
            'kec' => $request->kec,
            'kel' => $request->kel,
            'rt_rw' => $request->rt_rw,
            'jln' => $request->jln,
            'agama' => $request->agama,
            'gawe' => $request->gawe,
            'foto' => $imgname,

        ]);
        return redirect()->route('home');
    }

    public function admin()
    {
        $datas = Data::all();
        return view('home', compact('datas'));
    }

    public function lurahs()
    {
        if (auth()->user()->is_admin == 1) {
            return view('admin');
        }else{
            $datas = Data::all();
            return view('lurah', compact('datas'));
        }
    }
    public function register()
    {
        return view('auth.register');
    }
}
