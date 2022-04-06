<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    //
    public function index(){
        return Dashboard::all();
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'vehicles' => 'required',
            'orders' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        } else {

        Dashboard::create([
            'vehicles' => $request->input('vehicles'),
            'orders' => $request->input('orders'),

        ]);}
        return response()->json(['req' => $request]);
    }
public function create(){

}
public function destroy(Request $request){
    return response()->json([$request]);

}

public function show(){
    return response()->json([]);
}

}
