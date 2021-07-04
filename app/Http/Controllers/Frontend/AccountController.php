<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        return view('frontend.accounts.account');
    }

    public function loginForm(){
        return view('frontend.accounts.login');
    }

}
