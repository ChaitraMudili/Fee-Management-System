<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Student</title>
        <link rel="icon" type="image/x-icon" href="assets/img/studs.png" />
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
  session_start();
  $id = $_POST["id_no"];
  $_SESSION["id"]=$id;
  $pass = $_POST["St_pass"];
  //echo $id . $pass;

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

  $query1 = "SELECT * FROM STUDENTS WHERE PASSWORD = '$pass' AND ID='$id'";
  $res = mysqli_query($conn,$query1);
  //echo "Rows:" . mysqli_num_rows($res);
  if(mysqli_num_rows($res)>0){
    $count=1;
  }
  if($count == 1) {
    $_SESSION['student'] = "true";
  }else {
    $_SESSION['student'] = "false";
  }

  //print_r($_SESSION);


if($_SESSION['student'] == "true"){
$query = "SELECT S.ID, S.NAME, F.TUITION, F.T_AND_P, F.EXAM, F.MISCELLANEOUS, F.TRANSPORT, F.HOSTEL
          FROM STUDENTS S, FEE_DUES F
          WHERE S.ID=F.ID AND S.ID='$id';";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
    $field1name = $row["ID"];
    $field2name = $row["NAME"];
    $field3name = $row["TUITION"];
    $field4name = $row["T_AND_P"];
    $field5name = $row["EXAM"];
    $field6name = $row["MISCELLANEOUS"];
    $field7name = $row["TRANSPORT"];
    $field8name = $row["HOSTEL"];

$query2 = "SELECT F.TUITION + F.T_AND_P + F.EXAM + F.MISCELLANEOUS + F.TRANSPORT + F.HOSTEL AS TOTAL
          FROM FEE_DUES F
         WHERE F.ID='$id';";
$result2 = mysqli_query($conn, $query2);
$sum = mysqli_fetch_assoc($result2);
$_SESSION["due"] = $sum["TOTAL"];

$query3 = "SELECT CATEGORY FROM STUDENTS WHERE ID = '$id';";
$result3 = mysqli_query($conn, $query3);
$cat = mysqli_fetch_assoc($result3);
//echo $cat["CATEGORY"];
echo '<h6 align="left">ID : '. $field1name . '</h6>';
echo '<h6 align="left">Name : '. $field2name . '</h6>';
echo '<hr>';

$tut = 93000.0;
$tp = 7000.0;
$exam = 1300.0;
$tr = 30000.0;
$mis = 10000;
$hos = 75000.0;

if ($cat["CATEGORY"] == 'A'){
  $reimb = 0.0;
}
else if($cat["CATEGORY"] == 'B'){
  $reimb = 93000.0;
}

$payable = $tut-$reimb;

if (mysqli_num_rows($result) > 0) {

  echo "<table border=1>";
  echo "<th>TYPE</th>
        <th>ACTUAL</th>
        <th>REIMBURSEMENT</th>
        <th>PAYABLE</th>
        <th>BALANCE</th>
        ";

      echo '<tr>
              <td align="left"><b>TUITION</b></td>
              <td>' . $tut . '</td>
              <td>' . $reimb . '</td>
              <td>' . $payable . '</td>
              <td>' . $field3name . '</td>
            </tr>
            <tr>
              <td align="left"><b>T_AND_P</b></td>
              <td>' . $tp . '</td>
              <td>0</td>
              <td>' . $tp . '</td>
              <td>' . $field4name . '</td>
            </tr>
            <tr>
              <td align="left"><b>EXAM</b></td>
              <td>' . $exam . '</td>
              <td>0</td>
              <td>'. $exam .'</td>
              <td>' . $field5name . '</td>
            </tr>
            <tr>
              <td align="left"><b>MISCELLANEOUS</b></td>
              <td>' . $mis . '</td>
              <td>0</td>
              <td>' . $mis . '</td>
              <td>' . $field6name . '</td>
            </tr>
            <tr>
              <td align="left"><b>TRANSPORT</b></td>
              <td>' . $tr . '</td>
              <td>0</td>
              <td>' . $tr .'</td>
              <td>' . $field7name . '</td>
            </tr>
            <tr>
              <td align="left"><b>HOSTEL</b></td>
              <td>' . $hos .'</td>
              <td>0</td>
              <td>' . $hos .'</td>
              <td>' . $field8name . '</td>
            </tr>';

  echo "</table>";

  echo "</br></br>";
  echo "<h5><b>Total Dues&nbsp&nbsp;:&nbsp&nbsp;Rs. " . $sum["TOTAL"] . "</b></h5></br>";
  echo '<form action="StudentPayDues.php"><input type="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="PROCEED TO PAY"/></form>';

} else {
  echo "0 results";
}
}
else{
  echo '<script>alert("Invalid username or password. Try again.");
          window.history.back();
        </script>';
}
  mysqli_close($conn);
  ?>

</div>
</header>
<script src="js/scripts.js"></script>
</body>
</html>
