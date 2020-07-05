
@extends('layouts.appmaster')
@section('title', 'Add Group')
@section('content')

<form action="doAddGroup" method ="Post">

Group Name: <input type="text" name ="group"><br>
Interests: <input type="text" name ="interest"><br>


<input type = "submit" value ="Upload Group">
</form>


@endsection