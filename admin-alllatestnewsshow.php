<?php
  session_start();
    require ('dbcon.php');

    $sql= "SELECT * FROM latest_news_board";

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
  <link rel="stylesheet" href="style/index.css">
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
              <a href="admin-latestnews-add.php" class="btn btn-primary float-end">Add New News</a>
            </h2>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Description</th>
                  <th>Full Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $query="SELECT * FROM latest_news_board";
                $query_run= mysqli_query($con, $query);

                if(mysqli_num_rows($query_run)> 0)
                {
                  foreach($query_run as $latest)
                  {
                    //echo ;
                    ?>
                      <tr>
                        <td> <?=$latest['latest_id']; ?> </td>
                        <td> <?=$latest['latest_image']; ?> </td>
                        <td> <?=$latest['latest_date']; ?> </td>
                        <td> <?=$latest['latest_desc']; ?> </td>
                        <td> <?=$latest['latest_full_desc']; ?> </td>

                        <td>
                        <a href="admin-latestnews-view.php?id=<?= $latest['latest_id'];?>" class="btn btn-info btn-sm my-4">View</a>
                          <a href="admin-latestnews-edit.php?id=<?= $latest['latest_id'];?>" class="btn btn-success btn-sm my-4">Edit</a>
                          
                          <form action="code.php" method="POST" class="">
                          <button type="submit" name="delete_latest" value="<?= $notice['latest_id'];?>" class="btn btn-danger btn-sm my-4">Delete</button>
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