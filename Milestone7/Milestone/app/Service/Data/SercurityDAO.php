<?php
namespace App\Service\Data;

require_once('UserModel.php');

class SecurityDAO{
    
    public function _construct(){

    }
    public function findByUser(UserModel $usermodel){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

        // Perform query
        if ($result = $mysqli -> query("SELECT * FROM users where 'USERNAME' = ".$usermodel->getUsername()." and 'PASSWORD' = ".$usermodel->getPassword()."")) {
     
        // Free result set
        $result -> free_result();
        
        return true;
        
        }
        else{
         
           return false;
        }
    }

    public function addtoDB(UserModel $um){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Insert Into users FirstName, LastName, Email, State, MemberShip, Zip Values ".$um->getFirstName().",".$um->getLastName().",".$um->getEmail().",".$um->getState().",".$um->getRole().",".$um->getZip()."")) {
          return true;
        }
        else{
            return false;
        }
    }

    public function addPostDB(Item $Post){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Insert Into posts Name, Pay, Experience, Education, Skills Values ".$Post->getName().",".$Post->getPay().",".$Post->getExp().",".$Post->getEducation()."," . $Post->getSkills() . "")) {
          return true;
        }
        else{
            return false;
        }
    }

    public function editPostDB(Item $Post){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Update posts set Name = ". $Post->getName().", Pay = ". $Post->getPay().", Experience =". $Post->getExp().", Education = ". $Post->getEducation().", Skills = ". $Post->getSkills() . "")) {
          return true;
        }
        else{
            return false;
        }
    }

    public function deletePostDB(Item $Post){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Delete posts Where Name = ". $Post->getName().", Pay = ". $Post->getPay().", Experience =". $Post->getExp().", Education = ". $Post->getEducation().", Skills = ". $Post->getSkills() . "")) {
          return true;
        }
        else{
            return false;
        }
    }
    public function addGroupDB(Group $Group){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Insert Into group Group, Interest Values ".$Group->getGroup().",".$Group->getInterest(). "")) {
          return true;
        }
        else{
            return false;
        }
    }

    public function editGroupDB(Group $Group){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Update group set Group = ". $Group->getGroup().", Interest = ". $Group->getInterest(). "")) {
          return true;
        }
        else{
            return false;
        }
    }

    public function deleteGroupDB(Group $Group){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

         // Perform query
         if ($result = $mysqli -> query("Delete group Where Group = ". $Group->getGroup().", Interest = ". $Group->getInterest()."")) {
          return true;
        }
        else{
            return false;
        }
    }

    public function searchJob(Job $j){
        $mysqli = new mysqli("80","root","12345","jobmilestone");

        // Check connection
        if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
        }

       
            $query = "SELECT * From jobs Where Name = ". $j->getName().""; 
            $result = mysql_query($query);
            
            echo "<table>"; 
            
            while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
            echo "<tr><td>" . $row['name'] . "</td><td>" . $row['description'] . "</td><td>" . $row['Salary'] . "</td><td>" . $row['Link'] . "</td></tr>";  
            }
            
            echo "</table>"; //Close the table in HTML
            
            mysql_close(); //Make sure to close out the database connection
       
    }
}
?>
