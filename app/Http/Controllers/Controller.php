<?php

namespace App\Http\Controllers;

use App\Models\Product; // Replace with your actual Product model

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Fetch all products (adjust query as needed)

        return view('products.index', ['products' => $products]);
    }
}