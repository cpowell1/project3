<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function info($name)
    {
        return 'You are reading the food amount for' . $name;
    }
}
