<?php

namespace Debik3090\ShopPackage\Http\Controllers;

use Debik3090\ShopPackage\Models\Product;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('shop::products.index', compact('products'));
    }
}
