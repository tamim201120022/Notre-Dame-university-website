 <?php
  require('connect.inc.php');

  $sql= "SELECT notice_id, notice_date, details from notice_board order by notice_date desc";

  $sql_query = mysqli_query($con, $sql);

  ?>

  <?php
  require('connect.inc.php');

  $sqlln= "SELECT latest_id, latest_image, latest_date, latest_desc, latest_full_desc from latest_news_board order by latest_date desc";

  $sql_queryln = mysqli_query($conl, $sqlln);

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NDUB</title>

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

    <style>
    .online-application{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("images/pexels-element-digital-1370298.jpg");
    width: 100%;
    height: 40vh;
    background-position: center;
    background-size: cover;
}
/*online application ends*/

/*Notice start*/
.image-notice{
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/notice.jpg");
    background-position: center;
    margin-bottom: 20px;
}
/*Notice ends*/
    </style>

</head>
<body>
    <section class="header">
        <!--Starting navbar-->
        <nav class="navbar navbar-expand-md navbar-light bg-secondary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="ndub.php"><img style="width: 300px;" src="images/NDUB-Logo-name-ver4-with-slogan.png" alt="Logo"></a>
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
                      <li><a class="dropdown-item dropdown-style text-black" href="programs.php">Departments</a></li>
                      <li><a class="dropdown-item dropdown-style text-black" href="programs.php">Programs</a></li>
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
                    <a class="nav-link text-white" href="#notice-sec">Notice</a>
                  </li>

                  <li class="nav-item p-1 rounded btn-outline-primary">
                    <a class="nav-link text-white" href="#latest-sec">Events</a>
                  </li>

                  <li class="nav-item p-1 rounded btn-outline-primary">
                    <a class="nav-link text-white" href="adminform.php">Admin Panel</a>
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

            <!--Carouser Start-->
          <section class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('images/banner.png')">
                  <div class="container slide-1">
                    <div class="row text-white">
                      <div class="col-lg-6">
                        <h1>Welcome to NDUB</h1>
                        <p>Notre Dame University Bangladesh was established quite recently, <br>only in 2013, but the experience and the inspiration that brought it....</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                      </div>
                      <div class="col-lg-6 icon-design">
                        <i class="fa-1x fa-solid fa-building-columns"></i>    <h3>Founded: 2013</h3><br>
                        <i class="fa-1x fa-solid fa-user-lock"></i> <h3>Faculty Members: 100+</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('images/pexels-pixabay-267885.jpg')">
                  <div class="container slide-2">
                    <div class="row text-white">
                      <div class="col-lg-8">
                        <h2>NDUB Students Celebrating their Graduation Moment
                        </h2>
                        <p>The main purpose of the University was to create new areas of knowledge and disseminate such knowledge <br>nationally as well ....</p>
                        <a href="#" class="btn btn-primary">Know More</a>
                      </div>
                      <div class="col-lg-4 icon-design">
                        <i class="fa-solid fa-users"></i> <h3>Regular Students: 2000+</h3><br>
                        <i class="fa-solid fa-users"></i> <h4 style="display: inline-block; line-height: 50px;">Affiliate Collage Students: 2000+</h4>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" style="background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('images/convocation.jpg')">
                  <div class="container slide-3">
                    <div class="row text-white">
                      <div class="col-lg-8">
                        <h1>The Glorious Journey</h1>
                        <p>On the day of July 2013, the University of Notre Dame opened its doors to students with.....
                        </p>
                        <a href="#" class="btn btn-primary">Know More</a>
                      </div>
                          <div class="col-lg-4 icon-design">
                            <i class="fa-1x fa-solid fa-building-columns"></i> <i><h2>Departments: 5</h2></i><br>
                            <i class="fa-1x fa-solid fa-building-columns"></i> <i><h2>Institutes: 1</h2></i><br>
                            <i class="fa-1x fa-solid fa-building-columns"></i> <i><h3 style="display: inline-block; line-height: 50px;">Research Centers: 1</h3></i>
                          </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>                 
            </div>
         </section>
         <!--Carousel end-->
    </section>

   <!--VC sir starts-->
    <section>
        <div class="vc" style="max-width: 80%; display: block; margin: auto;" data-aos="fade-in">
          <div class="card mb-3 m-5" style=" background: linear-gradient(to bottom, #33ccff 0%, #ff99cc 100%);">
            <div class="row">
              <div class="col-md-4">
                <img src="images/Fr.-Patrick-Daniel-Gaffney-CSC-e1625512749397 (1).jpg" class="img-fluid rounded-start vc-hover" alt="Fr.Patrick">
                <h5>Dr. Fr. Patrick Gaffney</h5>
              </div>
              <div class="col-md-8">
                <div class="card-body p-lg-5px">
                  <h3 class="card-title">Message from the Vice Chancellor</h3>
                  <p class="card-text" style="font-size: 16px;">Notre Dame University Bangladesh was established quite recently, only in 2013, but the experience and the inspiration that brought it into existence have deeper roots in Bangladesh.  When Notre Dame College (for boys) and Holy Cross College (for girls) opened their doors almost seventy years ago, the Congregation of Holy Cross, which founded both of them in Dhaka, had already been teaching in the schools of East Bengal for over a hundred years.</p>
                  <p class="card-text"><small class="text-muted">Professor Dr. Fr. Patrick Gaffney</small></p>
                  <a href="#" class="btn btn-primary">Know More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--VC Others starts-->
        <div class="row m-5 " style=" background: linear-gradient(to bottom,#ff99cc 0%, #33ccff 100%);">
          <div class="col-md-4" data-aos="zoom-in">
            <div class="card my-2 card-hover" style="width: 18rem;">
              <img src="images/Fr.-Subas-Adam-Pereira-CSC-NDUB-pojojbjg4mtraw955v7hem4hcv1jvoyuritczf6fo0.jpg"  alt="Fr. Subas">
              <div class="card-body">
                <h5 class="card-title">Fr. Subas Adam Pereira, CSC</h5>
                <p class="card-text">TREASURER</p>
                <a href="#" class="btn btn-primary">Know Details</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 ">
            <div class="card my-2 card-hover" style="width: 18rem;" data-aos="zoom-in">
              <img src="images/Fr.-Boniface-Tolentino-CSC-NDUB-pojoklljfikt3se8ox47asi2gqqjcv1p9us5hza574.jpg" alt="Fr. Boniface">
              <div class="card-body">
                <h5 class="card-title">Fr. Boniface Tolentino, CSC</h5>
                <p class="card-text" style="font-size: 12px;">DEPUTY CONTROLLER OF EXAMINATIONS</p>
                <a href="#" class="btn btn-primary">Know Details</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 ">
            <div class="card my-2 card-hover" style="width: 18rem;" data-aos="zoom-in">
              <img src="images/Fr.-Badhon-Sylvester-Rozario-CSC-pqwztl15utpfaal4u8qh73pkda03qodcjpu91vh6ts.jpg" alt="Fr. Badhon">
              <div class="card-body">
                <h5 class="card-title" style="font-size: 16px;">Fr. Badhon Sylvester Rozario, CSC</h5>
                <p class="card-text">ASST. DEPUTY EXAM CONTROLLER</p>
                <a href="#" class="btn btn-primary">Know Details</a>
              </div>
            </div>
          </div>
        </div>
        <!--VC Others ends-->
    </section>
   <!--VC sir end-->
    
   <!--Course offering start-->
    <div class="course-offering mt-5" style="background-color: #f2ffcc;">
      <div class="container mb-2">
        <h3 class="text-center mb-4">COURSES WE OFFER</h3>
      <div class="row ">
        <div class="col-lg-6 my-2">
          <div class="card text-white bg-primary ">
            <div class="card-body">
              <h5 class="card-title text-center">Undergraduate programs</h5>
              <p class="card-text">Currently, NDUB is offering  BBA, B. Sc. in CSE, BA in English Literature and Bachelor of Laws  programs for Graduate students.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 my-2">
          <div class="card text-white bg-primary">
            <div class="card-body">
              <h5 class="card-title text-center">Graduate programs</h5>
              <p class="card-text">Currently, NDUB is offering MBA for BBA Graduates, Executive MBA (EMBA), MA in English Literature, MA in ELT and Applied Linguistics, & Master of Laws programs for Graduate students.</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <!--Course offering end-->

    <!-- Campus pic & video starts -->
    <div class="campus">
      <h1>OUR GREEN CAMPUS</h1>
      <p> Green And Safe Campus </p>

      <div class="row">
          <div class="campus-col">               
                  <img src="images/newyork.png" alt="campus">
                  <div class="layer">
                      <h3>Motijheel</h3>
                  </div>                  
          </div>
          <div class="campus-col">               
              <video class="campus-video" src="images/NDUB Green Campus.mp4" autoplay muted loop></video>
              </div>                  
      </div>
    </div>
    <!-- Campus pic & video ends -->

