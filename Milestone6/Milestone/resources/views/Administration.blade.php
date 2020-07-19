
@extends('layouts.appmaster')
@section('title', 'Admin Page')
@section('content')
<form action="Administration" method="POST" >

Username: <input type="text" name ="username"><br>
Membership Role <select name="role" size="3" multiple>
  <option value="admin">Admin</option>
  <option value="company">Company</option>
  <option value="individual">Individual</option>
</select><br>

<input type = "submit" value ="Edit Profile">
</form>

Edited Output:


@endsection