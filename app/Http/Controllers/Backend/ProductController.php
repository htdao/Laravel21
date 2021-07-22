<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Trademark;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $key = '';
        $search = $request->input('search');
        $trademark = $request->input('trademark');
        $category = $request->input('category');
        $status = $request->input('status');

        $trademarks = Trademark::all();
        $categories = Category::all();
        if(!empty($search)){
            $key = $request->get('search');
            $products = Product::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orderBy('updated_at', 'desc')->paginate(10);
        }elseif (!empty($trademark)){
            $products = Product::query()
                ->where('trademark_id', $trademark)
                ->orderBy('updated_at', 'desc')->paginate(10);
        }elseif (!empty($category)){
            $products = Product::query()
                ->where('category_id', $category)
                ->orderBy('updated_at', 'desc')->paginate(10);
        }elseif (!empty($status)){
            $products = Product::query()
                ->where('status', $status)
                ->orderBy('updated_at', 'desc')->paginate(10);
        }else{
            $products = Product::orderBy('updated_at', 'desc')->paginate(10);
        }

        return view('backend.products.index', [
            'products'=>$products,
            'trademarks' => $trademarks,
            'categories' => $categories,
            'key' => $key,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $trademarks = Trademark::all();
        return view('backend.products.create', [
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
    public function store(StoreProductRequest $request)
    {
        $data = $request->except('_token');
        if ($request->has('key') || $request->has('val')) {
            $key = $request->get('key');
            $val = $request->get('val');
            $list = [];
            $merge = [];
            for ($i = 0; $i < count($key); $i++) {
                $list = [$key[$i] => $val[$i]];
                $merge = array_merge($merge, $list);
            }
            $data['content_more'] = json_encode($merge, JSON_UNESCAPED_UNICODE);
        }

        $data['slug'] = Str::slug($request->get('name'));
        $data['user_id'] = Auth::user()->id;
        $data['quan_sold'] = 0;
        $data['created_at'] = Carbon::now();

        $product = Product::create($data);

        if ($request->hasFile('image')) {
            $files = $request->file('image');

            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $disk = 'public';
                $path = Storage::disk($disk)->putFileAs('images', $file, $name);

                $image = new Image();
                $image->name = $name;
                $image->disk = $disk;
                $image->path = $path;
                $image->product_id = $product->id;
                $image->save();
            }
        }

        if ($product) {
            return redirect()->route('backend.product.index')->with("success", 'Tạo mới thành công');
        }
        return redirect()->route('backend.product.index')->with("error", 'Tạo mới thất bại');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $product = Product::find($id);
//        $trademarks = Trademark::all();
//        $trademark = null;
//        for ($i=0;$i<count($trademarks);$i++) {
//            if($product->trademark_id == $trademarks[$i]) $trademark = $trademarks[$i]->name;
//            else $trademark = 'null';
//        }
//        dd($trademark);
//        return view('backend.products.show', [
//            'product' => $product,
//            'trademark' => $trademark,
//        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
//        $product = Product::find($id);
        $this->authorize('update', $product);
        $categories = Category::all();
        $trademarks = Trademark::all();
        $category = Category::find($product->category_id);
        return view('backend.products.edit', [
            'categories' => $categories,
            'product' => $product,
            'category' => $category,
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
    public function update(UpdateProductRequest $request, Product $product)
    {
//        $product = Product::find($id);

        $data = $request->except('_token');

        if ($request->has('key')) {
            $key = $request->get('key');
            $val = $request->get('val');
            $list = [];
            $merge = [];
            for ($i = 0; $i < count($key); $i++) {
                $list = [$key[$i] => $val[$i]];
                $merge = array_merge($merge, $list);
            }
            $data['content_more'] = json_encode($merge, JSON_UNESCAPED_UNICODE);
        } else {
            $data['content_more'] = null;
        }

        $data['slug'] = Str::slug($request->get('name'));
        $data['updated_at'] = Carbon::now();

        $product->update($data);

        if ($request->hasFile('image')) {
            $files = $request->file('image');

            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $disk = 'public';
                $path = Storage::disk($disk)->putFileAs('images', $file, $name);

                $image = new Image();
                $image->name = $name;
                $image->disk = $disk;
                $image->path = $path;
                $image->product_id = $product->id;
                $image->save();
            }
        }
        $deleteImg = $request->delete_img;
        if (!empty($deleteImg)) {
            foreach ($deleteImg as $dete) {
                $imgDelete = Image::find($dete);
                Storage::disk('public')->delete($imgDelete->path);
                $imgDelete->delete();
            }
        }

        if ($product) {
            return redirect()->route('backend.product.index')->with("success", 'Thay đổi thành công');
        }
        return redirect()->route('backend.product.index')->with("error", 'Thay đổi thất bại');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
//        $product= Product::find($id);
        $this->authorize('delete', $product);
        $deleteImg = Image::where('product_id', $product->id)->get();
        if (!empty($deleteImg)) {
            foreach ($deleteImg as $dete) {
                Storage::disk('public')->delete($dete->path);
                $dete->delete();
            }
        }
        $product->delete();

        if ($product) {
            return redirect()->route('backend.product.index')->with("success", 'Xóa thành công');
        }
        return redirect()->route('backend.product.index')->with("error", 'Xóa thất bại');
    }

}
