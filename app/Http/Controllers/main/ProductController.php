<?php

namespace App\Http\Controllers\main;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    function index(){
        // get all products
        $products = Product::all();
        return view ('products.productspage',['products'=>$products]);
    }
}
