<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($product)
    {
        $products = [
           'my-first-item' => "This is my first item",
           'my-second-item' => "this is my second item"
         ];

        if(! array_key_exists($product, $products)) {
            abort(404, "Not Found");
        }

        return view('product', [
           'product'  => $products[$product]
        ]);
    }
}
