<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    public function searchZipcode(Request $request){

        $address = \Correios::cep($request->zipcode);
        return response()->json($address, 200);
    }
}
