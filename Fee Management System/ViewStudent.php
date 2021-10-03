<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Acccountant</title>
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

  $query = "SELECT * FROM STUDENTS ORDER BY ID";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<table border="1" style="width:100%;border:1px solid white;">';
    echo "<th>ID</th>
          <th>&nbsp;&nbsp;&nbsp;NAME&nbsp;&nbsp;&nbsp;</th>
          <th>BRANCH</th>
          <th>&nbsp;&nbsp;&nbsp;BATCH&nbsp;&nbsp;&nbsp;</th>
          <th>CAT</th>
          <th>PASSWORD</th>
          <th>GEN</th>
          <th>E-MAIL</th>
          <th>CONTACT</th>
          <th>ADDRESS</th>
          <th>CONTROL</th>";
    while($row = mysqli_fetch_assoc($result)) {
        $field1name = $row["ID"];
        $field2name = $row["NAME"];
        $field3name = $row["PASSWORD"];
        $field4name = $row["EMAIL"];
        $field5name = $row["CONTACT"];
        $field6name = $row["ADDRESS"];
        $field7name = $row["GENDER"];
        $field8name = $row["Branch"];
        $field9name = $row["CATEGORY"];
        $field10name = $row["BATCH"];

        echo '<tr>
                  <td style="width:200px;">'.$field1name.'</td>
                  <td style="width:400px;" align="left">'.$field2name.'</td>
                  <td align="left">'.$field8name.'</td>
                  <td align="left">'.$field10name.'</td>
                  <td>'.$field9name.'</td>
                  <td align="left">'.$field3name.'</td>
                  <td>'.$field7name.'</td>
                  <td align="left">'.$field4name.'</td>
                  <td style="width:200px;">'.$field5name.'</td>
                  <td style="width:200px;" align="left">'.$field6name.'</td>
                  <td><a href=EditStudent.php?id='.$field1name.'><img src="assets/img/e3.png"/></a>
                      <a href=DeleteStudent.php?id='.$field1name.'><img src="assets/img/d3.png"/></a></td>
              </tr>';
    }
    echo "</table>";
  } else {
    echo "0 results";
  }

  mysqli_close($conn);
  ?>
</div>
</header>

</body>
</html>