<!--Facilities Starts-->
    <div class="facilities" style="margin-top: 100px; background-color: #ffffcc;">
      <h1 style="text-align: center;">Our facilities</h1>
      <p style="text-align: center;">We are trying to do our students world class facilities and we are working on this.</p>

      <div class="container">
        <div class="row">
          <div class="col-md-4" data-aos="zoom-in">
            <div class="card my-2">
              <img  src="images/library.png" class="card-hover" alt="library">
              <div class="card-body">
                <h5 class="card-title">World Class Library</h5>
                <p class="card-text">The NDUB library will support the research, teaching, and learning needs of the NDUB community by providing wide-ranging scholarly resources, facilities, and services to faculty members, staff, and students in the discovery, use, creation, and management of information.</p>
                <a href="#" class="btn btn-primary">Know Details</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card my-2" data-aos="zoom-in">
              <img src="images/player.jpg" class="card-hover" alt="library" >
              <div class="card-body">
                <h5 class="card-title">Largest Playground</h5>
                <p class="card-text">In NDUB, we have big playground where students can play all types of games like volley-ball, hockey, football, cricket and basket ball.</p>
                <a href="#" class="btn btn-primary">Know Details</a>
              </div>
            </div>
          </div>

          <div class="col-md-4" data-aos="zoom-in">
            <div class="card my-2">
              <img src="images/cafeteria.png" class="card-hover" alt="library">
              <div class="card-body">
                <h5 class="card-title">Tasty and Healthy food</h5>
                <p class="card-text">Healthy food produces energy for our body and runs all the functions of the body smoothly. It also keeps our immune system healthy. This is why healthy food keeps our body fit for work and free from diseases.We always look after to service healthy food.</p>
                <a href="#" class="btn btn-primary">Know Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
     <li style="list-style-type: none; text-align:center;"><a href="#" class="btn btn-primary cc">Click for more Facilities</a></li>
    </div>
