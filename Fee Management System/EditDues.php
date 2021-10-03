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

    $id = $_GET['id'];

    $query = "SELECT * FROM FEE_DUES F WHERE F.ID='$id';";
    $result = mysqli_query($conn,$query); // select query
    $row = mysqli_fetch_array($result); // fetch data
    //print_r($row);
?>

<form action="UpdateDues.php" method="post">
  <br />
  <h3 align="center" class="serif" style="color: white; font-size: 30px;">Edit Dues</h3>
  <br />
  <table border="0" align="center" cellpadding="10" cellspacing="10" bgcolor="White">
    <tr>
      <td style="color:black;" colspan="2">
         <h5 align="center">Fee Dues</h5>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
         ID :
      </td>
      <td>
        <input type = "text" name="id_no" size="20" value="<?php echo $row[0]; ?>" readonly="true"/>
      </td>
    </tr>

    <tr>
      <td style="color:black;">
         TUITION :
      </td>
      <td>
        <input type = "text" name="tu" size="20" value="<?php echo $row[1]; ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
         T_AND_P :
      </td>
      <td>
        <input type = "text" name="tp" size="20" value="<?php echo $row[2]; ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
         EXAM :
      </td>
      <td>
        <input type = "text" name="exam" size="20" value="<?php echo $row[3]; ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
         MISCELLANEOUS :
      </td>
      <td>
        <input type = "text" name="mis" size="20" value="<?php echo $row[4]; ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
         TRANSPORT :
      </td>
      <td>
        <input type = "text" name="tr" size="20" value="<?php echo $row[5]; ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
         HOSTEL :
      </td>
      <td>
        <input type = "text" name="hos" size="20" value="<?php echo $row[6]; ?>"/>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <input type="submit" name="SB" value="UPDATE"/>
      </td>
    </tr>
  </table>
</form>

<?php
mysqli_close($conn);
 ?>

   </div>
 </header>
</body>
</html>
