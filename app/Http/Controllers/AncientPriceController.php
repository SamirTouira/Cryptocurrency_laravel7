<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AncientPriceController extends Controller
{
    
    function nine(Request $request){
        if ($request->ajax()) {
 
            $idCoin = $request->input("nine");
            $url = 'https://api.coingecko.com/api/v3/coins/'.$idCoin.'/history?date=14-08-2019';
            $data= Http::get($url)->json();
            // Gestion des données
            return response ()->json ($data);
        }
        abort(404);

    }
}
