<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link rel="icon" type="image/x-icon" href="assets/img/admin.png" />
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

    $batch = $_POST['Batch'];
    //$year = substr($yearB,2); // get id through query string
    //echo $year;
    $query = mysqli_query($conn, "SELECT * FROM STUDENTS WHERE ID LIKE '$year%'");


  if(mysqli_num_rows($query)==0){
      echo '</br></br></br><h4><b>No such data.</br>Please try again.</b></h4></br></br></br>';
  }

  else{
    //$query1 = mysqli_query($conn, "DELETE FROM FEE_DUES WHERE ID LIKE '$year%'");
    //$query2 = mysqli_query($conn, "DELETE FROM STUDENTS WHERE ID LIKE '$year%'");
    $query = "SELECT * FROM STUDENTS WHERE BATCH='$batch'";
    $res = mysqli_query($conn,$query);
    //$rows = mysqli_fetch_assoc($res);
    //print_r($rows);
    
    while($row = mysqli_fetch_array($res)){
      $query1 = mysqli_query($conn, "DELETE FROM FEE_DUES WHERE ID='$row[0]'");
    }
    $query2 = mysqli_query($conn, "DELETE FROM STUDENTS WHERE BATCH='$batch'");

    if($query1 && $query2){
      echo '</br></br></br><h4><b>Data for batch <u>'. $batch . '</u> has been deleted.</b></h4></br></br></br></br>';
    }
    else{
      echo '</br></br></br><h4><b>Deletion failed. Please try again.</b></h4></br></br></br></br>'. mysqli_error($conn);
      //echo mysqli_error(conn);
    }
  }

    mysqli_close($conn);
     ?>
   </div>
 </header>
</body>
</html>
