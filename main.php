
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
                      <a class="dropdown-item" href="#">Logout</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="hienthi.php">Admin</a>
                  </div>
              </li>
          </ul>


          <form class="form-inline my-2 my-lg-0" action="search.php" method="get">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="ok">Search</button>
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

<div class="container">
	<div class="row mt-5">
	<h2 class="list-product-title">New Sings</h2>
	<div class="list-product-subtitle">
		<div class="product-group">
			<div class="row">
				<?php 
				$username = "Hanhnt"; // Khai báo username
$password = "17092001";      // Khai báo password
$server   = "54.147.207.19";   // Khai báo server
$dbname   = "webzing";      // Khai báo database

				// Kết nối database tintuc
				$connect = new mysqli($server, $username, $password, $dbname);

				//Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
				if ($connect->connect_error) {
				    die("Không kết nối :" . $conn->connect_error);
				    exit();
				}
				{
						$get_song = " select * from song order by RAND() LIMIT 0,50";
						$run_song = mysqli_query($connect, $get_song);
						while($row_song = mysqli_fetch_array($run_song))
						{
						  $song_id = $row_song['song_id'];
						  $song_name = $row_song['song_name'];
						  $song_img = $row_song['song_img'];
						  $song_singer = $row_song['song_singer'];
						  $song_price = $row_song['song_price'];
						  $song_audio = $row_song['song_audio'];
						  echo "
              
						      <div class='col-md-4 col-sm-1 col-xs-12' style='border-radius: 10px solid gray;'>
						      	<img src='img/$song_img' width='280' height='280' />
							    <h3>$song_name</h3>
								<p>$song_singer</p>
								<p>Price: $song_price VND</p>
								<audio controls style= 'width:250px;'>
				  					<source src='mp3/$song_audio' type='audio/mpeg'>
								</audio>
								<a>
								  <p><a href='#' class='btn btn-primary'>Buy</a></p>
								</a>
							  </div>
              
						  ";
						}
				}

				 ?>
			</div>
		</div>
	</div>
</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

