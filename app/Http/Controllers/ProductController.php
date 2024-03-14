<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): View
    {
        $product = Product::query()->latest()->paginate(10);

        return view('products.index', compact('product'));
    }
}
