<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * If we use the command php artisan make:controller ApiProductController
 * and we add the flag --api, the system will create the file with some
 * predefined functions (CRUD) but only for APIs.
 * In effect, there is no function create or edit beacuse there's no need to render views
 */
class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * This is the POST method
         * To access this function we must use postman
         */
        // dd($request->all()); // to show all the data of the body
        // dd($request->input('name')); // get only the parameter 'name'
        // dd($request->query()); // to get all the query params in the url
        // dd($request->query('name')); // to get the query param 'name' in the url
        // dd($request->boolean('is_active'));
        /**
         * There is also a different way to get the inputs in a request
         */
        // dd($request->name); // this gets the param name from the form-data (input) or the url (query params)
        // dd($request->all()); // to get all the parameters sent
        // dd($request->only(['name', 'lastname'])); // gets only the selected parameters, no matter how many we send
        // dd($request->except(['name'])); // gets all the parameters except the elencated ones
        // dd($request->has('age')); // to verify if it contains the parameter
        // dd($request->has(['age', 'name'])); // it can be an array of parameters
        dd($request->filled(['age', 'name'])); // to check if the parameter IS NOT EMPTY!!!
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
