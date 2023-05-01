<?php

namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
  
class WeatherController extends Controller
{
    /**
     *
     * @return response()
     */
    public function index()
    {
        if(Auth::check()){
            $client = new \GuzzleHttp\Client();
            $requestClient = $client->get('https://api.hgbrasil.com/weather');
            $weather = json_decode($requestClient->getBody()->getContents(), true);
        
            return view('weather')->with('weather', $weather);;
        }
  
        return redirect("login")->withSuccess('Acesso negado');
    }
    
}