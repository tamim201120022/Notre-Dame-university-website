<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!--Bootstrap css starts-->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootstrap css ends-->

    <!--Link of CSS file starts-->
    <link rel="stylesheet" href="style/admission-form.css">
    <!--Link of CSS file ends-->

    <style>
      *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
    font-family: Arial, Helvetica, sans-serif;
}
    body{
    background-image: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)), url('images/admin.jpg');
    background-size: cover;
    background-position: center;
      }
    .login-box{
    max-width: 700px;
    float: none;
    margin: 150px auto;
}
  .login-left{
    background: rgb(211, 211, 211,0.5);
    padding: 30px;
  }
.login-right{
    background: #fff;
    padding: 30px;
}
.form-control{
    background-color: transparent !important;
}
    </style>
</head>

<body>
<section class="header">
  <nav class="navbar navbar-expand-md navbar-black fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="ndub.html"><img style="width: 90px; height: 90px;" src="images/ndub-logo.jpg" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item p-1 btn-outline-primary">
              <a class="nav-link text-white"  href="ndub.php">Home</a>
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
      </div>
    </nav>
</section>

<section class="login-signin">
<div class="container" >
    <div class="login-box">
    <div class="row">
      <div class="col-md-6 login-left">
        <h2>Login Here</h2>
        <form action="adminvalidation.php" method="post">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user" class="from-control" required>
          </div>
          <div class="from-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <h5>Don't have account? <a style="color: white;" href="admission-form.php">Register</a> first</h5>
        </form>
      </div>

      <div class="col-md-6 login-right">
        <h2>Register Here</h2>
        <form action="adminregistration.php" method="post">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="user" class="from-control" required>
          </div>
          <div class="from-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" required>
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
    </div>
  </div>
</section>
  


</body>
</html>
