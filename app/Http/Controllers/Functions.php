<?php

namespace App\Http\Controllers;


use App\ProductTypes;

class Functions extends Controller
{
    public function getProductTypes()
    {
       return ProductTypes::orderBy('sort','desc')->get();
    }
}
