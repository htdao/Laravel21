<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{

    public function showForm()
    {
       return view('frontend.accounts.register');
    }

    public function register(Request $request)
    {
//        User::create([
//            'name' => $request->get('name'),
//            'avatar' => 'images/auto.jpg',
//            'email' => $request->get('email'),
//            'phone' => $request->get('phone'),
//            'address' => $request->get('address'),
//            'role' => 2,
//            'password' => Hash::make($request['password']),
//        ]);
//        $this->guard()->login($user);
//        return redirect()->route('user.login.form');

        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->role = 2;
        $user->avatar = 'images/auto.jpg';

        $user->save();
        return redirect()->route('user.login.form');
    }

}
