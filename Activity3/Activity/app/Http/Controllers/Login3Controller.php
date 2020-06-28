<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//require_once 'C:\\xampp\\htdocs\\Activity\\app\\Models\\UserModel.php'; 
//use App\SecurityDAO;
//use App\SecurityService;
//require_once 'Business/OrderService.php';

class Login3Controller extends Controller
{
   
    public function Index(Request $request){

        
        $username = $request->input('username');
        $password = $request->input('password');
        /* $um = new UserModel($username,$password);
        $um->setUsername($username);
        $um->setPassword($password);
        $ss = new SecurityService();
        $ss->login($um);*/
        $this->validateForm($request);
        //$os = new OrderService();
        //$os->createOrder($username,$password,"Halo");
        echo "Your name is: " . $username . " " . $password;
        echo '<br>';
        
    }

    private function validateForm(Request $request){
        $rules = ['username' => 'Required | Between:4,10 | Alpha', 'password' => 'Required | Between:4,10'];
        $this->validate($request,$rules);
    }

}
