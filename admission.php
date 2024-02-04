<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Bootstrap css starts-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap css ends-->

    <!--Link of CSS file starts-->
    <link rel="stylesheet" href="style/admission.css">
    <!--Link of CSS file ends-->

    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}

.banner .row{
    position: absolute;
    left: 50%;
    top: 55%;
    transform: translate(-50%,-50%);
}
.aa i .bb:hover{
    background-color: white;
    color: black;
}
.aa i .b:hover{
    background-color: blue;
    color: white;
}
    body{
    min-height: 100vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url("images/banner2.jpg");
    background-size: cover;
    background-position: center;
      }
    </style>
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-expand-md navbar-black fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img style="width: 90px; height: 90px;" src="images/ndub-logo.jpg" alt="Logo"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav justify-content-end">
                  <li class="nav-item p-1 btn-outline-primary">
                    <a class="nav-link text-white"  href="#">Notice</a>
                  </li>
                  <li class="nav-item p-1  btn-outline-primary">
                    <a class="nav-link text-white" href="#">Contact</a>
                  </li>
                  <li class="nav-item p-1 btn-outline-primary">
                    <a class="nav-link text-white" href="#">Register</a>
                  </li>
                  <li class="nav-item p-1 btn-outline-primary">
                    <a class="nav-link text-white" href="#">Login</a>
                  </li>                  
                </ul>
              </div>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </section>

    <section class="banner">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-12 aa">
                    <h3>Create an applicant account and apply to NDUB or log in to your existing account</h3>
                    <li style="list-style-type: none; text-align:center;"><a href="admission-form.php" target="_blank"  class="btn btn-primary my-3 bb">Sign Up</a></li>
                    <li style="list-style-type: none; text-align:center;"><a href="admission-form.php" target="_blank"class="btn btn-light my-3 b">Login</a></li>
                </div>
                <p style="text-align: center;">Having trouble? See this <a href="#">Admission Tutorial</a>    |   Still need help?  <a href="#"> Contact Us</a></p>
            </div>
        </div>
    </section>

    <!--Bootstrap javaScript starts-->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!--Bootstrap java ends-->
</body>
</html>