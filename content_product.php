
<?php
		
		if(isset($_GET["quanly"]))
		{
			$row = $_GET["quanly"];
		}
		else
			$row = "";
		if ($row == "delete_product") {
			include("delete.php");
		}else if ($row == "hienthi") {
			include("hienthi.php");
		}else if ($row == "search_product") {
			include("search_product.php");
		}
?>
