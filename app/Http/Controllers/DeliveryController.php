<?php

namespace App\Http\Controllers;
use App\Models\Delivery;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{

    public function index(){

        return $deliverys= Delivery::all();

    }
    public function  store(Request $request){
        
        $delivery = Delivery::create($request->post());
        return response()->json([
            'message'=>'Category Created Successfully!!',
            'delivery'=>$delivery
        ]);

        //  $validator = Validator::make($request->all(), [
        //     'status' => 'required',
        //     'order_id' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        // } else {


        // Delivery::create([
        //     'status' => $request->input('status'),
        //     'order_id' => $request->input('order_id'),

        // ]);}
        // return response()->json(['req' => $request]);


    }
}
