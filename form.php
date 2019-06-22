<html>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("form", $con);

$sql="INSERT INTO Form (Name,Age,Year,Month)
VALUES
('$_POST[name]','$_POST[age]','$_POST[year]','$_POST[month]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con);
?>
</body>
</html>