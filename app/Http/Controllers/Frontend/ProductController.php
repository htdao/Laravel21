<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('frontend.products.index', [
            'categories' => $categories
        ]);
    }

    public function show(){
        return view('frontend.products.show');
    }
}
