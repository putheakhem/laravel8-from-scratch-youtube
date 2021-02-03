<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function show()
    {
//       $products = DB::table('products')->get();
        $products = Product::get();
       return view('product', [
           'products' => $products
       ]);
    }
}
