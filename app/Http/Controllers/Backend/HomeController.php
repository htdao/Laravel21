<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        $slides = Home::orderBy('updated_at', 'desc')->paginate(10);
        return view('backend.wed.index',[
            'slides' => $slides,
        ]);
    }

    public function create(Request $request){
        return view('backend.wed.create');
    }

    public function store(Request $request){

        $slide = new Home();
        $slide->title = $request->title;
        $slide->description = $request->description;
        $slide->content = $request->contentt;
        $slide->created_at = Carbon::now();
        $slide->updated_at = Carbon::now();

        if ($request->hasFile('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $slide->image = $path;
        }

        $slide->save();
        if($slide){
            return redirect()->route('backend.home.index')->with("success", "Thêm mới thành công!");
        }
        return redirect()->route('backend.home.index')->with("error", "Thêm mới thất bại!");
    }

    public function edit($id){
        $slide = Home::find($id);
        return view('backend.wed.edit', [
            'slide' => $slide,
        ]);
    }

    public function update(Request $request, $id){
        $slide = Home::find($id);
        $slide->title = $request->title;
        $slide->description = $request->description;
        $slide->content = $request->contentt;
        $slide->created_at = Carbon::now();
        $slide->updated_at = Carbon::now();

        if ($request->hasFile('image')){

            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $disk_name = 'public';
            $path = Storage::disk('public')->putFileAs('images', $file, $name);

            $slide->image = $path;
        }

        $slide->save();
        if($slide){
            return redirect()->route('backend.home.index')->with("success", "Cập nhật thành công!");
        }
        return redirect()->route('backend.home.index')->with("error", "Cập nhật thất bại!");
    }

    public function destroy($id){
        $slide = Home::find($id);
        $slide->delete();
        return redirect()->route('backend.wed.index');
    }

    public function show($id){
        $slide = Home::find($id);
        return view('backend.wed.show', [
            'slide' => $slide,
        ]);
    }
}
