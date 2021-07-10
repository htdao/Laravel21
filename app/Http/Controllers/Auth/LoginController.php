<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    public function showLoginFormUser()
    {
        return view('frontend.accounts.login');
    }

    public function login(Request $request)
    {
        $data = $request ->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt($data)) {
            $request ->session()->regenerate();

            if(Auth::User()->role == 0 || Auth::User()->role == 1){
                return redirect()->intended('admin/dashboard');
            }else{
                return redirect()->intended('/');
            }

        }else{
            return back()->withErrors([
                'email' => 'Thông tin user không đúng'
            ]);
        }
    }

    public function userLogin(Request $request)
    {
        $data = $request ->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt($data)) {
            $request ->session()->regenerate();
            return redirect()->intended('/');

        }else{
            return back()->withErrors([
                'email' => 'Thông tin user không đúng'
            ]);
        }
    }

}
