<?php

use App\Http\Controllers\WeatherController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data  = Http::get('api.openweathermap.org/data/2.5/onecall?appid=5b111e3737b3102908663fd62419fd0b&lat=31.5128679&lon=34.4581358&units=metric');
    
    $date =  $data["current"]["dt"];

    $date_and_time =  Carbon::parse($date)->dayName . ', '.  date( "M", $date). ' ' . date( "d", $date) . ', '.  date( "H:i", $date);   
    $temp = $data["current"]["temp"];
    $feels_like = $data["current"]["feels_like"];
    $humidity = $data["current"]["humidity"];
    $pressure = $data["current"]["pressure"];
    $wind_speed = $data["current"]["wind_speed"];
    $description = $data["current"]["weather"][0]["description"];
    $timezone = $data["timezone"];

    $dailys = $data["daily"];

    return view('index',compact('date_and_time','temp','feels_like','humidity','pressure','wind_speed','description','timezone','dailys'));
})->name('index');



Route::post('/store', [WeatherController::class,'index'])->name('store');
