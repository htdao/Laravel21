<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if(!empty($search)){
            $categories = Category::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orderBy('updated_at', 'desc')->paginate(10);
        }else{
            $categories = Category::orderBy('updated_at', 'desc')->paginate(10);
        }
        $parents = Category::where('parent_id',0)->get();
        return view('backend.categories.index',[
            'categories' => $categories,
            'parents' => $parents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('parent_id',0)->get();
        $trademarks = Trademark::all();
        return view('backend.categories.create', [
            'categories' => $categories,
            'trademarks' => $trademarks,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($data['name']);
        $category = Category::create($data);

        if(!empty($data['trademark_id'])){
            $category->trademarks()->attach($data['trademark_id'], [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        if($category){
            return redirect()->route('backend.category.index')->with("success", "Th??m m???i th??nh c??ng!");
        }
        return redirect()->route('backend.category.index')->with("error", "Th??m m???i th???t b???i!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        $parent = Category::where('id',$category->parent_id)->get();
        return view('backend.categories.show', [
            'category' => $category,
            'parent' => $parent,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->role == 0) {
            $trademarks = Trademark::all();
            $category = Category::find($id);
            $categories = Category::all();
            return view('backend.categories.edit', [
                'category' => $category,
                'categories' => $categories,
                'trademarks' => $trademarks,
            ]);
        }else{
            return redirect()->route('backend.category.index')->with("error", "Kh??ng c?? quy???n s???a!");
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        if (Auth::user()->role == 0) {
            $category = Category::find($id);
            $data = $request->except('_token');
            $data['slug'] = Str::slug($request->get('name'));
            $data['updated_at'] = Carbon::now();

            $category->update($data);

            if (!empty($data['trademark_id'])) {
                $category->trademarks()->sync($data['trademark_id'], [
                    'updated_at' => Carbon::now(),
                ]);

            } else {
                $category->trademarks()->detach();
            }

            if ($category) {
                return redirect()->route('backend.category.index')->with("success", "C???p nh???t th??nh c??ng!");
            }
            return redirect()->route('backend.category.index')->with("error", "C???p nh???t th???t b???i!");
        }
        else{
            return redirect()->route('backend.category.index')->with("error", "Kh??ng c?? quy???n c???p nh???t!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->role == 0) {
            $category = Category::find($id);
            $children = Category::where('parent_id', $category->id)->get();
            $products = Product::where('category_id', $category->id)->get();

            if (count($children) > 0) {
                foreach ($children as $child) {
                    $child->parent_id = 0;
                    $child->save();
                }
            }
            if (count($products) > 0) {
                foreach ($products as $product) {
                    $product->category_id = 0;
                    $product->save();
                }
            }
            $category->trademarks()->detach();
            $category->delete();

            if ($category) {
                return redirect()->route('backend.category.index')->with("success", "Xo?? th??nh c??ng!");
            }
            return redirect()->route('backend.category.index')->with("error", "Xo?? th???t b???i!");
        }else{
            return redirect()->route('backend.category.index')->with("error", "Kh??ng ???????c quy???n xo??!");
        }
    }


}
