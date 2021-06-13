<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    function index(){
        return view ('products.productspage');
    }
}