<!--Facilities ends-->

<!--Notice News Start-->
<div class="notice" id="notice-sec" style="margin-top: 100px; background-color:#e6ffcc;">
  <h1 style="text-align: center;">Notice Board</h1>
              
                
  <div class="container-fluid image-notice">
  
    <div class="row">
    <?php
                while ($data = mysqli_fetch_array($sql_query))
                {
                $id = $data['notice_id'];
                $noticeDate = $data['notice_date'];
                $detailsInfo = $data['details'];               
                ?>
      <div class="col-md-4" data-aos="zoom-out">
        <div class="card my-2 bg-warning">

          <div class="card-header"><i class="fa-2x fa fa-calendar-check" style="color: black;"></i> <h3 style="display: inline-block;"><?php echo $noticeDate?></h3></div>
          
          <div class="card-body">
            <h5 class="card-title"><?php echo $detailsInfo?></h5> 
            <a href="details_notice.php? notice_id=<?php echo $id;?>" target="_blank" class="btn btn-primary">Click Here</a>
          </div>
        </div>
      </div>
      <?php }?>
  <li style="list-style-type: none; text-align:center;"><a href="allnotice.html" target="_blank" class="btn btn-primary my-2">Click for more notice</a></li>
</div>
</div>
</div>

<!--Notice News end-->

