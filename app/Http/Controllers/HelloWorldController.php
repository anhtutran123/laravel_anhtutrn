<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    //Show
    public function show()
    {
        return view('hello_world/show');
    }
}
