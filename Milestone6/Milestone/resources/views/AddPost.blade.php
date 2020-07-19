
@extends('layouts.appmaster')
@section('title', 'Add Post')
@section('content')

<form action="doPost" method ="Post">

Postion Name: <input type="text" name ="postion"><br>
Pay: <input type="text" name ="pay"><br>
Expected Experience: <input type="text" name ="exp"><br>
Expected Education: <input type ="text" name = "education"><br>
Expected Skills: <input type ="text" name = "skills"><br>

<input type = "submit" value ="Upload Job Posting">
</form>


@endsection