<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.dashboard');
    }

    public function data_order(){
        $data_order = DataOrder::all();
        return view('Admin.data_order', compact('data_order'));
    }

    public function create_order(Request $request){
        DataOrder::create([
            'nama' => $request->nama,
            'kode_template' => $request->kode_template,
            'jenis_bayar' => $request->jenis_bayar,
            'bayar' => $request->bayar,
            'id_user_create' => Auth::user()->id,
        ]);

        return redirect()->route('admin.data_order')->with('success', 'Registrasi berhasil!');
    }

    public function template_undangan(){
        return view('Admin.tamplate_undangan');
    }
}
