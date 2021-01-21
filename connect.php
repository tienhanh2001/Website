<?php
		$hostname = "54.147.207.19";
		$user = "Hanhnt";
		$pass = "17092001";
		$db = "webzing";

		$con = mysqli_connect($hostname,$user,$pass,$db);
		mysqli_query($con,$db);
		mysqli_set_charset($con,"utf8");

?>
