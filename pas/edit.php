<?php
session_start();
require 'connect.php'; 
?>

<?php include('shortct/header.php'); ?>
<div class="sidebar">
    <a class="navbar-brand mb-0 h2 text-uppercase fs-5" href="#">Concrete Wave</a>
    <a class="nav-link active" aria-current="page" href="adaplist.php">Adaption Info</a>
    <a class="nav-link" href="regpet.php">Register Pet</a>
    <a class="nav-link" href="released.php">Released Animal</a>
    <a class="nav-link" href="login.php">Logout</a>
</div>
<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="form-container">
  <?php
  if(isset($_GET['owner_id'])){
    $owner_id= mysqli_real_escape_string($conn,$_GET['owner_id']);
    $query = "SELECT * FROM adapinfo WHERE owner_id='$owner_id'";
    $query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0){
      $adapinfo = mysqli_fetch_array($query_run);
      ?>
   
     
     <div class="card-body">
                        <form action="adapconn.php" class="form-border" method="POST">
                          <input type="hidden" name="owner_id" value="<?php echo $owner_id; ?>">


  
  <div class="mb-3">
    <label for="name" class="form-label">name</label>
    <input type="text" name="name" class="form-control"  value="<?php echo $adapinfo['name']; ?>" placeholder="name">
  </div>
  <div class="mb-3">
    <label for="Age" class="form-label">Age</label>
    <input type="text" name="age" class="form-control" value="<?php  echo $adapinfo['age']; ?>" placeholder="Age">
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" value="<?php echo $adapinfo['address'];?>" placeholder="Address">
  </div>
  <div class="mb-3">
    <label for="contact" class="form-label">contact</label>
    <input type="text" name="contact" class="form-control" value="<?php echo $adapinfo['contact'];?>" placeholder="contact">
  </div>
  <button type="submit" name="edit_accounts" class="btn btn-primary">Update</button>
</form>

 
      <?php

    }else{
      echo "<h4>No such Id</h4>";
    }

  }
  ?>
   
   </div>
 </div>
  </body>
  <?php include('shortct/footer.php'); ?>
  