<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        echo "Hello World fromTest Controller";
    }
    
    public function test2(){
        return view("helloworld");
    }
}
