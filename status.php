
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
  $sql = "SELECT * FROM reservation WHERE id='$a' AND ref='$b' ";
$result = $con->query($sql);

if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
      
  
?>
<p  style="text-align: center; border-radius: 10px; background: #b3e6ff; padding:  15px; margin: 5px; font-size: 120%; font-weight: bold; width: all;">
  <font style="font-size: 130%;" color="#005580"><?php echo "<u>Reservation Status</u>";  ?></font><br>

  <?php echo "Name: " .$row['name'];  ?><br>
    <?php echo "Employee ID : " .$row['id'];  ?><br>
    <?php echo "Raferance ID : " .$row['ref'];  ?><br>
    <?php echo "Rest House Station : " .$row['house'];  ?><br>
    <?php echo " Status :" .$row['status'];  ?><br>
</p>
  <?php
    }
} else {
    echo "0 results   "  ;
}
$con->close();
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