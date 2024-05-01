<?php include "navbar.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mca.css">
</head>

<body>

<section>
 
  <h1>MCA</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0px">
      <thead>
        <tr>
            <th>#</th>
            <th>College Name</th>
            <th>Registration Start</th>
            <th>Registration End</th>
            <th>Form Link</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0px">
      <tbody>
      <?php
              $conn = new mysqli('localhost', 'root', '', 'admin');
              if ($conn->connect_error) {
                die('Connection Failed :' . $conn->connect_error);
              } 
              else 
              
              {

                $stmt = "select * from mca";
                $query=mysqli_query($conn,$stmt);
                $nums=mysqli_num_rows($query);
                  while ($data=mysqli_fetch_array($query)) {
                    $var = $data['start'];
                    $var1=$data['end'];
                   
                    
                    ?>
                   
                    <tr>
                    <td> &#9673;</td>
                    <td><?php echo $data['college_name']?></td>
                    <td><?php echo date('d-m-y', strtotime($var)); ?></td>
                    <td><?php echo date('d-m-y', strtotime($var1));?></td>
                    <td>  <a href="<?php echo $data['link']?>" target="_blank">Click Here</a></td>


                    </tr>

                    <?php }
                
             
              }
              ?>
     
      </tbody>
    </table>
  </div>
</section>




  </body>

</html>
