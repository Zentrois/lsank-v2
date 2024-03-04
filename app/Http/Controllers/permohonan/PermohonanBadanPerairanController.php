<?php

namespace App\Http\Controllers\permohonan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermohonanBadanPerairanController extends Controller
{
    public function index(){
        return view('content.permohonan.permohonan-badan-perairan');
    }

    public function create(Request $request){
        if($request->url() == route('permohonan-badan-perairan-borang-individu')){
            $listBorang = $request->input('aktiviti');
            $jenisAkaun = 1;
        }

        if($request->url() == route('permohonan-badan-perairan-borang-bisnes')){
            $listBorang = $request->input('aktiviti');
            $jenisAkaun = 2;
           
        }

        return view('content.permohonan.permohonan-badan-perairan-borang', compact('listBorang','jenisAkaun'));
      
       
    }
  
}
