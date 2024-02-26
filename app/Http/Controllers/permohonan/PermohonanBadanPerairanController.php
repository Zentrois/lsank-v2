<?php

namespace App\Http\Controllers\permohonan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermohonanBadanPerairanController extends Controller
{
    public function index(){
        return view('content.permohonan.permohonan-badan-perairan');
    }
  
}
