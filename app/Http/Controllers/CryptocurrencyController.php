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

class CryptocurrencyController extends Controller
{
    function index(Request $request)
    {
        if ($request->ajax()) {
 
            $test = $request->input("cryptocurrency");
            $url = 'https://api.coingecko.com/api/v3/coins/'.$test.'?tickers=true&market_data=true&community_data=false';
            $data= Http::get($url)->json();
            // Gestion des données
            return response ()->json ($data);
        }
        abort(404);
    }
    
}
