<?php

session_start();
include ('connect.php');
  
  if(isset($_POST['delete_owner']))
{
    $owner_id = mysqli_real_escape_string($conn, $_POST['delete_owner']);

    $query = "DELETE FROM adapinfo WHERE owner_id='$owner_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
         echo '<script>alert("Info Deleted Successfully"); window.location.href = "adaplist.php";</script>';
    }
    else
    {
         echo '<script>alert("Info Not Deleted"); window.location.href = "adaplist.php";</script>';
    }
}


if(isset($_POST['edit_accounts']))
{
  $name = $_POST['name'];
  $age = $_POST['age'];
   $address  = $_POST['address'];
   $contact  = $_POST['contact'];
    

 $query = "UPDATE adapinfo SET name='$name',age='$age', address='$address',contact='$contact'";
 $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo '<script>alert("Player info Updated Successfully"); window.location.href = "adaplist.php";</script>';
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