<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"login");
$sql="INSERT INTO tg (Username,Password) VALUES('$_POST[name]','$_POST[pass]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  echo "1 Record Added";
  mysqli_close($con);
  ?>
  </body>
  </html>