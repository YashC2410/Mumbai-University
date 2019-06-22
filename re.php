<html>
<body>
<center><img src="r.jpg"/></center>
<br/>
<center><a href="index.html">Home</a> <a href="e.html">Go Back</a></center>
<br/>
<br/>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('Error in connection'.mysqli_error());
}
mysqli_select_db($con,"result");
$e=$_POST['name'];
if($e=='YASH')
{
$sql="SELECT *FROM res WHERE NAME='YASH'";
}
if($e=='AAKASH')
{
$sql="SELECT *FROM res WHERE NAME='AAKASH'";
}
if($e=='VIVEK')
{
$sql="SELECT *FROM res WHERE NAME='VIVEK'";
}
if($e=='SAURABH')
{
$sql="SELECT *FROM res WHERE NAME='SAURABH'";
}
if($e=='MUKUND')
{
$sql="SELECT *FROM res WHERE NAME='MUKUND'";
}
if($e=='SUSHIL')
{
$sql="SELECT *FROM res WHERE NAME='SUSHIL'";
}
if($e=='MANGESH')
{
$sql="SELECT *FROM res WHERE NAME='MANGESH'";
}
if($e=='SURESH')
{
$sql="SELECT *FROM res WHERE NAME='SURESH'";
}
if($e=='IBRAHIM')
{
$sql="SELECT *FROM res WHERE NAME='IBRAHIM'";
}
if($e=='SADIK')
{
$sql="SELECT *FROM res WHERE NAME='SADIK'";
}
if($e=='VISHAL')
{
$sql="SELECT *FROM res WHERE NAME='VISHAL'";
}
if($e=='MANISH')
{
$sql="SELECT *FROM res WHERE NAME='MANISH'";
}

$result= mysqli_query($con,$sql);
while($f=mysqli_fetch_array($result))
{
echo "<b>Result Of {$f['NAME']} is {$f['RES']}</b><br/>";
}
mysqli_close($con);
?>
</body>
</html>