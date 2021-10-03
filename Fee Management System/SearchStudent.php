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

<!-- Masthead-->
<header class="masthead">
<div class="container" >

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

  $id = $_POST["id_no"];

  $query = "SELECT S.ID, S.NAME, F.TUITION, F.T_AND_P, F.EXAM, F.MISCELLANEOUS, F.TRANSPORT, F.HOSTEL
            FROM STUDENTS S, FEE_DUES F
            WHERE S.ID=F.ID AND S.ID='$id';";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
    echo "<th>ID</th>
          <th>NAME</th>
          <th>TUITION</th>
          <th>T_AND_P</th>
          <th>EXAM</th>
          <th>MISCELLANEOUS</th>
          <th>TRANSPORT</th>
          <th>HOSTEL</th>
          <th>EDIT</th>
          ";
    while($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["ID"];
        $field2name = $row["NAME"];
        $field3name = $row["TUITION"];
        $field4name = $row["T_AND_P"];
        $field5name = $row["EXAM"];
        $field6name = $row["MISCELLANEOUS"];
        $field7name = $row["TRANSPORT"];
        $field8name = $row["HOSTEL"];

        echo '<tr>
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td>
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td><a href=EditDues.php?id='.$field1name.'><img src="assets/img/e3.png"/></a></td>
              </tr>';
    }
    echo "</table></br></br></br></br></br></br>";
  } else {
    echo '</br></br></br><h4 size="10px"><b>ID not found.</br>
          Enter valid details.</b></h4></br></br></br>';
  }

  mysqli_close($conn);
  ?>
</div>
</header>

</body>
</html>
