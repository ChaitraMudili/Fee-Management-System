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
          <link href="css/Payment.css" rel="stylesheet" />
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
<?php
  session_start();
  $id = $_SESSION["id"];
  $_SESSION["val1"] = $_POST["val1"];
  $_SESSION["val2"] = $_POST["val2"];
  $_SESSION["val3"] = $_POST["val3"];
  $_SESSION["val4"] = $_POST["val4"];
  $_SESSION["val5"] = $_POST["val5"];
  $_SESSION["val6"] = $_POST["val6"];

  //echo $_SESSION["val1"];

  $dues = $_SESSION['due'];
  $_SESSION["pay"] = $_POST["pay"];
  $amount = $_POST["pay"];
  if ($_POST["pay"] > $dues){
    echo '<script>
            alert("Enter a value less than or equal to total dues.");
            window.history.back();
        </script>';
  }
  else if($_POST["pay"]=="0.0"){
    echo '<script>
            alert("Enter amount to be paid.");
            window.history.back();
        </script>';
  }

  echo '<form action="UpdateOnPay.php?">
          <table border="0" align="center" cellpadding="10" cellspacing="10" bgcolor="White">
            <tr>
              <td><h6 align="center" class="serif" style="color: black; font-size: 20px;">Amount: </h6></td>
              <td><h6 align="center" class="serif" style="color: black; font-size: 20px;">Rs.&nbsp;' . $amount . '<h6></td>
            </tr>';
?>
    <tr>
      <td style="color:black;"><input type="radio" id="NB" name="pay" value="Net Banking"/></td>
      <td  style="color:black;" align="left"><b>Net Banking<b></td>
    </tr>
    <tr>
      <td align="left" class="serif" style="color: black; font-size: 15px;">Bank : </td>
      <td align="center" class="serif" style="color: black; font-size: 15px;">
        <select id="bank" required oninvalid="this.setCustomValidity('Select Bank.')"
            oninput="this.setCustomValidity('')">
          <option>-----------Choose your Bank-----------</option>
          <option value="SBI">State Bank of India</option>
          <option value="HDFC">HDFC Bank</option>
          <option value="ICICI">ICICI Bank</option>
          <option value="AB">Axis Bank</option>
          <option value="BOB"> Bank of Borada</option>
          <option value="UB">Union Bank of India</option>
          <option value="CB">Canara Bank</option>
          <option value="KMB">Kotak Mahindra Bank</option>
          <option value="IDBI">Industrial Development Bank of India</option>
          <option value="OBC">Oriential Bank of Commerce</option>
        </select>
        </td>
    </tr>

    <tr><td colspan=2></hr></td></tr>
    <tr><td colspan=2></hr></td></tr>
    <tr><td colspan=2></hr></td></tr>

    <tr>
      <td style="color:black;"><input type="radio" id="CC" name="pay" value="Credit Card/Debit Card"/></td>
      <td style="color:black;" align="left"><b>Credit Card/Debit Card<b></td>
    </tr>
    <tr>
      <td align="left" class="serif" style="color: black; font-size: 15px;">Bank :  </td>
      <td  align="center" class="serif" style="color: black; font-size: 15px;">
        <select id="bank">
          <option>-----------Choose your Bank-----------</option>
          <option value="SBI">State Bank of India</option>
          <option value="HDFC">HDFC Bank</option>
          <option value="ICICI">ICICI Bank</option>
          <option value="AB">Axis Bank</option>
          <option value="BOB"> Bank of Borada</option>
          <option value="UB">Union Bank of India</option>
          <option value="CB">Canara Bank</option>
          <option value="KMB">Kotak Mahindra Bank</option>
          <option value="IDBI">Industrial Development Bank of India</option>
          <option value="OBC">Oriential Bank of Commerce</option>
        </select>
        </td>
    </tr>
    <tr>
      <td align="left" class="serif" style="color: black; font-size: 15px;">Card Number : </td>
      <td align="center" class="serif" style="color: black; font-size: 15px;"><input type="text" size="30" placeholder="XXXX-XXXX-XXXX"></input></td>
    </tr>
    <tr>
      <td colspan=2 align="right"><h6 class="serif" style="color: black; font-size: 15px;"><input type="text" size="10" placeholder="MM/YY"></input>&nbsp;&nbsp;&nbsp;
       <input type="text" size="10" placeholder="CVV"></input></td>
    </tr>

    <tr><td colspan=2></hr></td></tr>
    <tr><td colspan=2></hr></td></tr>

    <tr>
      <td><input type="radio" id="UPI" name="pay" value="UPI"/></td>
      <td style="color:black;" align="left"><b>UPI</b></td>
    </tr>
    <tr>
      <td colspan=2><input type="submit" align="center" style="background-color:#1C92FB;" value="CONFIRM PAYMENT"/></td>
    </tr>
  </table>
</form>


</div>
</header>
</body>
</html>
