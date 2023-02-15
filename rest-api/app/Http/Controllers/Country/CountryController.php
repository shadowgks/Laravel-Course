<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\Country\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    function index()
    {
        return response()->json(Country::get(), 200);
        // return json_decode(Country::get());
    }

    function edit($id)
    {
        return response()->json(Country::find($id), 200);
    }

    function store(Request $request)
    {
        $create = Country::create($request->all());
        return response()->json($create, 201);
    }

    function update(Request $request, Country $country)
    {
        $country->update($request->all());
        return response()->json($country, 200);
    }

    function distroy(Country $country)
    {
        $country->delete();
        return response()->json(null, 204);
    }
}
