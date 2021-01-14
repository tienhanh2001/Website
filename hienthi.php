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
                      <a class="dropdown-item" href="login.php">Login</a>
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
$hostname = "localhost";
$user = "root";
$pass = "";
$db = "webzing";
$con = mysqli_connect($hostname,$user,$pass,$db);
mysqli_query($con,$db);
mysqli_set_charset($con,"utf8");

$sql = "select * from song ";
$result = mysqli_query($con,$sql);
?>

<div class="infor">
  <form action="hienthi.php" method = POST>
	<h1 style="width: 100%; height: 40px; text-align: center">All Song</h1>
	<div style="margin-left: 400px; margin-top: 20px; ">
	<table  width="1200" border="1px solid #f3f3f3;" align="center" style="margin-top: 10px; text-align: center;" >
		<tr>
			<th width="50px;">ID</th>
			<th width="350px;">Name</th>
			<th width="250px;">Image</th>
			<th width="250px;">Singer</th>
			<th width="100px;">Price</th>
			<th width="200px;">Audio</th>
			<th width="300px">Actions</th>
		</tr>
		<?php while ($row = mysqli_fetch_array($result)) {
?>
			<tr>
				<td><?php echo $row['song_id']; ?> </td>
				<td><?php echo $row['song_name']; ?></td>
				<td><img src="img/<?php echo $row['song_img']; ?>" style="max-width: 100px;"></td>
				<td><?php echo $row['song_singer']; ?></td>
				<td><?php echo $row['song_price']; ?></td>
				<td><audio controls loop src="mp3/<?php echo $row['song_audio']; ?>"></audio></td>
				<td>
					<a href='insert.php'>Add</a> | 
            <a onclick="return window.confirm('Bạn muốn xóa không');" href="delete.php">Delete</a>  |
					<a href='edit.php'>Edit</a>
				</td>
			</tr>
		<?php } 
		?>
	</table>
		</div>

</div>
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

