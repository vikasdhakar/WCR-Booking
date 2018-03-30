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
  <hr><h3 align="center">OFFICERS REST HOUSE BOOKING RECEIPT</h3><hr>
  <br><br>
  <?php
	$a=$_POST['loc'];
	$b=$_POST['nm'];
	$c=$_POST['id'];
	$d=$_POST['post'];
	$e=$_POST['mob'];
	$f=$_POST['pov'];
	$g=$_POST['in'];
	$h=$_POST['out'];
	$i=$_POST['days'];
	$j=$_POST['rooms'];
	$k=$_POST['r1'];
	$l="Waiting";
	$dm=date("d/m/y");
	 
function generateRandomString($length = 5) {
    $characters = '0123456789ABCDEFGHIJKL';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$ram = generateRandomString();
$idd= "WCR-" .$ram;
 
	include ('conn.php');
	$s="INSERT INTO reservation (house,name,id,post,mob,purpose,in_date,out_date,days,rooms,type,status,ref,date,activity) VALUES ('$a','$b',$c,'$d','$e','$f','$g','$h','$i','$j','$k','$l','$idd','$dm','')";
	
	  if (mysqli_query($con,$s)) {
    echo "<center><br>We have received request for Reservation<br><b>Your Reference No. $idd </b><br>Your status will be update within next 8HRS.</center><br>";
} else {
    echo "Error: " . $s . "<br>" . mysqli_error($con);
}

	mysqli_close($con);
?>

<center>
<button onclick="myFunction()">Print</button><br>

<script>
function myFunction() {
    window.print();
}
</script>

<script type="text/javascript">
         <!--
            function Redirect() {
               window.location="index.php";
            }
            
            document.write("You will be redirected to main page in 1 Minute.");
            setTimeout('Redirect()', 10000);
         //-->
      </script>
      </center> 