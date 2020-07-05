<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
require_once 'C:\\xampp\\htdocs\\Activity\\app\\Models\\UserModel.php'; 
//use App\SecurityDAO;
//use App\SecurityService;
require_once 'Business/OrderService.php';

class Login3Controller extends Controller
{
   
    public function Index(Request $request){

        Log::info("Entering LoginController::index()");
        $username = $request->input('username');
        $password = $request->input('password');
        Log::info("Parameters are: , username =>". $username.', password =>'.  $password."");
        $um = new UserModel($username,$password);
        $um->setUsername($username);
        $um->setPassword($password);
        $ss = new SecurityService();
        $ss->login($um);
        $this->validateForm($request);
    	Log::info("Exit LoginController::index() with login passing");
        //Log::info("Exit LoginController::index() with login failing");
        $os = new OrderService();
        $os->createOrder($username,$password,"Halo");
        echo "Your name is: " . $username . " " . $password;
        echo '<br>';
        
    }

    private function validateForm(Request $request){
        $rules = ['username' => 'Required | Between:4,10 | Alpha', 'password' => 'Required | Between:4,10'];
        $this->validate($request,$rules);
    }

}
