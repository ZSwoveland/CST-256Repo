
@extends('layouts.appmaster')
@section('title', 'Edit Group')
@section('content')

<form action="doEditGroup" method ="Post">

Group Name: <input type="text" name ="group"><br>
Interests: <input type="text" name ="interest"><br>


<input type = "submit" value ="Edit Group">
</form>


@endsection