<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupHelper extends Controller
{
    public function Addgroup(Request $request){
        $group = $request->input('group');
        $interest = $request->input('interest');
  
        return view('ViewGroup');
    }
    public function Deletegroup(Request $request){
        $group = $request->input('group');
        
  
        return view('ViewGroup');
    }
    public function Editgroup(Request $request){
        $group = $request->input('group');
        $interest = $request->input('interest');
  
        return view('ViewGroup');
    }
}
