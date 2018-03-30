
<html lang="en-GB" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>WEST CENTRAL RAILWAY</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="icon" href="./images/logo.png" type="image/jpg" sizes="16x16">
</head>
<body>
<div id="container">
  <div id="header">
    <h5 style="float:center">WEST CENTRAL RAILWAY</h5><h6 align="center">KOTA DIVISION</h6>
  </div>
  <div class="divider"></div>
  <hr><h3 align="center">OFFICERS REST HOUSE BOOKING</h3><hr>
  <div id="sidebar">
    <ul>
      <li><a href="index.php">Home</a></li><br>
      <li><a href="reg.php">RESERVATION REQUEST</a></li><br>
      <li><a href="status.php">CHECK STATUS</a></li><br>
      <li><a href="canc.php">CANCELLATION REQUEST</a></li><br>
      <li><a href="./images/rate.jpg">RATE LIST</a></li><br>
      <li><a href="#">CONTACT</a></li><br>
    </ul>
  </div>
  <div id="main">
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <table cellpadding="2px"; border="1" align="center" >
      
        <tr>
          <td colspan="2" align="center"><b>RESERVATION STATUS</b></td>
        </tr>
        <tr>
          <td align="center">Officer's ID</td>
          <td><input type="text" name="eid"></td>
        </tr>
        <tr>
          <td align="center">Reference No.</td>
          <td><input type="text" name="ref"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="r"> &nbsp; <input type="reset"></td>
        </tr>
      
    </table>
    </form>

<?php

if(isset($_POST['r']))
{
  include ('conn.php');
  $a=$_POST['eid'];
  $b=$_POST['ref'];

    $g="DELETE FROM reservation WHERE id='$a' AND ref='$b'";
  if(mysqli_query($con,$g)){
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}    
    

  }
  
?>
  </div>
  <div class="divider"></div>
  <div id="footer">
    <p align="center">&copy; &nbsp;<a href="http://www.wcr.indianrailways.gov.in/" target="_blank";>WEST CENTRAL RAILWAY</a>, KOTA DIVISION</p>
  </div>
</div>
</body>
</html>