<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHelper extends Controller
{
    public function Index(Request $request){
        //Retrieve the Username input field
        $username = $request->username;
        echo 'Username: '.$username;
        echo '<br>';

        //Retrieve the Role input field
        $role = $request->role;
        echo 'Role: '.$role;
        echo '<br>';


        
        return view("Administration");
    }
    
}
