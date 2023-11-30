<?php

session_start();
include ('connect.php');
  

if(isset($_POST['add'])){
    $date = $_POST['date'];
 $name = $_POST['name'];
  $cage = $_POST['cage'];
   $state  = $_POST['state'];
   $type  = $_POST['type'];
   $color  = $_POST['color'];
if (md5($str)){

  $sql = "INSERT INTO pet(date,name,cage,state,type,color) values ('$date','$name','$cage','$state','$type','$color')";
  $result = mysqli_query($conn,$sql);
echo '<script>alert("Pet added Successfull"); window.location.href = "petlist.php";</script>';
 
}
    else {
echo '<script>alert("Register Failed"); window.location.href = "petreg.php";</script>';
    }

}
