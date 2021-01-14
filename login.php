<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body style="margin-top: 30px;">
    <div class="container"style="border: 5px solid gray; border-radius: 20px; background-image: url('login.jpg')" >
        <div class="row">
      <div class="col-md-5 mx-auto">
      <div id="first">
        <div class="myform form ">
           <div class="logo mb-3">
             <div class="col-md-12 text-center">
              <h1>Login</h1>
             </div>
          </div>
                   <form action="" method="post" name="login">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Use name</label>
                              <input type="text" name="username"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter User name">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center ">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm" name="login">Login</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="login-or">
                                 <hr class="hr-or">
                                 <span class="span-or" style="margin-left: 200px;" >or</span>
                              </div>
                           </div>
                           <div class="col-md-12 mb-3">
                              <p class="text-center">
                                 <a href="javascript:void();" class="google btn mybtn"><i class="fa fa-google-plus">
                                 </i> Signup using Google
                                 </a>
                              </p>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="register.php" id="signup">Register here</a></p>
                           </div>
                        </form>
        </div>
      </div>
      <?php
      $con = new mysqli('localhost', 'root', '', 'webzing');
            if (!$con)
            {
              echo "ket noi that bai";
            }
      if(isset($_POST['login']))
      {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result = mysqli_query($con, "select * from account where username='$username' AND password='$password' " );
        $check_login = mysqli_num_rows($result);
        $row_login = mysqli_fetch_array($result);
        if($check_login == 0)
        {
         echo "<script>alert(' Please try again!')</script>";
         exit();
        }
        if($check_login > 0)
        {
        echo "<script>alert('Login successfully !')</script>";
        echo "<script>window.open('main.php','_self')</script>";
        }
      }
      ?>
</body>
</html>