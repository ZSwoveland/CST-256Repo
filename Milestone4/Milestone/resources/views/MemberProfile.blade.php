
@extends('layouts.appmaster')
@section('title', 'Member Profile')
@section('content')
<form action="ProfileHelper" method="Post">

First Name: <input type="text" name ="fName"><br>
Last Name: <input type="text" name ="lName"><br>
Resume: <input type="text" name = "Resume"><br>
Job Type: <input type="text" name ="JType"><br>
Salary: <input type="text" name ="Salary"><br>
Phone Number: <input type="text" name="PNumber"><br>
Secondary Email: <input type="text" name="emailTwo"><br>
<input type = "submit" value ="Update Member Profile">
</form>
@endsection

