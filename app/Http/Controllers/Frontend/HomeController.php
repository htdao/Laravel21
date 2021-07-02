<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('frontend.home', [
            'categories' => $categories
        ]);
    }

    public function contact(){
        return view('frontend.contact');
    }
}
