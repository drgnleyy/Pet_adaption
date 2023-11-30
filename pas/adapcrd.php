<?php

session_start();
include ('connect.php');
  

if(isset($_POST['add'])){
    $date = $_POST['date'];
 $name = $_POST['name'];
  $age = $_POST['age'];
   $address  = $_POST['address'];
   $contact  = $_POST['contact'];
   $petno  = $_POST['petno'];
   $type  = $_POST['type'];
   $color  = $_POST['color'];
if (md5($str)){

  $sql = "INSERT INTO adapinfo(date,name,age,address,contact,petno,type,color) values ('$date','$name','$age','$address','$contact','$petno','$type','$color')";
  $result = mysqli_query($conn,$sql);
echo '<script>alert("Owner added Successfull"); window.location.href = "adaplist.php";</script>';
 
}
    else {
echo '<script>alert("Register Failed"); window.location.href = "adapown.php";</script>';
    }

}
