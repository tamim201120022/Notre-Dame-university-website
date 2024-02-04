<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undergraduate Programs</title>

    <!--font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--font awesome cdn-->
    
    <!--Bootstrap css starts-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap css ends-->

    <!--Link of CSS file starts-->
    <link rel="stylesheet" href="index.css">
    <!--Link of CSS file ends-->

    <!--Aos link-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Aos link-->

    
    
    

    <style>

    .image-insert{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/imgbackground.jpg");
    background-size: cover;
    background-position: center;    
      }
    body{
      background-color: #2b6777;
    }
    .effect-card:hover{
      box-shadow: 6px 12px 10px black;
    }

    .email-style{
    color: white;
    text-decoration: none;
    font-weight: normal;
    transition: all 300ms ease;
    }
    .email-style:hover{
    color: crimson;
    font-size: 23px;
    }

  /*About section starts*/
  .link-style ul li a{
    color: white;
    text-decoration: none;
    transition: all 300ms ease;
  }
  .link-style ul li a:hover{
    margin-left: 1rem;
  }
/*About section ends*/

/*follow icon section starts*/
  .follow .icon a{
    transition: all 300ms ease;
  }
  .follow .icon a:hover{
    font-size: 20px;
  }
  .button-class{
  display: flex;
  justify-content: center;
  align-items: center;
  }
  .bba-body-pic{
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/jeshoots-com-9n1USijYJZ4-unsplash.jpg");
    background-size: cover;
    background-position: center; 
}
.cse-body-pic{
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/emile-perron-xrVDYZRGdw4-unsplash.jpg");
    background-size: cover;
    background-position: center; 
}
.ell-body-pic{
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/diomari-madulara-FFZjSpUwc_I-unsplash.jpg");
    background-size: cover;
    background-position: center; 
}
.eco-body-pic{
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/background-economy-02-1-580x387.jpg");
    background-size: cover;
    background-position: center; 
}
.llb-body-pic{
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url("images/sasun-bughdaryan-e11Oa3kvx4c-unsplash.jpg");
    background-size: cover;
    background-position: center; 
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

          <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active image-insert">
      <img  src="" class="d-block w-100" alt="...">
      <div class="carousel d-none d-md-block" style="margin: 300px; color: white;">
        <h2 style="text-align: center;">Undergraduate Programs at NDUB</h2>
        <p style="font-size: 20px; text-align: center;">Currently, NDUB is offering  BBA, B. Sc. in CSE, BA in English Literature and <br> Bachelor of Laws  programs for Graduate students.</p>
        <a href="index.php" class="btn btn-primary button-class">Visit NDUB </a>
      </div>
    </div>
  </div>
</div>

           <!--undergraduate starts-->
    <section class="undergraduate-programs" >
        <div class=" container">
          <div class="text-format" style="margin-top: 150px; color: white;">
          <h4 style="text-align: center; text-align: center;"></h4>
            
            <p class="card-text" style="font-size: 22px;"></p>
            
          </div>           
</div>   
</div>
    </section>
    <!--undergraduate ends-->
    </section>
    <!--Header end-->

    <!--undergraduates details-->
    <section class="details-info" style="margin-top: 20px;">
              <div class="container mb-2 ">
                <div class="row ">
                <div class="col-md-5  text-white m-2 p-2 effect-card bba-body-pic">
              
                <div class="container mt-2">
                <h3>Bachelor of Business Administration</h3>
                <p > <i class="fa-solid fa-circle"></i> <span> 4 years</span> <i class="fa-solid fa-circle"></i> <span> 132 Credit Hours</span> <i class="fa-solid fa-circle"></i> <span>Dept. of Business Administration</span> </p>
                <p style="font-size: 20px;">The Department of Business Administration in the banner of Faculty of Business Studies at Notre Dame University Bangladesh (NDUB) has been running from 2014. The Department of Business Administration at NDUB is the largest department and it has been offering undergraduate and graduate program in Business Administration since inauguration.</p>
                <a href="bba.php" class="btn btn-primary">Learn more</a>
                </div>
                </div>
    
                <div class="col-md-5  text-white m-2 p-2 effect-card cse-body-pic">
                <div class="container mt-2">
                <h3>B.Sc. in Computer Science & Engineering</h3>
                <p > <i class="fa-solid fa-circle"></i> <span> 4 years</span> <i class="fa-solid fa-circle"></i> <span> 143 Credit Hours</span> <i class="fa-solid fa-circle"></i> <span> Dept. of Computer Science & Engineering</span> </p>  
                <p style="font-size: 20px;">The Department of Computer Science and Engineering (CSE), under the Faculty of Science and Engineering has started its journey in 2015. As the newest department CSE is flourishing very rapidly. Faculty members, with their latest knowledge and experience, are running the department very effectively.</p>
        
                <a href="bsc.php" class="btn btn-primary">Learn more</a>
                </div>
                </div>

                <div class="col-md-5  text-white m-2 p-2 effect-card ell-body-pic">
                <div class="container mt-2">
                <h3>Bachelor of Arts in English Language & Literature (ELL)</h3>
                <p > <i class="fa-solid fa-circle"></i> <span> 4 years</span> <i class="fa-solid fa-circle"></i> <span> 132 Credit Hours</span> <i class="fa-solid fa-circle"></i>  <span> Dept. of English</span> </p>
        
                <p style="font-size: 20px;">The Department of English, under the Faculty of Arts and Humanities, commenced its journey when Notre Dame University Bangladesh was granted permission to begin the academic session by the University Grants Commission of Bangladesh in December 2014.</p>
            
                <a href="#" class="btn btn-primary">Learn more</a>
                </div>
                </div>

                <div class="col-md-5  text-white m-2 p-2 effect-card eco-body-pic">
                <div class="container mt-2">
                <h3>Bachelor of Arts in Economics</h3>
                <p > <i class="fa-solid fa-circle"></i> <span> 4 years</span> <i class="fa-solid fa-circle"></i> <span> 135 Credit Hours</span> <i class="fa-solid fa-circle"></i> <span> Dept. of Economics</span> </p>
            
                <p style="font-size: 20px;">Department of Economics of NDUB desires to produce economists who will perform not only as professionals but also as leaders because it remains committed to developing and relating Economics to comprehend and better our economy and society.</p>
                
                <a href="#" class="btn btn-primary">Learn more</a>
                </div>
                </div>

                <div class="col-md-5  text-white m-2 p-2 effect-card llb-body-pic">
                <div class="container mt-2">
                <h3>Bachelor of Laws [LL.B.(Hons.)]</h3>
                <p > <i class="fa-solid fa-circle"></i> <span> 4 years</span> <i class="fa-solid fa-circle"></i> <span> 136 Credit Hours</span> <i class="fa-solid fa-circle"></i> <span> Dept. of Law</span> </p>
                
                <p style="font-size: 20px;">Law degrees have always been among the most sought-after and widely respected courses to study at university. Law degrees are notoriously challenging and for many students, the attraction lies in the unique combination of human interest and intellectual stimulation provided.</p>
                    
                <a href="#" class="btn btn-primary">Learn more</a>
                </div>
                </div>
              </div>
            </div>
    </section>
    <!--undergraduates details-->


   

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