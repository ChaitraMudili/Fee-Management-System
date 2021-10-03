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
    session_start();
    $id = $_SESSION["id"];
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

    $query= "SELECT * FROM FEE_DUES F WHERE F.ID='$id';";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    $query2= "SELECT NAME FROM STUDENTS S WHERE S.ID='$id';";
    $result2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_array($result2);
    $name = $row2[0];

    //print_r($row);
    $radio = $_GET["pay"];

    $field1name = $row[1];
    $field2name = $row[2];
    $field3name = $row[3];
    $field4name = $row[4];
    $field5name = $row[5];
    $field6name = $row[6];
    //get values
    $val1 = (int)$_SESSION["val1"];
    $val2 = (int)$_SESSION["val2"];
    $val3 = (int)$_SESSION["val3"];
    $val4 = (int)$_SESSION["val4"];
    $val5 = (int)$_SESSION["val5"];
    $val6 = (int)$_SESSION["val6"];

    //echo $val1 . $field1name . $field2name . $val2;
  if($val1<=$field1name and $val2<=$field2name and $val3<=$field3name and $val4<=$field4name and $val5<=$field5name and $val6<=$field7name) {

    $query1 = "UPDATE fee_dues SET TUITION=$field1name-$val1,
                                    T_AND_P=$field2name-$val2,
                                    EXAM=$field3name-$val3,
                                    MISCELLANEOUS=$field4name-$val4,
                                    TRANSPORT=$field5name-$val5,
                                    HOSTEL=$field6name-$val6
                                    where ID='$id';";

    if (mysqli_query($conn, $query1)) {
      date_default_timezone_set("Asia/Kolkata");

      $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $r_no = date(dmy) . substr(str_shuffle($permitted_chars),0, 4);

      $total = 0.0;

      echo '<h4>Payment successful for ID <u>' . $id .  '</u>.</h4>
            <form name="receipt">
              <table style="border:1px solid black;border-collapse:collapse;" align="center" cellpadding="10" cellspacing="10" bgcolor="White" width="75%">
                <tr><td colspan="2"><h4 style="color:black;">PAYMENT RECEIPT</h4></td></tr>
                <tr style="color:black;">
                  <td colspan="2" align="left"><b>Date</b></br>' . date("d/m/y") . "  " . date("l"). "  " . date("h:i:sa"). '</td>
                </tr>
                </br>
                <tr style="color:black;">
                  <td align="left"><b></br>Student Details</b></td>
                </tr>
                <tr style="color:black;" align="left">
                  <td>ID  :  </td><td align="left">' . $id . '</td>
                </tr>
                <tr style="color:black;" align="left">
                  <td>Name  :  </td><td align="left">' . $name . '</td>
                </tr>
                <tr></br></tr>

                <tr style="color:black;">
                  <td align="left"><b></br>Payment Details</b></td>
                </tr>
                <tr style="color:black;" align="left">
                  <td>Mode of Payment  :  </td><td>Online-' . $radio . '</td>
                </tr>
                <tr style="color:black;" align="left">
                  <td>Receipt Number  :  </td><td>' . $r_no . '</td>
                </tr>
                <tr></br></tr>

                <tr style="color:black;">
                  <td align="left"><b></br>Amount Received</b></td>
                </tr>
                <tr><td colspan="2">
                  <table border="1" align="center" cellpadding="10" cellspacing="10" bgcolor=#F5F1F1>
                    <tr>
                  ';
                    if ($val1!=0) {
                      echo '<th style="color:black;" bgcolor=#D7EFF7>TUITION</th>';
                    }
                    if ($val2!=0) {
                      echo '<th style="color:black;" bgcolor=#D7EFF7>T_AND_P</th>';
                    }
                    if ($val3!=0) {
                      echo '<th style="color:black;" bgcolor=#D7EFF7>EXAM</th>';
                    }
                    if ($val4!=0) {
                      echo '<th style="color:black;" bgcolor=#D7EFF7>MISCELLANEOUS</th>';
                    }
                    if ($val5!=0) {
                      echo '<th style="color:black;" bgcolor=#D7EFF7>TRANSPORT</th>';
                    }
                    if ($val6!=0) {
                      echo '<th style="color:black;" bgcolor=#D7EFF7>HOSTEL</th>';
                    }
                    echo '<th style="color:black;" bgcolor=#D7EFF7>TOTAL PAYMENT</th>
                          </tr>
                          <tr>';

                    if ($val1!=0) {
                      $total += $val1;
                      echo '<td style="color:black;">' . $val1 . '</td>';
                    }
                    if ($val2!=0) {
                      $total += $val2;
                      echo '<td style="color:black;">' . $val2 . '</td>';
                    }
                    if ($val3!=0) {
                      $total += $val3;
                      echo '<td style="color:black;">' . $val3 . '</td>';
                    }
                    if ($val4!=0) {
                      $total += $val4;
                      echo '<td style="color:black;">' . $val4 . '</td>';
                    }
                    if ($val5!=0) {
                      $total += $val5;
                      echo '<td style="color:black;">' . $val5 . '</td>';
                    }
                    if ($val6!=0) {
                      $total += $val6;
                      echo '<td style="color:black;">' . $val6 . '</td>';
                    }
                    echo '<td style="color:black;">' . $total . '</td>';

                echo '</tr>
                  </table>
                  </td></tr>
                <tr><td colspan="2"></br><input type="button" class="btn btn-primary pull-right" id="printb" value="PRINT RECEIPT" onclick="printpage();"></td></tr>
              </table>
            </form>
                ';
     }
    }
    else {
      echo '</br></br></br></br><h4>Payment failed for ID <u>' . $id .  '</u></h4></br></br></br>';
    }

    mysqli_close($conn);
     ?>
     <script type="text/Javascript">
    function printpage() {
        var printButton = document.getElementById("printb");
        printButton.style.visibility = 'hidden';
        window.print()
        printButton.style.visibility = 'visible';
    }
    </script>
   </div>
 </header>
</body>
</html>
