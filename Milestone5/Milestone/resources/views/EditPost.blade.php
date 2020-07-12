@extends('layouts.appmaster')
@section('title', 'Edit Post')
@section('content')

<form action="editPost" method ="Post">

Postion Name: <input type="text" name ="postion"><br>
Pay: <input type="text" name ="pay"><br>
Expected Experience: <input type="text" name ="exp"><br>
Expected Education: <input type ="text" name = "education"><br>
Expected Skills: <input type ="text" name = "skills"><br>

<input type = "submit" value ="Edit Job Posting">
</form>


@endsection