<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('/my-page'); // Create a view named 'my-page.blade.php'
    }
}
