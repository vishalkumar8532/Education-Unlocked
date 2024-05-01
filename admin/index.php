<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:login.php");
}

include "./templates/top.php";

?>

<?php include "./templates/admin_navbar.php"; ?>


<div class="container-fluid">
  <div class="row">

    <?php include "./templates/sidebar.php"; ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <h2 style="display: contents;">MCA</h2>

   
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left: 900px;">
      Add Link
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD DATA</h5><br><br>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="mcadata.php" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">Collage Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Collage Name" name="name">

              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Registration Start Date </label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Registration Start" name="start">
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1">Registration End Date </label>
                <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Registration End" name="end">
              </div>






              <div class="form-group">
                <label for="exampleInputPassword1">Form Link</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Link" name="link">
              </div>




              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>



    </div>

   

   

    <div class="table-responsive" style="margin-top: 30px;">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">College Name</th>
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">Link</th>
            <th scope="col">Edit Data</th>
            <th scope="col">Delete Data</th>


          </tr>
        </thead>
        <tbody>

          <?php
          $conn = new mysqli('localhost', 'root', '', 'admin');
          if ($conn->connect_error) {
            die('Connection Failed :' . $conn->connect_error);
          } else {

            $stmt = "select * from mca";
            $query = mysqli_query($conn, $stmt);
            $nums = mysqli_num_rows($query);
            while ($data = mysqli_fetch_array($query)) {
          ?>
              <tr>
                <td>&#9673;</td>
                <td><?php echo $data['college_name'] ?></td>
                <td><?php echo $data['start'] ?></td>
                <td><?php echo $data['end'] ?></td>
                <td><?php echo $data['link'] ?></td>
                <td>
                  <form action="edit_mcadata.php" method="POST">
                    <input type="hidden" name="edit_id" value="<?php echo $data['ID']?>">
                  <button type="submit" class="btn btn-primary" name="delete_btn" >Edit</button>
                  </form>
                </td>
                <td>
                  <form action="delete_mcadata.php" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $data['ID']?>">
                  <button type="submit" class="btn btn-danger" name="delete_btn" >Delete</button>
                  </form>
                </td>
                  
              </tr>

          <?php }
          }
          ?>



        </tbody>
      </table>

    </div>
  </div>


</div>


