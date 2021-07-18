<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Revenue;
use App\Models\Trademark;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products = Product::orderBy('updated_at', 'desc')->get();
        $users = User::all();
        $categories = Category::all();
        $trademarks = Trademark::all();
        $revenues = Revenue:: whereBetween('created_at', [Carbon::now()->startOfMonth(), Carbon::now()->endOfMonth()])->orderBy('created_at', 'ASC')->get();
        $sumR = 0;
        foreach ($revenues as $revenue){
            $sumR += $revenue->total_price;
        }
        return view('backend.dashboard')->with([
            'users'         => $users,
            'products'      => $products,
            'categories'    => $categories,
            'trademarks'    => $trademarks,
            'sumR'       => $sumR,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

//    public function search(Request $request){
//        $search = $request->input('search');
////        dd($search);
//        $products = Product::query()
////            ->where('name', 'LIKE', "%{$search}%")
//            ->where('category_id', 'LIKE', "%{$search}%")
////            ->orWhere('trademark_id', 'LIKE', "%{$search}%")
////            ->orWhere('status', 'LIKE', "%{$search}%")
//        ->get();
//        dd($products);
//        // Return the search view with the resluts compacted
//        return redirect()->route('backend.dashboard',[
//            'products' => $products,
//        ]);
//    }
}
