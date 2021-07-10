<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTrademarkRequest;
use App\Models\Product;
use App\Models\Trademark;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class TrademarkController extends Controller
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
            $trademarks = Trademark::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orderBy('updated_at', 'desc')->paginate(10);
        }else{
            $trademarks = Trademark::orderBy('updated_at', 'desc')->paginate(10);
        }
        return view('backend.trademarks.index', [
            'trademarks' => $trademarks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trademarks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrademarkRequest $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->get('name'));

        $trademark = Trademark::create($data);

        if($trademark){
            return redirect()->route('backend.trademark.index')->with("success", "Tạo mới thành công!");
        }
        return redirect()->route('backend.trademark.index')->with("error", "Tạo mới thất bại!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trademark = Trademark::find($id);
        return view('backend.trademarks.show', [
            'trademart' => $trademark,
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
        $trademark = Trademark::find($id);
        return view('backend.trademarks.edit', [
            'trademark' => $trademark,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTrademarkRequest $request, $id)
    {
        $trademark = Trademark::find($id);
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->get('name'));
        $data['updated_at'] = Carbon::now();

        $trademark->update($data);

        if($trademark){
            return redirect()->route('backend.trademark.index')->with("success", "Cập nhật thành công!");
        }
        return redirect()->route('backend.trademark.index')->with("error", "Cập nhật thất bại!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trademark = Trademark::find($id);

        $cate = $trademark->categories()->detach();
        $products = Product::where('trademark_id', $trademark->id)->get();
        if(count($products) > 0){
            foreach ($products as $product){
                $product->trademark_id = 0;
                $product->save();
            }
        }
        $trademark->delete();

        if($trademark){
            return redirect()->route('backend.trademark.index')->with("success", "Xoá thành công!");
        }
        return redirect()->route('backend.trademark.index')->with("error", "Xoá thất bại!");
    }
}
