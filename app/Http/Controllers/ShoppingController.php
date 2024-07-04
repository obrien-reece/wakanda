<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function index() {

        $products = Products::all();

        return view('shop', [
            'products' => $products
        ]);
    }
}
