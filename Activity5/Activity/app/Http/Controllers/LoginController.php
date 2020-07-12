<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel; 
use App\SecurityDAO;
use App\SecurityService;

class LoginController extends Controller
{
   
    public function Index(Request $request){

        
        $username = $request->input('username');
        $password = $request->input('password');
         $um = new UserModel($username,$password);
        $um->setUsername($username);
        $um->setPassword($password);
        $ss = new SecurityService();
        $ss->login($um);
        echo "Your name is: " . $username . " " . $password;
        echo '<br>';
    }

}
