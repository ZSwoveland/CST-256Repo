<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileHelper extends Controller
{
    
    public function Index(Request $request){
        
    
      
        //Retrieve the FirstName input field
        $first = $request->fName;
        echo 'First Name: '.$first;
        echo '<br>';
        
        //Retrieve the LastName input field
        $last = $request->lName;
        echo 'Last Name: '.$last;
        echo '<br>';

          //Retrieve the Resume input field
          $resume = $request->Resume;
          echo 'Resume: '.$resume;
          echo '<br>';

            //Retrieve the JobType input field
        $jobType = $request->JType;
        echo 'Job Type: '.$jobType;
        echo '<br>';

          //Retrieve the Salary input field
          $salary = $request->Salary;
          echo 'Salary: '.$salary;
          echo '<br>';

            //Retrieve the Salary input field
          $salary = $request->Salary;
          echo 'Salary: '.$salary;
          echo '<br>';

            //Retrieve the Email input field
            $email = $request->emailTwo;
            echo 'Salary: '.$email;
            echo '<br>';
         
         return view("MemberProfile");
      
  }
}
