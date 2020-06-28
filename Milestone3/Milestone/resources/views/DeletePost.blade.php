@extends('layouts.appmaster')
@section('title', 'Delete Post')
@section('content')

<form action="deletePost" method ="Post">

Postion Name: <input type="text" name ="postion"><br>
Pay: <input type="text" name ="pay"><br>
Expected Experience: <input type="text" name ="exp"><br>
Expected Education: <input type ="text" name = "education"><br>
Expected Skills: <input type ="text" name = "skills"><br>

<input type = "submit" value ="Delete Job Posting">
</form>


@endsection