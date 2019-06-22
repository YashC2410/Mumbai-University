<HTML>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('Connection Error'.mysqli_error());
}
mysqli_select_db($con,"re");
$sql="SELECT *FROM result";
$result=mysqli_query($con,$sql);
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  echo "<table>";
  echo "<tr><td>SEM1</td></tr>";
  while($e =mysqli_fetch_array($result))
  {
	  echo "<tr><td>{$e['SEM1']}</td></tr>";
  }
 
  echo "</table>";
  mysqli_close($con);
  ?>
  </body>
  </html>