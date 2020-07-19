
@extends('layouts.appmaster')
@section('title', 'Member E Portfolio')
@section('content')

<form action="doPortfolio" method ="Post">

First Name: <input type="text" name ="fName"><br>
Last Name: <input type="text" name ="lName"><br>
Date: <input type="text" name ="date"><br>
Education: <input type ="text" name = "education"><br>
Skills: <input type ="text" name = "skills"><br>
Work Experience: <input type="text" name ="exp"><br>
<input type = "submit" value ="Upload Portfolio">
</form>


@endsection