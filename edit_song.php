<?php

$song_name = "";
$song_img = "";
$song_singer = "";
$song_price = "";
$song_audio = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["song_name"])) { $song_name = $_POST['song_name']; }
    if(isset($_POST["song_img"])) { $song_img = $_POST['song_img']; }
    if(isset($_POST["song_singer"])) { $song_singer = $_POST['song_singer']; }
    if(isset($_POST["song_price"])) { $song_price = $_POST['song_price']; }
    if(isset($_POST["song_audio"])) { $song_audio = $_POST['song_audio']; }
    //Code xử lý, insert dữ liệu vào table
    $sql = "UPDATE song SET song_name='$song_name',song_img='$song_img',song_singer='$song_singer',song_price='$song_price',song_audio='$song_audio' WHERE song_id='song_id'";

    if ($con->query($sql) === TRUE) {
            echo "<script>alert('Song Has Been update successfully!')</script>";
            echo "<script>window.open('hienthi.php','_self')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>

<form action="" method="post">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center;font-size: 50px;">UPDATE</legend>

<div style="width: 500px;
    height: 600px;
    border: 10px solid gray;
    margin-left: 700px;
    border-radius: 10px;">

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
            <button type="submit" name="singlebutton" class="btn btn-primary">Save</button>
          </div>
        </div>
</div>
       ?>