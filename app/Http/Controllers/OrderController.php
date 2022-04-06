<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    //
    public function index(Request $request){
        $order=Order ::all();
        //return Order::all();
    }

    public function store(Request $request){


        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'vehicle_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {


        Order::create([
            'vehicle_id' => $request->input('vehicle_id'),
            'status' => $request->input('status'),

        ]);}
        return response()->json(['req' => $request]);
    }
    public function delete(Request $requset){
        return response()->json();
    }
}
