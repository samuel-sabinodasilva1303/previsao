<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function search(Request $request)
    {
        $apiKey = '818f997d1ffc4dd99b4f2f743a6355fd';
        $city = $request->input('city');

        $client = new Client();
        $response = $client->get("https://api.weatherbit.io/v2.0/current?key={$apiKey}&city={$city}");

        $data = json_decode($response->getBody(), true);

        return view('results', ['data' => $data]);
    }
}
