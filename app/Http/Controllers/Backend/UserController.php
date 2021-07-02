<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = User::orderBy('updated_at', 'desc')->paginate(10);
        return view('backend.users.index', [
                'users'=>$users
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->role = $request->get('role');

        if ($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $user->avatar = $path;

        }else{
            dd('khong co file');
        }

        $user->save();

        return redirect()->route('backend.user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
//        $this->authorize('update', $user);
//        $user = User::find(id);
        return view('backend.users.edit',[
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
//        $user = User::find(id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->role = $request->get('role');
        if ($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $user->avatar = $path;

        }else{
            dd('khong co file');
        }
        $user->save();

        return redirect()->route('backend.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();

        return redirect()->route('backend.user.index');
    }

    public function showProducts($id){
        $products = User::find($id)->products;
        return view('backend.users.product', [
            'products' => $products
        ]);
        // dd($products);
    }
}
