  


@extends('layouts.appmaster')
@section('title', 'Register Page')
@section('content')
<form action="Login" >

First Name: <input type="text" name ="fName"><br>
Last Name: <input type="text" name ="lName"><br>
Email Address: <input type="text" name ="email"><br>
State: <input type ="text" name = "state"><br>
Zip: <input type ="text" name = "zip"><br>
Membership Type <select name="membership" size="3" multiple>
  <option value="admin">Admin</option>
  <option value="company">Company</option>
  <option value="individual">Individual</option>
</select><br>
Username: <input type="text" name ="username"><br>
Password: <input type="text" name ="password"><br>
<input type = "submit" value ="Register">
</form>
@endsection
