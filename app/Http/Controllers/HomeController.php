<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\menu;



class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id()){
        if(Auth::user()->usertype=='0')
        {
            $menu = menu::all();
            return view('user.home', compact('menu'));
        }
        else{
            return view('admin.home');
        }
    }
    else
    {
        return redirect()->back();
    }
    }

    public function index(){
        $menu = menu::all();
        return view('user.home', compact('menu'));
    }

    public function reservation(Request $request){
        $data = new reservation;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->person=$request->person;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->status='In progress';
        if(Auth::id()){
            $data->user_id=Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Reservation Request Successful');
    }
    

}
