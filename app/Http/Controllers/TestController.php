<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function show(){
        return "SHOW";
    }
    // To insert a function with a query param we can use the $
    function params($id){
        return "SHOW THE ID: ".$id;
    }
    // We set the $id to null because it's an optional param i the Routes
    function blog($slug, $id=null){
        return "The name of our post is ${slug} of id: ${id}";
    }
    function users(){
        return "USERS";
    }
    // Functions for the middleware
    function showProducts(){
        return "List of products";
    }
    function noToken(){
        return "You don't have access to the list of products";
    }
}
