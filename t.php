<html>
<body>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('Connection Error'.mysqli_error());
}
mysqli_select_db($con,"user");
$e=$_POST['name1'];
$f=$_POST['pass'];
if($e=='YASH' || $e=='AAKASH' || $e=='VIVEK' || $e=='MAHIMAN' || $e=='NIKHIL' ||$e=='AABHA' || $e=='PRAVIN' || $e=='SAURABH' || $e=='JEETESH' || $e=='SAAJAN' || $e=='SUSHIL'  
|| $e=='ADITYA')
{
echo "YOU HAVE SUCCESSFULLY LOGGED IN";
}
else
{
echo "NO SUCH USERNAME PASSWORD EXIST TRY AGAIN";
}
mysqli_close($con);
?>
</body>
</html>
