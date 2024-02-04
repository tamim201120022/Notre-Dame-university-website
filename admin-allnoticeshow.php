<?php
  session_start();
    require ('dbcon.php');

    $sql= "SELECT * FROM notice_board";

    $query= mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NDUB Admin Panel Notice</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <!--Bootstrap css starts-->
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--Bootstrap css ends-->

  <!--Link of CSS file starts-->
  <link rel="stylesheet" href="style/ndub.css">
  <!--Link of CSS file ends-->

  <!--Aos link-->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!--Aos link-->

</head>

<body>
  
  <div class="container mt-5">

  <?php include('message.php')?>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h2>Show Details
              <a href="admin-notice-add.php" class="btn btn-primary float-end">Add New Notice</a>
            </h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Details</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query="SELECT * FROM notice_board";
                $query_run= mysqli_query($con, $query);

                if(mysqli_num_rows($query_run)> 0)
                {
                  foreach($query_run as $notice)
                  {
                    //echo ;
                    ?>
                      <tr>
                        <td> <?=$notice['notice_id']; ?> </td>
                        <td> <?=$notice['notice_date']; ?> </td>
                        <td> <?=$notice['details']; ?> </td>
                        <td> <?=$notice['notice_img']; ?> </td>

                        <td>
                        <a href="admin-notice-view.php?id=<?= $notice['notice_id'];?>" class="btn btn-info btn-sm">View</a>
                          <a href="admin-notice-edit.php?id=<?= $notice['notice_id'];?>" class="btn btn-success btn-sm">Edit</a>
                          
                          <form action="code.php" method="POST" class="d-inline">
                          <button type="submit" name="delete_notice" value="<?= $notice['notice_id'];?>" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                        </td>
                      </tr>
                    <?php
                  }
                }
                else{
                  echo "<h5>No record Found</h5>";
                }
                
                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--Bootstrap javaScript starts-->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>
  <!--Bootstrap java ends-->

  <!--Aos javaScript-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!--Aos javaScript-->


</body>
</html>