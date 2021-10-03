<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Home</title>
    <link rel="icon" type="image/x-icon" href="assets/img/1.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesView.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>


<?php
$uname = $_POST["Acc_uname"];
$pass = $_POST["Acc_pass"];
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Fee_DB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM ACCOUNTANTS WHERE PASSWORD = '$pass' AND EMAIL='$uname'";
$res = mysqli_query($conn,$query);
//echo "Rows:" . mysqli_num_rows($res);
if(mysqli_num_rows($res)>0){
  $count=1;
}

if($count == 1) {
  $_SESSION['accountant'] = "true";
}else {
  $_SESSION['accountant'] = "false";
}
//print_r($_SESSION);

if($_SESSION['accountant'] == "true"){
  header("Location:AccountantHome.html");
}
else{
  echo '<script>alert("Invalid username or password. Try again.");
          window.history.back();
        </script>';
}

mysqli_close($conn);
?>

<script src="js/scripts.js"></script>
</body>
</html>
