<?php 
	if(isset($_GET['b']))
	{
		$a=$_GET['usr'];
		$b=$_GET['pswd'];
		if($a=="admin" && $b=="admin")
		{
			header("location:ADM/index.php");
		}
		else
		{
			echo "<script> alert('Invalid ID or Password')</script>";
		}
	}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>DEMO</title>
 </head>
 <body>	
 <hr><h1 align="center">Login Page</h1><hr>
	<!-- content -->
	<br><br>
		<table align="center">
		<form method="get" action="login.php">
			<tr>
				<td>User ID</td>
				<td><input type="text" name="usr"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pswd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="b"> &nbsp; <input type="reset"></td>
			</tr>
		</form>
		</table>
	</center>
 </body>
 </html>