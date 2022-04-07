<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //returningallitems
        $categories=Category::all();

        // $categories = Category::all(['id','title','description']);
         return response()->json($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
       //
        return response()->json([$category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     //creating a new record  in the database

        $category = Category::create($request->post());
        return response()->json([
            'message'=>'Category Created Successfully!!',
            'category'=>$category
        ]);


        // $validator = Validator::make($request->all(), [
        //     'title' => 'required',
        //     'description' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     return response()->json(['status' => 422, 'errors' => $validator->errors()]);
        // } else {


        // Category::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),

        // ]);}
        // return response()->json(['req' => $request]);

        DB::commit();
       return response()->json([
           'order'=>'updated',
           'status'=>'updated'
       ]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {
        //

        $category=Category::find($id);
        $category->update($request->all());
        return $category;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
       //return response ()->json();

       return Category::destroy($id);
    }
    public function delete (Request $request){
       return response()->json();

    }
    public function search(Request $request){


        return response()->json();
    }

    


}
