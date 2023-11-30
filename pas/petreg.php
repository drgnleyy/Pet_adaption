<?php include('shortct/header.php'); ?>

<div class="container  d-flex justify-content-center align-items-center vh-80">
     <form  method="POST" action="petadd.php" class="form-border">
     
     <div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" name="date" class="form-control" placeholder="Date" required>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Name" required>
  </div>
  <div class="mb-3">
    <label for="cage" class="form-label">Cage No</label>
    <input type="text" name="cage" class="form-control" name="cage" placeholder="cage" required>
  </div>
  <div class="mb-3">
    <label for="state" class="form-label">state</label>
    <input type="text" name="state" class="form-control" name="state" placeholder="state" required>
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">type</label>
    <input type="text" name="type" class="form-control"  placeholder="type">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Color</label>
    <input type="text" name="color" class="form-control"  placeholder="Color">
  </div>
  <button type="submit" name="add" class="btn btn-primary">Create</button>
</form>

   
   </div>
 <?php include('shortct/footer.php'); ?>