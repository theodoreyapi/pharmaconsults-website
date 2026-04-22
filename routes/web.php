<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    //return view('welcome');
})->name('home');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('mentions', function () {

    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->get(env('API_BASE_URL_PHARMA') . '/pharma/parametres-generaux/getbyType/MENTIONS LEGALES');

    if ($response->status() == 200) {
        $communes = $response->json();

        return view('mentions', compact('communes'));
    } else {
        return back()->withErrors(["Impossible de charger les communes. Veuillez réessayer!!"]);
    }
});
Route::get('privacy', function () {

    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->get(env('API_BASE_URL_PHARMA') . '/pharma/parametres-generaux/getbyType/POLITIQUE CONFIDENTIALITES');

    if ($response->status() == 200) {
        $communes = $response->json();

        return view('privacy', compact('communes'));
    } else {
        return back()->withErrors(["Impossible de charger les communes. Veuillez réessayer!!"]);
    }
});
Route::get('terms', function () {

    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->get(env('API_BASE_URL_PHARMA') . '/pharma/parametres-generaux/getbyType/CONDITIONS GENERALES');

    if ($response->status() == 200) {
        $communes = $response->json();

        return view('terms', compact('communes'));
    } else {
        return back()->withErrors(["Impossible de charger les communes. Veuillez réessayer!!"]);
    }
});

Route::get('/pharmacies-par-commune/{id}', function ($id) {
    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Accept' => 'application/json'
    ])->get(env('API_BASE_URL_PHARMA') . "/pharma/pharmacies/gardeIntervalByCommune?communeId={$id}");

    return $response->json();
});

Route::get('pharmacies', function () {

    $response = Http::withOptions([
        'verify' => false
    ])->withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->get(env('API_BASE_URL_PHARMA') . '/pharma/communes/search?page=0&size=1000');

    if ($response->status() == 200) {
        $communes = $response->json();

        return view('pharmacie', compact('communes'));
    } else {
        return back()->withErrors(["Impossible de charger les communes. Veuillez réessayer!!"]);
    }
})->name('pharmacies');
