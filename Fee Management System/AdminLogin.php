<html>
<body>

<body>
<?php
$uname = $_POST["A_uname"];
$pass = $_POST["A_pass"];
session_start();
if(($uname=="admin@feereport.com") && ($pass=="admin_123")){
			$_SESSION["admin"] = "true";
      //$_SESSION["login"] = "true";
			header("Location:AdminHome.html");
		}
else{
		$_SESSION["admin"] = "false";
		echo '<script>alert("Invalid username or password. Try again.");
	          window.history.back();
	        </script>';
	}
?>
<script src="js/scripts.js"></script>
</body>
</html>
