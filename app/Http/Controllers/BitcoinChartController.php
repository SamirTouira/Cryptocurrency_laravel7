<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BitcoinChart;

class BitcoinChartController extends Controller
{
    public function index(){
        $posts = BitcoinChart::all();

        return vie('index', [
            'posts'=> $posts
        ]);
    }
}
