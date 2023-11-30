<?php
session_start();
require 'connect.php'; 
?>

<?php include('shortct/header.php'); ?>
<div class="sidebar">
    <a class="navbar-brand mb-0 h2 text-uppercase fs-5" href="#">Concrete Wave</a>
    <a class="nav-link active" aria-current="page" href="adaplist.php">Adaption Info</a>
    <a class="nav-link" href="petreg.php">Register Pet</a>
    <a class="nav-link" href="released.php">Released Animal</a>
    <a class="nav-link" href="login.php">Logout</a>
</div>
<div class="container d-flex justify-content-center align-items-center vh-100">
<div class="form-container">
  <?php
  if(isset($_GET['pet_id'])){
    $pet_id= mysqli_real_escape_string($conn,$_GET['pet_id']);
    $query = "SELECT * FROM pet WHERE pet_id='$pet_id'";
    $query_run = mysqli_query($conn,$query);
if(mysqli_num_rows($query_run)>0){
      $pet = mysqli_fetch_array($query_run);
      ?>
   
     
     <div class="card-body">
                        <form action="petconn.php" class="form-border" method="POST">
                          <input type="hidden" name="pet_id" value="<?php echo $pet_id; ?>">


  
  
  <div class="mb-3">
    <label for="cage" class="form-label">Cage</label>
    <input type="text" name="cage" class="form-control" value="<?php  echo $pet['cage']; ?>" placeholder="Cage">
  </div>
  <div class="mb-3">
    <label for="state" class="form-label">state</label>
    <input type="text" name="state" class="form-control" value="<?php echo $pet['state'];?>" placeholder="state">
  </div>
  <button type="submit" name="edit_pet" class="btn btn-primary">Update</button>
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
  