<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('frontend.websize.home', compact('products'));
    }
    public function product_detail($id)
    {
        $product = Product::find($id);
        // dd($product);
        // $products = Product::where('categories_id',$product->categories_id)->get();
        return view('frontend.websize.productsdetail', [
            'product' => $product
        ]);
    }
}
