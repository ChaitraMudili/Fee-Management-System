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
  $id = $_SESSION["id"];
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

  echo "<h5><b>Total Dues&nbsp&nbsp;:&nbsp&nbsp;Rs. " . $sum["TOTAL"] . "</b></h5></br>";

  echo '<form name="paying" action="PayDues.php" method = "post">
        <table border=1>
        <tr>
          <th><b>TYPE</b></th>
          <th><b>DUES</b></th>
          <th><b>PAYING</b></th>
        </tr>
        ';


    echo '<tr>
            <td align="left"><input type="checkbox" name="choice" value="' . $field3name . '" onchange="CheckBox()"/>    Tution </td><td align="left">'. $field3name . '</td>
            <td><input type="text" id="tut" name="val1" value="0.0" onchange="CallOthers()"/></td>
          </tr>
          ';

    echo '<tr>
          <td align="left"><input type="checkbox" name="choice" value="' . $field4name . '" onchange="CheckBox()"/>    T_AND_P </td><td align="left">'. $field4name . '</td>
          <td><input type="text" id="tp" name="val2" value="0.0" onchange="CallOthers()"/></td>
        </tr>
          ';

    echo '<tr>
          <td align="left"><input type="checkbox" name="choice" value="' . $field5name . '" onchange="CheckBox()"/>    EXAM </td><td align="left">'. $field5name . '</td>
          <td><input type="text" id="exam" name="val3" value="0.0" onchange="CallOthers()"/></td>
        </tr>
          ';

    echo '<tr>
          <td align="left"><input type="checkbox" name="choice" value="' . $field6name . '" onchange="CheckBox()"/>    MISCELLANEOUS </td><td align="left">'. $field6name . '</td>
          <td><input type="text" id="mis" name="val4" value="0.0" onchange="CallOthers()"/></td>
        </tr>
          ';

    echo '<tr>
          <td align="left"><input type="checkbox" name="choice" value="' . $field7name . '" onchange="CheckBox()"/>    TRANSPORT </td><td align="left">'. $field7name . '</td>
          <td><input type="text" id="tr" name="val5" value="0.0" onchange="CallOthers()"/></td>
        </tr>
          ';

    echo '<tr>
          <td align="left"><input type="checkbox" name="choice" value="' . $field8name . '" onchange="CheckBox()"/>    HOSTEL </td><td align="left">'. $field8name . '</td>
          <td><input type="text" id="hos" name="val6" value="0.0" onchange="CallOthers()"/></td>
        </tr>
          ';
    echo '
        </tr></table>
        </br>
        <h5><b>Paying&nbsp&nbsp;:&nbsp&nbsp;Rs.&nbsp;&nbsp;<input type="text" size="5" name="pay" value="0.0" readonly="true"/></b></h5>
        </br>
        <input type="submit" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="PAY"/>
        </form>
        ';
  //echo '<h5><b>Paying&nbsp&nbsp;:&nbsp&nbsp;Rs.&nbsp;&nbsp;<input type="text" size="5" name="pay" value="0.0"/></b></h5>';

?>
<script type="text/javascript">

        function CallOthers(){
          TextFieldCheck();
          TextSum();
        }

        function TextFieldCheck(){
          try{
          if(parseFloat(document.paying.val1.value) > parseFloat(document.paying.choice[0].value)){
            alert("Enter a value less than your Due!");
            document.paying.val1.value = '';
            document.paying.val1.focus();
          }
          }
          catch{}

          try{
          if(parseFloat(document.paying.val2.value) > parseFloat(document.paying.choice[1].value)){
            alert("Enter a value less than your Due!");
            document.paying.val2.value = '';
            document.paying.val2.focus();
          }
          }
          catch{}

          try{
          if(parseFloat(document.paying.val3.value) > parseFloat(document.paying.choice[2].value)){
            alert("Enter a value less than your Due!");
            document.paying.val3.value = '';
            document.paying.val3.focus();
          }
          }
          catch{}

          try{
          if(parseFloat(document.paying.val4.value) > parseFloat(document.paying.choice[3].value)){
            alert("Enter a value less than your Due!");
            document.paying.val4.value = '';
            document.paying.val4.focus();
          }
          }
          catch{}

          try{
          if(parseFloat(document.paying.val5.value) > parseFloat(document.paying.choice[4].value)){
            alert("Enter a value less than your Due!");
            document.paying.val5.value = '';
            document.paying.val5.focus();
          }
          }
          catch{}

          try{
          if(parseFloat(document.paying.val6.value) > parseFloat(document.paying.choice[5].value)){
            alert("Enter a value less than your Due!");
            document.paying.val6.value = '';
            document.paying.val6.focus();
          }
          }
          catch{}
          return true;
        }

        function TextSum(){
          document.paying.pay.value = '';
		      var sum = 0.0;
          try{
		          if (document.paying.choice[0].checked) {
                sum = sum + parseFloat(document.paying.val1.value);
              }
              }
              catch{}

            try{
              if (document.paying.choice[1].checked) {
                 sum = sum + parseFloat(document.paying.val2.value);
              }
              }
              catch{}

              try{
              if (document.paying.choice[2].checked) {
                  sum = sum + parseFloat(document.paying.val3.value);
              }
              }
              catch{}

              try{
              if (document.paying.choice[3].checked) {
                  sum = sum + parseFloat(document.paying.val4.value);
              }
              }
              catch{}

              try{
              if (document.paying.choice[4].checked) {
                  sum = sum + parseFloat(document.paying.val5.value);
              }
              }
              catch{}
              try{
              if (document.paying.choice[5].checked) {
                  sum = sum + parseFloat(document.paying.val6.value);
              }
              }
              catch{}
           document.paying.pay.value = sum;
        }

</script>

<?php
  mysqli_close($conn);
?>

</div>
</header>
<script src="js/scripts.js"></script>
</body>
</html>
