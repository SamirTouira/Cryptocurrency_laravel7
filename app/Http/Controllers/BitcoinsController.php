<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Storage\Psr6CacheStorage;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Kevinrob\GuzzleCache\Strategy\PrivateCacheStrategy;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use Illuminate\Support\Facades\Http;

class BitcoinsController extends Controller
{
    //
    
    function bitcoinGraphic()
    {
        $crypto = '';

        $data= Http::get('https://api.coingecko.com/api/v3/coins/bitcoin?tickers=true&market_data=true&community_data=false')->json();

        return view('bitcoingraphic',['data' => $data]);
    }
}
