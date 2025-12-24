<?php

namespace Vendor\ShopPackage\Http\Controllers;

use Vendor\ShopPackage\Models\Product;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('shop::products.index', compact('products'));
    }
}
