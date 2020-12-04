<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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
    $destilados = array(
        'rum',
        //'whisky',
        'beer',
        'wine',
        'gin',
        'vodka',
        'tequila'
    );
    $images = array();
    foreach($destilados as $destilado){
            $url = 'https://www.thecocktaildb.com/api/json/v1/1/filter.php?i='.$destilado;
            $response = Http::get($url);
            $cocktails = $response->json()['drinks'];
            $cocktail = ($cocktails)?$cocktails[random_int(0,count($cocktails)-1)]:null;
            $images[$destilado] = $cocktail['strDrinkThumb'];
    }

    return view("index",compact('images'));
});

Route::get('/cocktails/{ingredient}', function (Request $request){
    
    if(!isset($request['ingredient']))return redirect("/");

    $url = 'https://thecocktaildb.com/api/json/v1/1/filter.php?i='.$request['ingredient'];
    $response = Http::get($url);
    $cocktails = $response->json()['drinks'];
    $randnum = random_int(0,count($cocktails)-1);
    $destilado = $request['ingredient'];
    $destilado[0] = strtoupper($destilado[0]);
    return view("list-cocktails",compact('cocktails','randnum','destilado'));
});


Route::get('/cocktail/{id}', function (Request $request){
    
    if(!isset($request['id']))return redirect("/");

    $url = 'https://thecocktaildb.com/api/json/v1/1/lookup.php?i='.$request['id'];
    $response = Http::get($url);
    $cocktail = $response->json()['drinks'];

    echo $response;
    return;

    $randnum = random_int(0,count($cocktails)-1);
    $destilado = $request['ingredient'];
    $destilado[0] = strtoupper($destilado[0]);
    return view("list-cocktails",compact('cocktails','randnum','destilado'));
});