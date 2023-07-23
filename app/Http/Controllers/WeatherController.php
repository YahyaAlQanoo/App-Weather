<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public  function index(Request $request)
    {
        $request->validate([
            'city' => 'required'
        ]);
        $city = Http::get('http://api.openweathermap.org/geo/1.0/direct?q='. $request->city .'&appid=5b111e3737b3102908663fd62419fd0b');
        
 
        
        $lat =  $city[0]['lat'];
        $lon =  $city[0]['lon'];


        $data  = Http::get('api.openweathermap.org/data/2.5/onecall?appid=5b111e3737b3102908663fd62419fd0b&lat='.$lat.'&lon='.$lon.'&units=metric');
        // return $data;

        $date =  $data["current"]["dt"];

        $date_and_time =  Carbon::parse($date)->dayName . ' , '.  date( "M", $date). ' ' . date( "d", $date) . ', '.  date( "H:i", $date);   
        $temp = $data["current"]["temp"];
        $feels_like = $data["current"]["feels_like"];
        $humidity = $data["current"]["humidity"];
        $pressure = $data["current"]["pressure"];
        $wind_speed = $data["current"]["wind_speed"];
        $description = $data["current"]["weather"][0]["description"];
        $timezone = $data["timezone"];
    
        $dailys = $data["daily"];


        return view('index',compact('date_and_time','temp','feels_like','humidity','pressure','wind_speed','description','dailys','timezone'));
    }
}
