<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){

        return view('adminIndex');


    }
    public function productInsert(){

        // echo "miko"; die;
        return view('adminIndex');


    }
}
