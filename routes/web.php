<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('gpt');
    //return view('welcome');
});
Route::get('/gpt', function () {
    return view('gpt');
});
Route::get('/pharmacies-par-commune/{id}', function($id) {
    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIwMDIyNTA1ODU4MzE2NDciLCJpc3MiOiJQQVRJRU5UIiwiaWF0IjoxNzQ3MDg0NzgzLCJleHAiOjE3NDcwODgzODN9.S0sMywcFkT8xnvqqCurUPkIEe_Os8m2iSnt8-h60mXk',
        'Accept' => 'application/json'
    ])->get(env('API_BASE_URL_PHARMA') . "/pharma/pharmacies/gardeIntervalByCommune?communeId={$id}");

    return $response->json();
});

Route::get('/pharmacie-garde', function () {

    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJzdWIiOiIwMDIyNTA1ODU4MzE2NDciLCJpc3MiOiJQQVRJRU5UIiwiaWF0IjoxNzQ3MDg0NzgzLCJleHAiOjE3NDcwODgzODN9.S0sMywcFkT8xnvqqCurUPkIEe_Os8m2iSnt8-h60mXk',
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->get(env('API_BASE_URL_PHARMA') . '/pharma/communes/search?page=0&size=1000');

    if ($response->status() == 200) {
        $communes = $response->json();

        return view('gpt-garde', compact('communes'));
    } else {
        return back()->withErrors(["Impossible de charger les communes. Veuillez réessayer!!"]);
    }

});
Route::get('/garde', function () {
    return view('garde');
});
