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

    $id = $_GET['id']; // get id through query string
    $query = mysqli_query($conn,"select * from accountants where id='$id'"); // select query
    $row = mysqli_fetch_array($query); // fetch data
?>

<form action="UpdateAccountant.php" method="post">
  <br />
  <h3 align="center" class="serif" style="color: white; font-size: 30px;">Accountant Details Updation</h3>
  <br />
  <table border="0" align="center" cellpadding="10" cellspacing="10" bgcolor="White">
    <tr>
      <td style="color:black;">
        ID :
      </td>
      <td>
        <input type = "text" name="id_no" size="20" value="<?php echo $row["ID"] ?>" readonly="true"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
        Name :
      </td>
      <td>
        <input type = "text" name="Ac_name" size="20" value="<?php echo $row["NAME"] ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
        Password :
      </td>
      <td>
      <input type = "password" name="Ac_pass" size="20" value="<?php echo $row["PASSWORD"] ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
        Email :
      </td>
      <td>
        <input type="text" name="Email" size="20" value="<?php echo $row["EMAIL"] ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
        Phone Number :
      </td>
      <td>
        <input type="text" name="Phone" size="20" value="<?php echo $row["CONTACT"] ?>"/>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
        Gender :
      </td>
      <td>
        <input type="radio" value="M" name="Gender" <?php echo ($row["GENDER"]=='M')?'checked':'' ?>/> <h8 style="color:black;">Male</h8>&nbsp;&nbsp;
        <input type="radio" value="F" name="Gender" <?php echo ($row["GENDER"]=='F')?'checked':'' ?>/> <h8 style="color:black;">Female</h8>
      </td>
    </tr>
    <tr>
      <td style="color:black;">
        Address :
      </td>
      <td style="color:black;">
        <input type="text" name="Address" value="<?php echo $row["ADDRESS"] ?>"/>
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
