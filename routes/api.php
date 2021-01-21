<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/data',function(){
    $response = Http::get('https://data.cityofchicago.org/resource/ydr8-5enu.json');
    return json_decode( $response->getBody()->getContents() );
});
