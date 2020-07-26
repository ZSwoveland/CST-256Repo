<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioHelper extends Controller
{
    //create portfolio for users
    public function createPortfolio(Request $request){
       
        $firstN = $request->input($fName);
        $lastN = $request->input($lName);
        $date = $request->input($date);
        $education = $request->input($education);
        $workExperience = $request->input($exp);
        $skills = $request->input($skills);
        return view('EPortfolio');
    }

    //Sudo add to test it out
    public function sudoPortfolio(){

        echo "Full Name: Zachary Swoveland <br>";
        echo "Date: 6/27/20 <br>";
        echo "Education: High School, Working on Bachelor of Science <br>";
        echo "Work Experience: Little Caesar's crew member 4 months, Little Caesar's Assistant Manager 4 months, Little Caesar's Co Manager 4 months, ICEE Cusomter Logistics Coordinator current job <br>";
        echo "Skills: Management for almost a year, excel experience with reporting, have knowledge of several programming languages such as Java, C++, C#, php, HTML, SQL";

        return view('EPortfolio');
    }
}
