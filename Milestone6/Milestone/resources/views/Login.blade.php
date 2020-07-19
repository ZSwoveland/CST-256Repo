

@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')

<form action="LoginHelper" method="POST">

Username: <input type="text" name ="username"><br>

Password: <input type="text" name ="password"><br>
<input type = "submit" value ="Login">


</form>

@endsection