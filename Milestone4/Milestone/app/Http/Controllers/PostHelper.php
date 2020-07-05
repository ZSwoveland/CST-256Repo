<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostHelper extends Controller
{
    public function sudoAddPost($post,$pay,$education,$skills){
        echo "Postion added: ";
        echo $post;
        echo "<br>";

        echo "Pay added: ";
        echo $pay;
        echo "<br>";
        echo "Education added: ";
        echo $education;
        echo "<br>";
        echo "Skills added: ";
        echo $skills;
        echo "<br>";

    }

    public function AddPost(Request $request){
        $post = $request->input('position');
        $pay = $request->input('pay');
        $exp = $request->input('exp');
        $education = $request->input('education');
        $skills = $request->input('skills');
        $this->sudoAddPost($post,$pay,$exp,$education,$skills);
        return view('AddPost');
    }

    public function sudoEditPost($post,$pay,$education,$skills){
        echo "Postion Edited: ";
        echo $post;
        echo "<br>";

        echo "Pay Edited: ";
        echo $pay;
        echo "<br>";
        echo "Education Edited: ";
        echo $education;
        echo "<br>";
        echo "Skills Edited: ";
        echo $skills;
        echo "<br>";
    }

    public function EditPost(Request $request){
        $post = $request->input('position');
        $pay = $request->input('pay');
        $exp = $request->input('exp');
        $education = $request->input('education');
        $skills = $request->input('skills');
        $this->sudoEditPost($post,$pay,$exp,$education,$skills);
        return view('EditPost');
    }

    public function sudoDeletePost($post,$pay,$education,$skills){
        echo "Postion Deleted: ";
        echo $post;
        echo "<br>";

        echo "Pay Deleted: ";
        echo $pay;
        echo "<br>";
        echo "Education Deleted: ";
        echo $education;
        echo "<br>";
        echo "Skills Deleted: ";
        echo $skills;
        echo "<br>";
    }

    public function DeletePost(Request $request){
        $post = $request->input('position');
        $pay = $request->input('pay');
        $exp = $request->input('exp');
        $education = $request->input('education');
        $skills = $request->input('skills');
        $this->sudoDeletePost($post,$pay,$exp,$education,$skills);
        return view('DeletePost');
    }
}
