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
        <h5>Adaption Information
          <a href="adapown.php" class="btn btn-primary float-end">Add New Owner</a>
        </h5>
      </div>
      <div class="card-body">
        <table id="tableId"class="table  table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>date</th>
              <th>name</th>
              <th>age</th>
              <th>Address</th>
              <th>Contact No.</th>
              <th>Pet No</th>
              <th>type</th>
              <th>Color</th>
            
            </tr>
          </thead>
          <tbody>
            <?php
$query = "SELECT * FROM adapinfo";
$query_run = mysqli_query($conn, $query);
            if(mysqli_num_rows($query_run)>0)
            {
              foreach($query_run as $adapinfo)
              {
                ?>
                <tr>
                  <td><?=$adapinfo['owner_id'];?></td>
                  <td><?=$adapinfo['date'];?></td>
                  <td><?=$adapinfo['name'];?></td>
                  <td><?=$adapinfo['age'];?></td>
                  <td><?=$adapinfo['address'];?></td>
                  <td><?=$adapinfo['contact'];?></td>
                  <td><?=$adapinfo['petno'];?></td>
                  <td><?=$adapinfo['type'];?></td>
                  <td><?=$adapinfo['color'];?></td>
                  <td>
                <a href="edit.php?owner_id=<?=$adapinfo['owner_id'];?>" class="btn btn-success btn-sm">Edit</a>
                <form action="adapconn.php" method="POST" class="d-inline">
                <button type="submit" name="delete_owner" value="<?=$adapinfo['owner_id'];?>" class="btn btn-danger btn-sm">Delete</button>
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