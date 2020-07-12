<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UserModel; 
use App\Service\Data\SecurityDAO;
use App\Service\Business\SecurityService;

class LoginHelper extends Controller
{
   

 

    public function Index(Request $request){
        
      $username = $request->input('username');
      $password = $request->input('password');
      $this->CheckLogin($username);
       $um = new UserModel($username,$password);
      $um->setUsername($username);
      $um->setPassword($password);
      $ss = new SecurityService();
      $ss->login($um);
      echo "Your name is: " . $username . " " . $password;
      echo '<br>';
    }

    public function CheckLogin($x){
      $_SESSION['userId'] = $x;
      if(!isset($_SESSION['userId']))
      {
          // not logged in
          header('Location: login.php');
          exit();
      }
    }
}