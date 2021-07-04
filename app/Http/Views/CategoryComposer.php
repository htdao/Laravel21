<?php

namespace App\Http\Views;

use App\Models\Category;
use Illuminate\View\View;

class CategoryComposer
{
    public function compose(View $view){
        $categories = Category::where('parent_id',0)->get();
        $view->with('categories',$categories);
    }
}
