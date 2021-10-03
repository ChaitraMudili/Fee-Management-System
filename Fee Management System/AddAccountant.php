<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Home</title>
        <link rel="icon" type="image/x-icon" href="assets/img/Admin.png" />
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
    $id = $_POST["id_no"];
    $name = $_POST["Ac_name"];
    $password = $_POST["Ac_pass"];
    $email = $_POST["Email"];
    $contact = $_POST["Phone"];
    $gender = $_POST["Gender"];
    $address = $_POST["Address"];

    //echo $id . $name . $passsword . $email . $contact . $gender . $address;
    $query = "INSERT INTO accountants (ID,NAME,PASSWORD,GENDER,EMAIL,CONTACT,ADDRESS) VALUES ('$id', '$name','$password','$gender','$email', '$contact', '$address');";

    if (mysqli_query($conn, $query)) {
      echo '</br></br></br><h4><b>Accountant details added succesfully!</b></h4></br></br></br></br>';
    } else {
      echo '</br></br></br><h4><b>Accountant addition failed. Please try again.</b></h4></br></br></br></br>';
    }

    mysqli_close($conn);
     ?>
   </div>
 </header>
</body>
</html>
