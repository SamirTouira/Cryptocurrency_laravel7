<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('listcoins', "ListCoins@list");
Route::get('/bitcoingraphic', "BitcoinsController@bitcoinGraphic")->name('post.bitcoingraphic');
Route::get('/ethereumgraphic', "EthereumController@ethereumGraphic")->name('post.ethereumgraphic');

Route::post('message', 'MessageController')->name('message');
Route::get('test', function() {
    return view('test');
});

Route::post('/crypto', "CryptocurrencyController@index")->name('post.crypto');

//Route::get('ajaxRequest', 'AjaxController@ajaxRequest');
//Route::post('ajaxRequest', 'AjaxController@ajaxRequestPost')->name('ajaxRequest.post');

//Route::get('/index', 'BitcoinChartController@index')->name('bicoinchart.index');
//Route::get('/bitcoingraphic', 'BitcoinChartController@index')->name('bicoinchart.index');