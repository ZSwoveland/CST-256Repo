<?php 
//session start
session_start();





?>

<html>
<body>
<?php require_once 'Header.php';?>
<center>Welcome to the Login Page</center>


<form action="Home.php" method="post">
<center>
Username: <input type="text" name ="username"><br>
</center>

<center>
Password: <input type="text" name ="password"><br>
</center>

<center>
<input type = "submit">
</center>



<?php 
require_once 'Footer.php';
require_once 'Model/LoginValidation.php';

$login = new LoginValidation();

//set session variables
$_SESSION["status"] = $login->verifyLogin();

?>

<input type = "submit">


</form>



</body>

