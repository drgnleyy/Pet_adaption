<?php include('shortct/header.php'); ?>

<div class="container  d-flex justify-content-center align-items-center vh-80">
     <form  method="POST" action="adapcrd.php" class="form-border">
     <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" placeholder="Date" required>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" required>
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="text" name="age" class="form-control" name="age" placeholder="age" required>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">address</label>
    <input type="text" name="address" class="form-control" name="address" placeholder="Address" required>
  </div>
  <div class="mb-3">
    <label for="contact" class="form-label">Contact</label>
    <input type="text" name="contact" class="form-control"  placeholder="contact">
  </div>
  <div class="mb-3">
    <label for="petno" class="form-label">Pet No.</label>
    <input type="text" name="petno" class="form-control"  placeholder="petno  ">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">type</label>
    <input type="text" name="type" class="form-control"  placeholder="type">
  </div>
  <button type="submit" name="add" class="btn btn-primary">Create</button>
</form>

   
   </div>
 <?php include('shortct/footer.php'); ?>