<?php

namespace App\Http\Controllers\permohonan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermohonanPelepasanEfluenController extends Controller
{
    public function index(){
        return view('content.permohonan.permohonan-pelepasan-efluen');
    }

    public function create(){
        return view('content.permohonan.permohonan-pelepasan-efluen-borang');
    }

    public function store(Request $request){
        dd($request->all());
        // borang a
        
        $data = new PermohonanPelepasanEfluenController();


        $nama_pemohon_borang_a = $request->input('nama-pemohon-borang-a') ?? '';
        $alamat_berdaftar_borang_a = $request->input('alamat-berdaftar-borang-a') ?? '';
        $alamat_berdaftar_borang_a = $request->input('email-pemohon-borang-a') ?? '';

    
    
    }
}
