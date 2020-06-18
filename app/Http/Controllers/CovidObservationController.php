<?php

namespace App\Http\Controllers;

use App\CovidObservation;
use Illuminate\Http\Request;

class CovidObservationController extends Controller
{
    public function getCovid(Request $request)
    {
    	if ($request->has('observation_date')) {
    		
    		$result = CovidObservation::where('observation_date', $request->observation_date)
    				->select(['country','confirmed', 'deaths', 'recovered'])
    				->get()
    				->take($request->max_results)
    				->toArray();
    	} else {
    		$result = CovidObservation::select(['country','confirmed', 'deaths', 'recovered'])
    				->get()
    				->toArray();
    	}

    		$data['observation_date'] = $request->observation_date;
    		$data['countries'] = $result;

    		return response()->json($data, 200);
    }
}
