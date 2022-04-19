<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * If we use the command php artisan make:controller CategoryController
 * and we add the flag --resource, the system will create the file with some
 * predefined functions (CRUD)
 */
class CategoryController extends Controller
{
    /**
     * We can add a middleware inside the controller
     */
    public function __construct()
    {
        // $this->middleware('product_token');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = 'Food';
        $category2 = 'Travel';
        // compact() is used when we want to send more than one variable
        // category.index refers to the view at this path /resources/views/category/index
        return view('category.index',compact('category','category2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
