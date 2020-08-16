<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoaderController extends Controller
{
       
    function googleLoad()
    {

        $data= Http::get('https://www.gstatic.com/charts/loader.js')->json();

        return view('bitcoingraphic',['data' => $data]);
    }
}