<!--Latest News Start-->
    <div class="latest-news" id="latest-sec" style="margin-top: 100px; margin-bottom: 20px; background-color: #ff8080;">
      <h1 style="text-align: center;">Latest News</h1>
    
      <div class="container-fluid">
        <div class="row">
        <?php
                while ($data = mysqli_fetch_array($sql_queryln))
                {
                $idl = $data['latest_id'];
                $latestimage = $data['latest_image'];
                $latestDate = $data['latest_date'];
                $detailsInfol = $data['latest_desc'];               
                ?>
          <div class="col-md-4" data-aos="zoom-out">
            <div class="card my-2">
              <img src="images/<?php echo $latestimage?>" alt="">
              <div class="card-header"><i class="fa-2x fa fa-calendar-check" style="color: black;"></i> <h3 style="display: inline-block;"> <?php echo $latestDate?></h3></div>
              
              <div class="card-body">
                <h5 class="card-title"><?php echo $detailsInfol?></h5>
                
                <a href="details_latest_news.php? latest_id=<?php echo $idl;?>" target="_blank" class="btn btn-primary">Click Here</a>
              </div>
            </div>
            </div>
      <?php }?>
      <li style="list-style-type: none; text-align:center;"><a href="alllatestnews.html" target="_blank" class="btn btn-primary my-3">Click for more notice</a></li>
    </div>
    </div>
    </div>
<!--Latest News end-->

<!--online application start-->
    <section class="online-application" style="margin: 100px 0;" data-aos="zoom-out">
      <div class="container-fluid text-white">
        <h3>ONLINE APPLICATION</h3>
        <h2>We are offering online-application for those who are interested to admit our University</h2>
        <li style="list-style-type: none; text-align:center;"><a href="admission.php" target="_blank" class="btn btn-primary my-2">Click Here</a></li>
      </div>
    </section>
<!--online application start-->

<!--Review Starts-->
      <div class="review" style="margin-top: 100px; background-color: #ccfff2;">
        <h1 style="text-align: center;">What out student says</h1>
      
          <div class="container mb-2">
            <div class="row">
            <div class="col-md-6 bg-secondary text-white m-2 p-2 border rounded" data-aos="slide-right">
            <blockquote class="blockquote p-3">
            <img  src="images/surovi.jpg" alt="" class="border rounded-circle img-fluid" style="width: 50px;">
            <p>Our teachers don't just stick to what is on our syllabus. What they do is they discuss with us the current social-political happenings around the world and this is what makes us socially and politically conscious,which I believes really important for a young person in today's world.</p>

            <footer class="blockquote-footer text-black">
            </footer>
              </blockquote>
            </div>

            <div class="col-md-5 bg-info text-black m-2 p-2 border rounded" data-aos="slide-left">
              <blockquote class="blockquote p-3">
                <img  src="images/user2.jpg" alt="" class="border rounded-circle img-fluid" style="width: 50px;">
                <p>NDUB is an educational institution where even an ordinary student gets inspired towards studies. The positive environment here brings out the best from the students and helps us grow in tune with the times. Here variety of extracurricular activities,seminars-workshops on the recent issues and colorful events are eld on festive days,which ensures our positive mental growth.</p>

                <footer class="blockquote-footer text-muted">
                        Tamim Ahmed <abbr title="Computer Science and Engineering batch no 14">CSE-13</abbr>
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
<!--Review ends-->

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