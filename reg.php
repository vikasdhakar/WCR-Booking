
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
   <form method="post" action="regis.php">
		<table cellpadding="2px"; border="1" align="center" >
			
				<tr>
					<td colspan="2" align="center"><b>RESERVATION REQUEST</b></td>
				</tr>
				<tr>
					<td align="center">Location of REST HOUSE</td>
					<td><select name="loc">
						<option>Select the Station</option>
						<option value="bharatpur">Bharatpur</option>
						<option value="bundi" >Bundi</option>
						<option value="gangapur" >Gangapur</option>
						<option value="kota" > Kota</option>
						<option value="mandalgarh" >Mandalgarh</option>
						<option value="sawaimadhopur" >Sawaimadhopur</option>
						<option value="shamgarh" >Shamgarh</option>
						<option value="thuklakabad" >Thuklakabad</option>
					</select></td>
					
				</tr>
				<tr>
					<td align="center">Officer's Name</td>
					<td><input type="text" name="nm"></td>
				</tr>
				<tr>
					<td align="center">ID Number</td>
					<td><input type="text"name="id"></td>
				</tr>
				<tr>
					<td align="center">Designation</td>
					<td><input type="text"name="post"></td>
				</tr>
				<tr>
					<td align="center">Mobile Number</td>
					<td><input type="tel" name="mob"></td>
				</tr>
				<tr>
					<td align="center">Purpose of visit</td>
					<td><textarea rows="auto" cols="auto" name="pov"> </textarea></td>
				</tr>
				<tr>
					<td align="center">Check IN Date</td>
					<td><input type="date" name="in"></td>
				</tr>
				<tr>
					<td align="center">Check OUT Date</td>
					<td><input type="date" name="out"></td>
				</tr>
				<tr>
					<td align="center">No. of days</td>
					<td><input type="text" name="days"></td>
				</tr>
				<tr>
					<td align="center">No. of rooms required</td>
					<td><input type="text" name="rooms"></td>
				</tr>
				<tr>
					<td align="center">Type of Room</td>
					<td>
						<input type="radio" name="r1" value="1" >AC ROOM
						<input type="radio" name="r1" value="0" >Non-AC ROOM
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" name="r"> &nbsp; <input type="reset"></td>
				</tr>
			
		</table>
		</form>
  </div>
  <div class="divider"></div>
  <div id="footer">
    <p align="center">&copy; &nbsp;<a href="http://www.wcr.indianrailways.gov.in/" target="_blank";>WEST CENTRAL RAILWAY</a>, KOTA DIVISION</p>
  </div>
</div>
</body>
</html>