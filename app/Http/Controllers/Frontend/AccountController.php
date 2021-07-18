<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePassWordRequestFE;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UpdateUserRequestFE;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index($id){

        $user = User::find($id);
        $orders = $user->orders()->orderBy('status', 'ASC')->get();
        return view('frontend.accounts.account', [
            'user' => $user,
            'orders' => $orders,
        ]);
    }

    public function update(UpdateUserRequestFE $request, $id){

        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->role = 2;
        if ($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $user->avatar = $path;
        }
        $user->save();
        if($user){
            return redirect()->route('frontend.account', $user->id)->with("success", "Cập nhật thành công!");
        }
        return redirect()->route('frontend.account', $user->id)->with("error", "Cập nhật thất bại!");
    }

    public function updateP(UpdatePassWordRequestFE $request, $id){
        $user = User::find($id);
        $user->password = bcrypt($request->new_pwd);
        $user->save();
        if($user){
            return redirect()->route('frontend.account', $user->id)->with("success", "Cập nhật thành công!");
        }
        return redirect()->route('frontend.account', $user->id)->with("error", "Cập nhật thất bại!");
    }
}
