<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
    public function index(Request $request, $alamat)
    {
        $result ="Hai ".$request->nama." dengan alamat di ".$alamat. " dan id ".$request->id;
        return $result;
    }
}
