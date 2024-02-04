<?php
  session_start();
  require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NDUB Admin Panel Edit Notice</title>

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

      <?php include('message.php');?>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4>News Edit
                  <a href="admin-alllatestnewsshow.php" class="btn btn-danger float-end">Back</a>
                </h4>
              </div>
              <div class="card-body">

              <?php
                  if(isset($_GET['id'])){

                    $latest_id= mysqli_real_escape_string ($con, $_GET['id']);
                  
                    $query= "SELECT * FROM latest_news_board where latest_id= '$latest_id' ";

                    $query_run= mysqli_query ($con, $query);

                    if(mysqli_num_rows ($query_run) > 0)
                    {
                      $latest=mysqli_fetch_array($query_run);
                     
                      ?>

                      
                  <form action="code.php" method="POST">
                      <input type="hidden" name="latest_id" value="<?= $latest_id ?>">
                  <div class="mb-3">
                  <label >Image</label>
                  <input type="text" name="limg"  class="form-control" value="<?= $latest['latest_image'];?>">
                  </div>

                  <div class="mb-3">
                  <label >Date</label>
                  <input type="date" name="ldate" value="<?= $latest['latest_date'];?>" class="form-control">
                  </div>

                  <div class="mb-3">
                  <label >Description</label>
                  <input type="text" name="ldesc" value="<?= $latest['latest_desc'];?>" class="form-control">
                  </div>

                  <div class="mb-3">
                  <label >Full Description</label>
                  <input type="text" name="lfdesc" value="<?= $latest['latest_full_desc'];?>" class="form-control">
                  </div>

                    <div class="mb-3">
                      <button type="submit" name="Update_news" class="btn btn-primary">Update News</button>
                    </div>
                </form>

                <?php
                    }
                    else{
                      echo "<h4>No Such data found</h4>";
                    }
                  
                  }
                    
              ?>
              </div>
            </div>
          </div>
        </div>
      </div>

  

 
</div>
</div>
</div>
  </section>
  





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