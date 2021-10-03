<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Accountant</title>
        <link rel="icon" type="image/x-icon" href="assets/img/acc.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
  <header class="masthead">
  <div class="container">
    <?php
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

    //get values
    $id = $_POST['id_no'];
    $field1name = (int)$_POST["tu"];
    $field2name = (int)$_POST["tp"];
    $field3name = (int)$_POST["exam"];
    $field4name = (int)$_POST["mis"];
    $field5name = (int)$_POST["tr"];
    $field6name = (int)$_POST["hos"];

    //echo $id . $field1name . $field2name . $field3name;
    $query1 = "UPDATE fee_dues SET TUITION=$field1name,
                                  T_AND_P=$field2name,
                                  EXAM=$field3name,
                                  MISCELLANEOUS=$field4name,
                                  TRANSPORT=$field5name,
                                  HOSTEL=$field6name
                                  where ID='$id';";

    if (mysqli_query($conn, $query1)) {
      echo '</br></br></br><h4>Fee Dues for ID <u>' . $id .  '</u> updated successfully.</h4></br></br></br></br>';
    } else {
      echo '<h4>Updation for ID <u>' . $id .  '</u> failed.</h4>';
    }

    mysqli_close($conn);
     ?>
   </div>
 </header>
</body>
</html>
