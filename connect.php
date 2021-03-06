<?php
		$hostname = "35.172.225.137";
		$user = "Hanhnt";
		$pass = "hanhnt";
		$db = "webzing";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>
