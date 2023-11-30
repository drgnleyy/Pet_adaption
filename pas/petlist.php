<?php
  require 'connect.php';
?>
<?php include('shortct/header.php'); ?>
<div class="sidebar">
    <a class="navbar-brand mb-0 h2 text-uppercase fs-5" href="#">Concrete Wave</a>
    <a class="nav-link active" aria-current="page" href="adaplist.php">Adaption Info</a>
    <a class="nav-link" href="petlist.php">Register Pet</a>
    <a class="nav-link" href="released.php">Released Animal</a>
    <a class="nav-link" href="login.php">Logout</a>
</div>
<div class="container d-flex justify-content-center align-items-center vh-100">
  <div class="row">
  <div class="col-md-100">
    <div class="card">
      <div class="card-header">
        <h5>Pet Information
          <a href="petreg.php" class="btn btn-primary float-end">Add New Pet</a>
        </h5>
      </div>
      <div class="card-body">
        <table id="tableId"class="table  table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>date</th>
              <th>name</th>
              <th>cage</th>
              <th>state</th>
              <th>type</th>
              <th>Color</th>
            
            </tr>
          </thead>
          <tbody>
            <?php
$query = "SELECT * FROM pet";
$query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run)>0)
            {
              foreach($query_run as $pet)
              {
                ?>
                <tr>
                  <td><?=$pet['pet_id'];?></td>
                  <td><?=$pet['date'];?></td>
                  <td><?=$pet['name'];?></td>
                  <td><?=$pet['cage'];?></td>
                  <td><?=$pet['state'];?></td>
                  <td><?=$pet['type'];?></td>
                  <td><?=$pet['color'];?></td>
                  <td>
                <a href="petedit.php?pet_id=<?=$pet['pet_id'];?>" class="btn btn-success btn-sm">Edit</a>
                <form action="petconn.php" method="POST" class="d-inline">
                <button type="submit" name="delete_pet" value="<?=$pet['pet_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                </form>
              </td>
                </tr>

                <?php 
              }

            }else{
              echo"<h5> No Record Found</h5>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div> 
  </div>
</div>
   </div>
<?php include('shortct/footer.php'); ?>