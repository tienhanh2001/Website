<html>

   <head>
   </head>

   <body>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">


</head>
<body style="height: 100%;">
<!-- menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
     <a class="navbar-brand" href="main.php"><img src="logo.jpg" alt="" style="height: 80px; width: 120px;"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="main.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Genre</a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Bolero</a>
                      <a class="dropdown-item" href="#">Pop</a>
                      <a class="dropdown-item" href="#">Rock</a>
                      <a class="dropdown-item" href="#">EDM</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"></a>
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link" href="#"> <span class="glyphicon glyphicon-user"></span>Artist</a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="#">VN</a>
                      <a class="dropdown-item" href="#">US</a>
                      <a class="dropdown-item" href="#">UK</a>
                      <a class="dropdown-item" href="#">Korea</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#"></a>
                  </div>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="getproduct.php"> <span class="glyphicon glyphicon-user">Album</span></a>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown">
                     User profile
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="index.php">Login</a>
                      <a class="dropdown-item" href="register.php">Register</a>
                      <a class="dropdown-item" href="register.php">Logout</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="hienthi.php">Admin</a>
                  </div>
              </li>
          </ul>

           <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="ok"><a href=""/>Search</button>
          </form>
      </div>
  </div>
</nav>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="1.jpg" alt="First slide" style="width: 1000px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="2.jpg" alt="Second slide" style="width: 1000px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="3.jpg" alt="Third slide" style="width: 1000px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="4.jpg" alt="Fourth slide" style="width: 1000px; height: 500px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="5.jpg" alt="Fifth slide" style="width: 1000px; height: 500px;">
    </div>
  </div>





  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>












      <?php
         if(isset($_POST['delete']))
         {
            $hostname = "54.147.207.19";
            $user = "Hanhnt";
            $pass = "17092001";
            $db = "webzing";
            $con = mysqli_connect($hostname,$user,$pass,$db);
            mysqli_query($con,$db);
            mysqli_set_charset($con,"utf8");

            $song_id = $_POST['song_id'];

            $sql = "DELETE from song WHERE song_id = $song_id" ;

            if ($con->query($sql) === TRUE) {
               echo "<script>alert('Delete successfully !')</script>";
               echo "<script>window.open('hienthi.php','_self')</script>";
            } else {
                echo "Xóa thất bại: " . $con->error;
            }
         }
         else
         {
            ?>
            <div align="center">
               <form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                     <p style="font-size: 30px;">Select the ID you want to remove</p>

                     <tr>
                        <td width="100">ID :</td>
                        <td><input name="song_id" type="text" id="song_id"></td>
                     </tr>

                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>

                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="delete" type="submit" id="delete" value="Delete" class="btn btn-danger">
                        </td>
                     </tr>

                  </table>
               </form>
            </div>
            <?php
         }
      ?>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
