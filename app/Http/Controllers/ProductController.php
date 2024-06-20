<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Simulated array of products
        $products = [
            ['Gadgets' => 'Phone', 'price' => 20000],
            ['Books' => 'Non-Fiction', 'price' => 500],
            ['Movies' => 'Kong', 'price' => 200],
            ['Anime' => 'One Piece', 'price' => 100],
            ['Restaurants' => 'FoodComma', 'price' => 150],
        ];

        return view('products.index', compact('products'));
    }
}
