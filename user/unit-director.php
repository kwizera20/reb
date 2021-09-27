
<?php

error_reporting(0);
$conn=mysqli_connect("localhost","root","","reb");

if($conn)
{
    echo"connected successfully";
}
else
{
    echo"failed";
}
            $sql= "SELECT id,issued_to,purpose_of_mission,issue_date FROM mission_order";
            $connect=mysqli_query($conn, $sql);
            $num=mysqli_num_rows($connect);
            ?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <?php
            if($num>0){
                while ($row=mysqli_fetch_assoc($connect))
                {
                    ?>
  <div class="container">
     
      <table class="table table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">File Type</th>
      <th scope="col">File Name</th>
      <th scope="col">Sender Name</th>
      <th scope="col">Submition date</th>
      <th scope="col">View File</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?php echo $row ['id'];?></th>
      <td><?php echo $row ['file_type'];?></td>
      <td><?php echo $row ['purpose_of_mission'];?></td>
      <td><?php echo $row ['issued_to'];?></td>
      <td><?php echo $row ['issued_date'];?></td>
      <td><a href="fetch-mission-order.php">Review</a></td>
    </tr>
  </tbody>
</table>
</div>    
</div>        
<?php
                }
            }
                ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>