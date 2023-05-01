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
        
        $menu=new menu;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('menuimage', $imagename);
        $menu->image=$imagename;
        $menu->Name=$request->Name;
        $menu->Price=$request->Price;
        $menu->Categories=$request->Categories;
        $menu->Description=$request->Description;

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
        return view('admin.update_menu', compact('data'));
    }
    public function editdoctor(Request $request, $id)
    {
       $doctor = menu::find($id);
       $doctor->name=$request->name;
       $doctor->phone=$request->phone;
       $doctor->speciality=$request->speciality;
       $doctor->name=$request->name;
       $doctor->room=$request->room;

       $image=$request->file;

       if($image)
       {

$imagename=time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('doctorimage', $imagename);
        $doctor->image=$imagename;
        }

        $doctor->save();
        return redirect()->back()->with('message','Doctor Details Updated Successfully');
    }
}
