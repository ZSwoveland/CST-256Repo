<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestLoggingController extends Controller
{
    //
protected $logger;

public function __constructor($ILog){
    $this->logger = $ILog;
}

public function index(){
    $this->logger->info();
}

}
