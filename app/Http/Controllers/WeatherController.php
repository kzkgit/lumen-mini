<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class WeatherController extends Controller
{
    /**
     * Store a new blog post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getWeather(Request $request)
    {
        $data = $this->validate($request, [
            'city' => 'required|min:3|max:200'
        ]);
        
        $curl = curl_init();
        
        $url = 'https://geocoding-api.open-meteo.com/v1/search';
        
        $url = sprintf("%s?%s", $url, http_build_query([
            'name' => $data['city'],
            'count' => 1,
            'language' => 'en',
            'format' => 'json'
        ]));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $result = json_decode($result);
        
        if ($result === null || !is_array($result->results) || sizeof($result->results) == 0)
        {
            curl_close($curl);
            return response()->json([], 422);
        }
        
        $result = $result->results[0];
        
        $name = $result->name;
        
        $url = 'https://api.open-meteo.com/v1/forecast';
        
        $url = sprintf("%s?%s", $url, http_build_query([
            'latitude' => $result->latitude,
            'longitude' => $result->longitude,
            'current' => 'temperature_2m'
        ]));
        
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($curl);
        $result = json_decode($result);
        
        if ($result === null)
        {
            curl_close($curl);
            return response()->json([], 422);
        }

        curl_close($curl);

        return response()->json([
            'city' => $name,
            'temperature' => "{$result->current->temperature_2m} {$result->current_units->temperature_2m}"
        ]);
    }
}
