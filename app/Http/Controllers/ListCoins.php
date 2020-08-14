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

class ListCoins extends Controller
{
    //

    function list()
    {
        $data = Http::get('https://api.coingecko.com/api/v3/global')->json();

        return view('listcoins',['data' =>$data]);
        $data = $client->coins()->getList();
    }

    function bitcoinGraphic()
    {
        $data = Http::get('https://api.coingecko.com/api/v3/coins/bitcoin?tickers=true&market_data=true&community_data=false')->json();

        return view('bitcoingraphic',['data' => $data]);
    }
}
