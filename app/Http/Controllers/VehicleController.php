<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleController extends Controller
{
    //

    public function index(){
        return Vehicle::all();
    }

    public function store(Request $request){


        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'order_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {


        Vehicle::create([
            'order_id' => $request->input('order_id'),
            'status' => $request->input('status'),

        ]);}
        return response()->json(['req' => $request]);
    }
}
