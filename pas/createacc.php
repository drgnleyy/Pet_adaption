<?php include('shortct/header.php'); ?>
<div class="sidebar">
    <a class="navbar-brand mb-0 h2 text-uppercase fs-5" href="#">Concrete Wave</a>
    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
    <a class="nav-link" href="about.php">About</a>
    <a class="nav-link" href="login.php">Login</a>
</div>
<div class="container  d-flex justify-content-center align-items-center vh-90">
     <form  method="POST" action="createconn.php" class="form-border">
  <div class="mb-3">
    <label for="Fname" class="form-label">First name</label>
    <input type="text" name="Fname" class="form-control" placeholder="First name" required>
  </div>
  <div class="mb-3">
    <label for="Mname" class="form-label">Middle name</label>
    <input type="text" name="Mname" class="form-control"  placeholder="Middle name">
  </div>
  <div class="mb-3">
    <label for="Lname" class="form-label">Last name</label>
    <input type="text" name="Lname" class="form-control" name="Lname" placeholder="Last name" required>
  </div>
  <div class="mb-3">
    <label for="Age" class="form-label">Age</label>
    <input type="text" name="age" class="form-control" placeholder="Age" required>
  </div>
  <div class="mb-3">
    <label for="Birthday" class="form-label">Birthday</label>
    <input type="date" name="birthday" class="form-control"  placeholder="MM/DD/YYYY">
  </div>
   <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" name="address" class="form-control"  placeholder="Address">
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" name="username" class="form-control" id="username" placeholder="Username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input  placeholder="password" type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
  </div>
  
  <button type="submit" name="register" class="btn btn-primary">Create</button>
</form>

   
   </div>
 <?php include('shortct/footer.php'); ?>