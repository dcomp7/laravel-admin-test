<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Display the dashboard
     */
    public function index(Request $request): View
    {
        // Em uma circustância normal, colocaria esse tipo de integração por ajax (assíncrono).
        $forecastUrl = sprintf('%s/weather', env('FORECAST_DOMAIN'));
        $queryArr = ['key' => env('FORECAST_KEY')];

        $regionName = $request->input('query');
        if (! empty($regionName)) {
            $queryArr['city_name'] = $regionName;
        } else {
            $queryArr['user_ip'] = 'remote';
        }

        $forecast = [];
        $response = json_decode(Http::get($forecastUrl, $queryArr)->getBody()->getContents(), true);
        if (key_exists('results', $response)) {
            $forecast = $response['results'];
        }

        return view('dashboard', ['forecast' => $forecast]);
    }

}
