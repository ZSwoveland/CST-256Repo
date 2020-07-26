<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupHelper extends Controller
{
    //add group for users to join
    public function Addgroup(Request $request){
        $group = $request->input('group');
        $interest = $request->input('interest');
  
        return view('ViewGroup');
    }
    //delete group for users to join
    public function Deletegroup(Request $request){
        $group = $request->input('group');
        
  
        return view('ViewGroup');
    }
    //edit group for users to join
    public function Editgroup(Request $request){
        $group = $request->input('group');
        $interest = $request->input('interest');
  
        return view('ViewGroup');
    }
}
