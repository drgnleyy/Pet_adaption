<?php

session_start();
include ('connect.php');
  
  if(isset($_POST['delete_player']))
{
    $players_id = mysqli_real_escape_string($conn, $_POST['delete_player']);

    $query = "DELETE FROM players WHERE id='$players_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
         echo '<script>alert("Skateboarder Deleted Successfully"); window.location.href = "listskate.php";</script>';
    }
    else
    {
         echo '<script>alert("Skatebaorder Not Deleted"); window.location.href = "listskate.php";</script>';
    }
}


if(isset($_POST['edit_accounts']))
{
    $players_id = $_POST['players_id'];
    $name = $_POST['name'];
  $nickname  = $_POST['nickname'];
  $age  = $_POST['age'];
   $hometown  = $_POST['hometown'];
    

 $query = "UPDATE players SET name='$name', nickname='$nickname', age='$age', hometown='$hometown' WHERE id='$players_id'";
 $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Player info Updated Successfully"); window.location.href = "listskate.php";</script>';
    } else {
        echo '<script>alert("Player info Updated"); window.location.href = "edit.php";</script>';
    }

}


if(isset($_POST['register'])){
 $firstname = $_POST['Fname'];
  $middlename  = $_POST['Mname'];
  $lastname  = $_POST['Lname'];
   $age  = $_POST['age'];
    $birthday  = $_POST['birthday'];
    $address  = $_POST['address'];
  $username=$_POST['username'];
  $str  = $_POST['pass'];
  $hash_pass = md5($str);
  
if (md5($str)){

  $sql = "INSERT INTO accounts(firstname,middlename,lastname,age,birthday,address,username,password) values ('$firstname','$middlename','$lastname','$age','$birthday','$address','$username','$hash_pass')";
  $result = mysqli_query($conn,$sql);
echo '<script>alert("User Registration Successfull"); window.location.href = "login.php";</script>';
 
}
    else {
echo '<script>alert("User Registration Failed"); window.location.href = "create.php";</script>';
    }

}

?>