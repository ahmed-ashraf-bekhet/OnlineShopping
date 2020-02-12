<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\product;


class UserController extends Controller
{
    public function getAllProducts()
    {
        $products = product::all();
        return $products;
        // $names = $products->map(function($product){
        //     return $product->only(['Name']);
        // });
        // return $names;
    }
}
