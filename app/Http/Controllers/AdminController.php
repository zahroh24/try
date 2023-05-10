<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\menu;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_menu');
    }
    public function upload(Request $request){
        
        menu::create([
            "Name" => $request->Name,
            "Price" => $request->Price,
            "Categories" => $request->Categories,
            "Description" => $request->Description,
            
            ]);
        $menu=new menu;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('menuimage', $imagename);
        $menu->Image=$imagename;


        $menu->save();
        return redirect()->back()->with('message', 'Menu Added Successfully');
    } 
    public function showmenu(){
        $data = menu::all();
        return view('admin.showmenu', compact('data'));
    }
    Public function deletemenu($id){
        $data=menu::find($id);
        $data->Delete();
        return redirect()->back();

    }
    public function updatemenu($id){
        $data=menu::find($id);
        return view('admin.update_menu');
    }
    public function update(Request $request, $id)
    {
       $data=menu::find($id);
       $image=$request->image;
       if($image){
        $imagename=time().".".$image->getClientoriginalExtension();
        $request->$image->move('menuimage',$imagename);
        $data->image=$imagename;
       }
        $data->name=$request->Name;
        
    }
}
