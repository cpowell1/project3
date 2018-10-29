<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function info($name)
    {
        return view('dogs.info')->with(['name' => ucfirst($name)]);
    }
}
