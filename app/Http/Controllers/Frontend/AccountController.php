<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index($id){

        $user = User::find($id);
        $orders = $user->orders()->get();
        return view('frontend.accounts.account', [
            'user' => $user,
            'orders' => $orders,
        ]);
    }
}
