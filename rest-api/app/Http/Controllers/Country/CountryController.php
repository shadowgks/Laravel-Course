<?php

namespace App\Http\Controllers\Country;

use App\Http\Controllers\Controller;
use App\Models\Country\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{
    function index()
    {
        $country = Country::get();
        if (is_null($country)) {
            return response()->json('Not found data!', 404);
        }
        return response()->json($country, 200);
        // return json_decode(Country::get());
    }

    function edit($id)
    {
        $country = Country::find($id);
        if (is_null($country)) {
            return response()->json('Country not found!', 404);
        }
        return response()->json($country, 200);
    }

    function store(Request $request)
    {
        $rules = [
            'iso'   => 'required|min:2',
            'name'  => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        $create = Country::create($request->all());
        if (is_null($create)) {
            return response()->json('Somthing not correct for this create country please try again!', 404);
        }
        return response()->json($create, 201);
    }

    function update(Request $request, $id)
    {
        $country = Country::find($id);
        if (is_null($country)) {
            return response()->json('Somthing not correct for this update country please try again!', 404);
        }
        $country->update($request->all());
        return response()->json($country, 200);
    }

    function distroy($id)
    {
        $country = Country::find($id);
        if (is_null($country)) {
            return response()->json('Not found this country!', 404);
        }
        $country->delete();
        return response()->json(null, 204);
    }
}
