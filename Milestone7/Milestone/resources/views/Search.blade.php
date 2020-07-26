
@extends('layouts.appmaster')
@section('title', 'Search')
@section('content')
<form action="Searched" >

Job Name: <input type="text" name ="jobName"><br>
Job Description: <input type="text" name ="JDesc"><br>

<input type = "submit" value ="Search">
</form>
@endsection