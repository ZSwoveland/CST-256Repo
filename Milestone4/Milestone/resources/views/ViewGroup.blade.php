
@extends('layouts.appmaster')
@section('title', 'View Group')
@section('content')
<?php 

echo "Groups: <br>";
echo "IT Programmers: <br>";
echo "Users: <br>";
echo "ValorZ, ClawPanther, You <br>";

?>
<form>
Please enter group name to add or delete yourself from: <input type="text" name="groupname"><br>
Edit Yourself <select name="edit" size="2" multiple>
  <option value="add">Add to Group</option>
  <option value="delete">Delete From Group</option>
</select><br>

<input type = "submit" value ="Finish Editing Yourself">
</form>
@endsection