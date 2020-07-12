
@extends('layouts.appmaster')
@section('title', 'Delete Group')
@section('content')

<form action="doDeleteGroup" method ="Post">

Group Name: <input type="text" name ="group"><br>


<input type = "submit" value ="Delete Group">
</form>


@endsection