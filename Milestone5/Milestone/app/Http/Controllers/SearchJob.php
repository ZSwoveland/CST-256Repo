<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
include('App\Http\Model\JobModel.php');
include('App\Http\Service\Business\SecurityService.php');

class SearchJob extends Controller
{
    //
    public function search(Request $request){
        $ss = new SecurityService();

        $ss->jobsearch($request);
        return view('Searched');
    }

}
