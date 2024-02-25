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
}
