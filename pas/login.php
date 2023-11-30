<?php include('shortct/header.php'); ?>
<img src="backg/main.png" class="bg-image" alt="main">
<div class="sidebar">
    <a class="navbar-brand mb-0 h2 text-uppercase fs-5" href="#">Pet Pal</a>
    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
    <a class="nav-link" href="about.php">About</a>
    <a class="nav-link" href="createacc.php">Signup</a>
</div>

   <div class="container  d-flex justify-content-center align-items-center vh-100">
     <form method="POST" action="logconn.php" class="form-border">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" >
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div id="username" class="form-text">We'll never share your password with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
   </div>
  </body>
<?php include('shortct/footer.php'); ?>