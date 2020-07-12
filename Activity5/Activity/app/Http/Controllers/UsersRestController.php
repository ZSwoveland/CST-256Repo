<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
require_once 'App\Http\Services\Business\SecurityService.php';

class UsersRestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ss = new SecurityService();

        $ss->getAllUsers();

        $DTO = new DTO("404","Not Found", "GetAllUsers()");
    }

 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ss = new SecurityService();
        $ss->getUser($id);

        $DTO = new DTO("404","Not Found", "GetUser()");
    }

  
}
