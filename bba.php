<?php
  require('connect.inc.php');

  $sqlbsc= "SELECT tuition_id, programs, credit_hour, trimester_per_year, admission_fee, course_fee, semester_fee from bba_tuition_cost";

  $sql_querybsc = mysqli_query($conbsc, $sqlbsc);

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undergraduate BBA Programs</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Bootstrap css starts-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap css ends-->

    <!--Link of CSS file starts-->
    <link rel="stylesheet" href="style/bba.css">
    <!--Link of CSS file ends-->

    <!--Aos link-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Aos link-->

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!--font awesome cdn-->

    <style>
      .nav-body1{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/smartworks-coworking-cW4lLTavU80-unsplash.jpg");
    background-size: cover;
    background-position: center;
    
}
.text-box p{
    font-size: 20px;
}
body{
      background-color: #fefbe9;
    }
    </style>


</head>
<body>
    <!--Header Start-->
    <section class="header">
        <!--Starting navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-secondary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img style="width: 300px;" src="images/NDUB-Logo-name-ver4-with-slogan.png" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav styling">
                  <li class="nav-item p-1 btn rounded btn-outline-primary">
                    <a class="nav-link active text-white" href="#">Home</a>
                  </li>

                  <!--About dropdown starts-->
                  <li class="nav-item dropdown p-1 rounded btn-outline-primary">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">About</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item dropdown-style text-black" href="#">About</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">History</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Mission, Vission & Objectives</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Leadership</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Departments</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Programs</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Directory</a></li>
                      <li><a class="dropdown-item text-black" href="#">Contact</a></li>
                    </ul>
                  </li>
                  <!--About dropdown ends-->
                  
                  <!--About dropdown starts-->
                  <li class="nav-item dropdown p-1 rounded btn-outline-primary">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Admission & Aid</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Admission Info</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="programs.php" target="_blank">Undergraduate Admission</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Graduate Admission</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Grading Policy</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="combinedRoutine.php" target="_blank">Combined Routine</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Financial Aid & Scholarships</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Admission FAQs</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="admission.html" target="_blank">Apply Online</a></li>
                      <li><a class="dropdown-item text-black" href="#">Tution Fees</a></li>
                    </ul>
                  </li>
                  <!--About dropdown ends-->

                  <!--About dropdown starts-->
                  <li class="nav-item dropdown p-1 rounded btn-outline-primary">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Research</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Academic Overview</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="programs.php" target="_blank">Undergraduate Programs</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Graduate Programs</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Examinations</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Accreditation</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Library</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Academic Calender</a></li>
                      <li><a class="dropdown-item text-black" href="#">Academic Policy</a></li>
                    </ul>
                  </li>
                  <!--About dropdown ends-->

                  <!--About dropdown starts-->
                  <li class="nav-item dropdown p-1 rounded btn-outline-primary">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown">Campus Life</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Campus Life Overview</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Club Activities</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Code of Conducts</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Campus Job</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Accreditation</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="#">Future Students</a></li>
                      <li><a class="dropdown-item text-black" href="#">Sports</a></li>
                    </ul>
                  </li>
                  <!--About dropdown ends-->

                  <!--Notice, News & Std portal starts--> 
                  <li class="nav-item p-1 rounded btn-outline-primary">
                    <a class="nav-link text-white" href="allnotice.html">Notice</a>
                  </li>

                  <li class="nav-item p-1 rounded btn-outline-primary">
                    <a class="nav-link text-white" href="#">Events</a>
                  </li>

                  <li class="nav-item p-1 rounded btn-outline-primary">
                    <a class="nav-link text-white" href="#">Student Portal</a>
                  </li>
                  <!--Notice, News & Std portal ends-->
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success text-white" type="submit">Search</button>
                  </form>
              </div>
            </div>
          </nav>
          <!--ending navbar-->
          <div class="nav-body1">
            <div class="text-box ">
                <h4>C O U R S E</h4>
                <h1>Bachelor of Business Administration</h1>
                <p>The Department of Business Administration has been offering a 4-year undergraduate degree program <br> called Bachelor of Business Administration (BBA) since 2014. This program is spread over twelve trimesters with <br> three trimesters per academic year. Admission is three times a year.</p>
            </div>               
          </div>
    </section>
    <!--Header end-->

    <!--undergraduate aim-->
    <section class="undergraduate-programs" style="margin-top: 80px;">
        <div class="card container" style="width: 70rem;">
            <h5 class="card-header text-muted" style="text-align: center;">BACHELOR OF BUSINESS ADMINISTRATION​</h5>
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">About the program</h5>
              <p class="card-text">The aim of this Department is to impart to the students up-to-date knowledge of different branches of the business field. However, it also helps the students develop transferable skills that are highly required by a wide range of employers. The undergraduate courses offered to the students have been designed considering the courses offered in various reputed universities, home and abroad, keeping in view the ever-increasing horizon of business.
             The BBA courses are taught by specialists who are dedicated to evolving your subject-specific knowledge as well as your broader skills and job prospects.</p>
            </div>
          </div>
    </section>
    <!--undergraduate aim ends-->

    <!--message from chairmen-->
    <div class="message">
        <div class="chairmen" style="max-width: 80%; display: block; margin: auto;" data-aos="fade-in">
            <div class="card mb-3 m-5";>
              <div class="row">
                <div class="col-md-4">
                  <img src="images/bba_head.jpg" class="img-fluid rounded-start vc-hover" alt="Fr.Patrick">
                  <h5>Dr. Parimal Chandra Datta<br> Chairperson & Coordinator, <br> BBA & MBA Programs</h5>
                </div>
                <div class="col-md-8">
                  <div class="card-body p-lg-5px">
                    <h3 class="card-title">Message of the DEPARTMENT CHAIRPERSON</h3>
                    <p class="card-text" style="font-size: 16px;">The Department of Business Administration is the largest department at NDUB and the department has been offering undergraduate and graduate programs in Business Administration since the inauguration of the Dept. Since its inception, this Department has been playing a dominant role in offering quality business education to the students and executives strive to equip themselves with up-to-date knowledge. The ultimate goal of the Department is to provide students with an integrated and practical approach to understanding current business practices and educate them to think from outside the box.</p>
                    <p class="card-text"><small class="text-muted">Professor Dr. Parimal Chandra Datta</small></p>
                    <a href="#" class="btn btn-primary">Know More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!--message from chairmen-->

    <!--tuition fees and cost-->
    <h3 style="margin-top: 50px; text-align: center;">Tuition Fees & Cost</h3>
    <hr>
    <table class="container table caption-top table-bordered border-dark">
    
                
        <caption>Tuition Fees & Cost</caption>
        <thead class="table-danger">
          <tr>
            <th scope="col">Programs</th>
            <th scope="col">Credit Hours</th>
            <th scope="col">Trimesters per year</th>
            <th scope="col">Admission Fees*</th>
            <th scope="col">Course Fees* (per credit hour)</th>
          </tr>
        </thead>
        <tbody>
      <?php
        while ($data = mysqli_fetch_array($sql_querybsc))
                {
                $idbsc = $data['tuition_id'];
                $progbsc = $data['programs'];
                $creditbsc = $data['credit_hour'];
                $trimesterbsc = $data['trimester_per_year'];  
                $admissionbsc= $data['admission_fee'];
                $coursebsc= $data['course_fee'];
                $semesterbsc= $data['semester_fee'];
                
                ?>
          <tr>
            <th scope="row"><?php echo $progbsc?></th>
            <td class="text-center"><?php echo $creditbsc?></td>
            <td class="text-center"><?php echo $trimesterbsc?></td>
            <td class="text-center"><?php echo $admissionbsc?></td>
            <td class="text-center"><?php echo $coursebsc?></td>
          </tr>
          <tr>
            <th scope="row">*Semester Fees: <?php echo $semesterbsc?>/=</th>
          </tr>
          <tr>
            <th scope="row">*Bangladeshi Taka (BDT)</th>
          </tr>
        </tbody>
        <?php }?>
      </table>

    <!--tuition fees and cost-->


    <!--Footer starts-->
    <div class="footer" style="margin-top: 100px;">
      <div class="container-fluid bg-black text-white">
        <div class="row">
          <div class="col-lg-6">
            <img src="images/NDUB-Logo-name-ver4-with-slogan.png" alt="logo" style="margin-bottom: 1rem;" data-aos="zoom-out">
            <h5 data-aos="zoom-out">Address: <span style="font-weight: normal;">2/A, Arambagh, Motijheel, GPO Box 7, Dhaka 1000, Bangladesh</span></h5>
                <h5 data-aos="zoom-out">Phone: <span style="font-weight: normal;">+880 2-41070719, +880 2-41070720</span></h5>
                <h5 data-aos="zoom-out">Email:<a class="email-style" href="mailto:info@ndub.edu.bd"> info@ndub.edu.bd</a></h5>

                <div class="follow" data-aos="slide-right">
                    <h4>Follow us:</h4>
                    <div class="icon" style="padding: 3px;">
                        <!-- Facebook link start -->
                        <a style="padding: 10px;" href="https://www.facebook.com/NotreDameUniversityBangladesh" target="_blank"><i class="fa-3x fa-brands fa-facebook-f" style="color:white;"></i></a>
                        <!-- Facebook link end -->

                        <!-- Twitter link start -->
                        <a style="padding: 10px;" href="https://twitter.com/NotreDameUB?t=8JkebCN-dQ_1L30D1IVJwQ&s=09" target="_blank"><i class="fa-3x fa-brands fa-twitter" style="color:white;"></i></i></a>
                        <!-- Twitter link end -->

                        <!-- Instagram link start -->
                        <a style="padding: 10px;" href="https://www.instagram.com/ndub_insta/?hl=en" target="_blank"><i class="fa-3x fa-brands fa-instagram" style="color:white;"></i></i></a>
                        <!-- Instagram link end -->

                        <!-- Youtube link start -->
                        <a style="padding: 10px;" href="https://www.youtube.com/channel/UCcY9MowMiZJpi4j8q7i-2gw" target="_blank"><i class="fa-3x fa-brands fa-youtube" style="color:white;"></i></i></a>
                        <!-- Youtube link end -->
                    </div>
                </div> 
          </div>

          <div class="container mt-3 col-lg-2 link-style" data-aos="zoom-out">
            <h4>ABOUT</h4>
            <ul class="nav flex-column">
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Contact</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Directioy</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> About</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> FAQs</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Admission FAQs</a>
              </li>
              <li class="nav-item">
                <a href="#"><i class="fa fa-angle-down"></i> Career & Internship</a>
              </li>
            </ul>              
          </div>

          <div class="container mt-3 col-lg-2 link-style" data-aos="zoom-out">
            <h4>STUDENTS</h4>
            <ul class="nav flex-column">
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Academic Calender</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Notice & News</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Blog</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Library</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Campus Life</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Campus Jobs</a>
              </li>
            </ul>                
          </div>

          <div class="col-lg-2 container mt-3 link-style" data-aos="zoom-out">
            <h4>GENERAL</h4>
            <ul class="nav flex-column">
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Admission</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Sitemap</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Graphics Resources</a>
              </li>
              <li class="nav-item">
                <a href="#"><i class="fa fa-angle-down"></i> Code of Conducts</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Bulletin & Daystart</a>
              </li>
              <li class="nav-item p-1">
                <a href="#"><i class="fa fa-angle-down"></i> Forms</a>
              </li>
            </ul>               
          </div>
          <div class="copyright" style="text-align: center;">
            <p>Copyright © NDUB 2021 | All rights reserved | Developed by ZSRS</p>
        </div>
      </div>

      
    </div>
    </div>
    <!--Footer ends-->


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