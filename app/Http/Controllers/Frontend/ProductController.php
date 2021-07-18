<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Trademark;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request){
        $min_price = Product::min('sale_price');
        $max_price = Product::max('sale_price');

        $trademarks = Trademark::all();
        if (isset($_GET['sort_by'])){
            $sort_by = $_GET['sort_by'];
            if ($sort_by == 'giam_dan'){
                $products = Product::orderBy('sale_price', 'DESC')->paginate(24);
            } elseif ($sort_by == 'tang_dan'){
                $products = Product::orderBy('sale_price', 'ASC')->paginate(24);
            } elseif ($sort_by == 'kytu_az'){
                $products = Product::orderBy('name', 'ASC')->paginate(24);
            } elseif ($sort_by == 'kytu_za'){
                $products = Product::orderBy('name', 'DESC')->paginate(24);
            }
        }elseif (isset($_GET['amount_start']) && ($_GET['amount_end'])){
            $min = $_GET['amount_start'];
            $max = $_GET['amount_end'];
            $products = Product::whereBetween('sale_price', [$min, $max])->orderBy('sale_price', 'ASC')->paginate(24);
        } else{
            $products = Product::orderBy('created_at', 'desc')->paginate(24);
        }
        return view('frontend.shop',[
            'min_price' => $min_price,
            'max_price' => $max_price,
            'products' => $products,
            'trademarks' => $trademarks,
        ]);
    }

    public function show($id){
        $product = Product::find($id);
        $product->content_more = json_decode($product->content_more, true);
        $productMBs = Product::where('category_id',$product->category_id)->orderBy('quan_sold', 'DESC')->limit(5)->get();
//        dd($product->category_id);
        return view('frontend.products.product',[
            'product' => $product,
            'productMBs' => $productMBs,
        ]);
    }

    public function cart(){
        return view('frontend.products.cart');
    }

    public function checkout(){
        $items = Cart::content();
        return view('frontend.products.checkout')->with(['items' => $items]);
    }

}
