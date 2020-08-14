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


class EthereumController extends Controller
{
    //function ethereumGraphic()
//{
    //    $data= Http::get('https://api.coingecko.com/api/v3/coins/ethereum?localization=false&tickers=true&market_data=true&community_data=false&sparkline=true')->json();

    //    return view('bitcoingraphic',['data' => $data]);
  //  }
}
