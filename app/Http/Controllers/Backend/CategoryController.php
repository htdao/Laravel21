<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('updated_at', 'desc')->paginate(10);
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
            return redirect()->route('backend.category.index')->with("success", "Thêm mới thành công!");
        }
        return redirect()->route('backend.category.index')->with("error", "Thêm mới thất bại!");

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
        $trademarks = Trademark::all();
        $category = Category::find($id);
        $categories = Category::all();
        return view('backend.categories.edit', [
            'category' => $category,
            'categories' => $categories,
            'trademarks' => $trademarks,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategoryRequest $request, $id)
    {
        $category = Category::find($id);
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->get('name'));
        $data['updated_at'] = Carbon::now();

        $category->update($data);

        if(!empty($data['trademark_id'])){
            $category->trademarks()->sync($data['trademark_id'],[
                'updated_at' => Carbon::now(),
            ]);

        }else{
            $category->trademarks()->detach();
        }

        if($category){
            return redirect()->route('backend.category.index')->with("success", "Cập nhật thành công!");
        }
        return redirect()->route('backend.category.index')->with("error", "Cập nhật thất bại!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $children = Category::where('parent_id', $category->id)->get();
        $products = Product::where('category_id', $category->id)->get();
        if(count($children) > 0){
            foreach ($children as $child){
                $child->parent_id = 0;
                $child->save();
            }
        }
        if(count($products) > 0){
            foreach ($products as $product){
                $product->category_id = 0;
                $product->save();
            }
        }
        $category->trademarks()->detach();
        $category->delete();

        if($category){
            return redirect()->route('backend.category.index')->with("success", "Xoá thành công!");
        }
        return redirect()->route('backend.category.index')->with("error", "Xoá thất bại!");
    }


}
