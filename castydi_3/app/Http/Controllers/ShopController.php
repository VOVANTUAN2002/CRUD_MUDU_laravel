<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function products()
    {
        $products = Product::paginate(10);
        return view('frontend.websize.products', compact('products'));
    }
    public function category($id)
    {
        $category = Category::where('id', $id)->first();
        $id_category = $category->id;
        $products = Product::where('categories_id', $id_category)->paginate();
        return view('frontend.websize.products', compact('products'));
    }
}
