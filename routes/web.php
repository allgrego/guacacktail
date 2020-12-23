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

    $page = (empty($request['page'])||!is_numeric($request['page']))?1:$request['page'];
    $offset = 5;

    $url = 'https://thecocktaildb.com/api/json/v1/1/filter.php?i='.$request['ingredient'];
    $response = Http::get($url);
    $allcocktails = $response->json()['drinks'];

    $last_page = ceil(count($allcocktails)/$offset);

    if($offset*($page-1)>count($allcocktails)){
        $page = 1;
    }

    $cocktails = array_slice($allcocktails,$offset*($page-1),$offset);


    $randnum = random_int(0,count($cocktails)-1);
    $destilado = $request['ingredient'];
    $destilado[0] = strtoupper($destilado[0]);

    return view("list-cocktails",compact('cocktails','randnum','destilado','page','last_page'));
});


Route::get('/cocktail/{id}', function (Request $request){
    
    if(!isset($request['id']))return redirect("/");

    $url = 'https://thecocktaildb.com/api/json/v1/1/lookup.php?i='.$request['id'];
    $response = Http::get($url);
    $cocktail = $response->json()['drinks'][0];
    
    $ingredients = array();
    $measures = array();

    // Set Ingredients
    foreach($cocktail as $key => $value){
        if(strpos($key,"Ingredient")&&$value){
            //array_push($ingredients,$value);
            $counter = explode("strIngredient",$key)[1];
            $newkey = 'Ingredient'.$counter;
            $ingredients[$newkey] = $value;
        }
    }

    // Set Measures
    foreach($cocktail as $key => $value){
        if(strpos($key,"Measure")&&$value){
            //array_push($measures,$value);
            $counter = explode("strMeasure",$key)[1];
            $newkey = 'Ingredient'.$counter;
            $measures[$newkey] = $value;
        }
    }

    return view("cocktail-details",compact('cocktail','ingredients','measures'));
});

// Testing

Route::get('/testing', function (Request $request){
    
    $page = (empty($request['page'])||!is_numeric($request['page']))?1:$request['page'];
    $ingredient = (empty($request['liq']))?'rum':$request['liq'];
    $offset = 5;

    $url = 'https://thecocktaildb.com/api/json/v1/1/filter.php?i='.$ingredient;
    $response = Http::get($url);
    $allcocktails = $response->json()['drinks'];
    echo 'There are '.count($allcocktails).' cocktails<br>';

    if($offset*($page-1)>count($allcocktails)){
        $page = 1;
    }
    echo 'Page: '.$page.'<br><br>';

    $cur_cocktails = array_slice($allcocktails,$offset*($page-1),$offset);

    echo 'There are '.count($cur_cocktails).' page-cocktails<br>';
    foreach($cur_cocktails as $cocktail){
        echo '- '.$cocktail['strDrink'].'<br>';
    }

    echo 'Last Page: '.ceil(count($allcocktails)/$offset).'<br>';


    return '<br>EOF';
});