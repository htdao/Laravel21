<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdatePassWordRequestFE;
use App\Http\Requests\UpdateUserRequest;
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
    public function index(Request $request)
    {
        $search = $request->input('search');
        $role = $request->input('role');
        if(!empty($search)){
            $users = User::query()
                ->where('name', 'LIKE', "%{$search}%")
                ->orderBy('updated_at', 'desc')->paginate(10);
        }
        if(!empty($role)){
            $users = User::query()
                ->where('role', $role)
                ->orderBy('updated_at', 'desc')->paginate(10);
        }else{
            $users = User::orderBy('updated_at', 'desc')->paginate(10);
        }
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
        $this->authorize('create', User::class);
         return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
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

        if($user){
            return redirect()->route('backend.user.index')->with("success", "Th??m m???i th??nh c??ng!");
        }
        return redirect()->route('backend.user.index')->with("error", "Th??m m???i th???t b???i!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('backend.users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
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
    public function update(UpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        $user->role = $request->get('role');
        if ($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $user->avatar = $path;

        }
        $user->save();

        if($user){
            return redirect()->route('backend.user.index')->with("success", "C???p nh???t th??nh c??ng!");
        }
        return redirect()->route('backend.user.index')->with("error", "C???p nh???t th???t b???i!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('update', $user);
//        $user= User::find($id);
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

    public function account($id){
        $user = User::find($id);
        $products = Product::all();
        return view('backend.users.user',[
            'user' => $user,
            'products' => $products,
        ]);
    }

    public function updateAcc(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->address = $request->get('address');
        $user->phone = $request->get('phone');
        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $user->avatar = $path;

        }
        $user->save();
        if($user){
            return redirect()->route('backend.user.account',$user->id)->with("success", "C???p nh???t th??nh c??ng!");
        }
        return redirect()->route('backend.user.account',$user->id)->with("error", "C???p nh???t th???t b???i!");
    }

    public function updatePass(UpdatePassWordRequestFE $request, $id){
        dd('a');
        $user = User::find($id);
        $user->password = bcrypt($request->new_pwd);
        $user->save();
        if($user){
            return redirect()->route('backend.user.account', $user->id)->with("success", "C???p nh???t th??nh c??ng!");
        }
        return redirect()->route('backend.user.account', $user->id)->with("error", "C???p nh???t th???t b???i!");
    }
}
