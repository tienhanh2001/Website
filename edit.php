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
$username = "Hanhnt"; // Khai báo username
$password = "123@123a";      // Khai báo password
$server   = "34.200.32.20";   // Khai báo server
$dbname   = "webzing";      // Khai báo database

// Kết nối database tintuc
$connect = new mysqli($server, $username, $password, $dbname);

//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
if ($connect->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}

//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
$song_id = "";
$song_name = "";
$song_img = "";
$song_singer = "";
$song_price = "";
$song_audio = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["song_id"])) { $song_id = $_POST['song_id']; }
    if(isset($_POST["song_name"])) { $song_name = $_POST['song_name']; }
    if(isset($_POST["song_img"])) { $song_img = $_POST['song_img']; }
    if(isset($_POST["song_singer"])) { $song_singer = $_POST['song_singer']; }
    if(isset($_POST["song_price"])) { $song_price = $_POST['song_price']; }
    if(isset($_POST["song_audio"])) { $song_audio = $_POST['song_audio']; }
    //Code xử lý, insert dữ liệu vào table
    $sql = "UPDATE song SET song_name='$song_name',song_img='$song_img',song_singer='$song_singer',song_price='$song_price',song_audio='$song_audio' WHERE song_id='$song_id'";

    if ($connect->query($sql) === TRUE) {
            echo "<script>alert('Song Has Been update successfully!')</script>";
            echo "<script>window.open('hienthi.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
?>

<form action="" method="post">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center;font-size: 50px;">Song Update</legend>

<div style="width: 500px;
    height: 600px;
    border: 10px solid gray;
    margin-left: 700px;
    border-radius: 10px;">
        <div class="form-group">
          <label class="col-md-4 control-label">ID:</label>  
          <div class="col-md-4">
          <input name="song_id" placeholder="Song ID" type="text">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label">Name:</label>  
          <div class="col-md-4">
          <input name="song_name" placeholder="Song Name"  type="text">
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">Song Image</label>
          <div class="col-md-4">
            <input name="song_img"  type="file">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label">Singer:</label>
          <div class="col-md-4">
          <input name="song_singer" placeholder="Singer"  type="text">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Price:</label>
          <div class="col-md-4">
          <input name="song_price" placeholder="Price"  type="text">
          </div>
        </div>



        <div class="form-group">
          <label class="col-md-4 control-label" for="filebutton">Song Audio</label>
          <div class="col-md-4">
            <input name="song_audio" type="file">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-4">
            <button type="submit" name="singlebutton" class="btn btn-primary">Edit</button>
          </div>
        </div>
</div>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
