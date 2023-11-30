<?php

session_start();
include ('connect.php');
  
  if(isset($_POST['delete_pet']))
{
    $pet_id = mysqli_real_escape_string($conn, $_POST['delete_pet']);

    $query = "DELETE FROM pet WHERE pet_id='$pet_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
         echo '<script>alert("Pet Deleted Successfully"); window.location.href = "petlist.php";</script>';
    }
    else
    {
         echo '<script>alert("Pet Not Deleted"); window.location.href = "petlist.php";</script>';
    }
}


if(isset($_POST['edit_pet']))
{
  $cage = $_POST['cage'];
   $state  = $_POST['state'];

 $query = "UPDATE pet SET cage='$cage', state='$state'";
 $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert(" Pet Updated Successfully"); window.location.href = "petlist.php";</script>';
    } else {
        echo '<script>alert(" Pet Updated"); window.location.href = "petlist.php";</script>';
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