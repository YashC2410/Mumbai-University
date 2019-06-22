<HTML>
<head>
<style>
body {background-image:url('b.png');background-repeat:no-repeat;background-position:center;background-size:600px 400px;}
	a {text-decoration:none;}
</style>
</head>
<body>
<h1 style="background-color:orange;color:white;"><center>STUDENT RECORD</center></h1>
<?php
$con=mysqli_connect("localhost","root","");
if(!$con)
{
die('Connection Error'.mysqli_error());
}
mysqli_select_db($con,"record");
$e=$_POST['name'];
$f=$_POST['sname'];
if($e=='YASH')
{
	$sql="SELECT *FROM studrecord WHERE NAME='YASH'";
}
if($e=='AAKASH')
{
	$sql="SELECT *FROM studrecord WHERE NAME='AAKASH'";
}
if($e=='VIVEK')
{
	$sql="SELECT *FROM studrecord WHERE NAME='VIVEK'";
}
if($e=='MUKUND')
{
	$sql="SELECT *FROM studrecord WHERE NAME='MUKUND'";
}
if($e=='NITISH')
{
	$sql="SELECT *FROM studrecord WHERE NAME='NITISH'";
}
if($e=='AKHILESH')
{
	$sql="SELECT *FROM studrecord WHERE NAME='AKHILESH'";
}

if($e=='TEJASVI')
{
	$sql="SELECT *FROM studrecord WHERE NAME='TEJASVI'";
}
if($e=='SANJAY')
{
	$sql="SELECT *FROM studrecord WHERE NAME='SANJAY'";
}
if($e=='AJAY')
{
	$sql="SELECT *FROM studrecord WHERE NAME='AJAY'";
}
if($e=='ABHISHEK')
{
	$sql="SELECT *FROM studrecord WHERE NAME='ABHISHEK'";
}
if($e=='KAMLESH')
{
	$sql="SELECT *FROM studrecord WHERE NAME='KAMLESH'";
}
if($e=='RAJESHRI')
{
	$sql="SELECT *FROM studrecord WHERE NAME='RAJESHRI'";
}
if($e=='MARIAMA')
{
	$sql="SELECT *FROM studrecord WHERE NAME='MARIAMA'";
}
if($e=='MOLAMA')
{
	$sql="SELECT *FROM studrecord WHERE NAME='MOLAMA'";
}
if($e!='MOLAMA' && $e!='MARIAMA' && $e!='RAJESHRI' && $e!='ABHISHEK' && $e!='KAMLESH' && $e!='YASH' && $e!='VIVEK' && $e!='AJAY' && $e!='AKHILESH' && $e!='MUKUND' && $e!='AJAY' && $e!='NITISH' && $e!='TEJASVI')
{
	echo "<marquee>Record Not Found In Our Database . Please Enter Valid Details</marquee>";
}
echo "<br/>";
$result=mysqli_query($con,$sql);
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error());
  }
  while($e =mysqli_fetch_array($result))
  {
	  echo "<b>First Name:{$e['Name']}<br/>\n <b>Full Name: {$e['Name']} {$f}<br/> Fathers Name: {$e['Father_Name']} {$f}<br/>Mothers Name: {$e['Mother_Name']} {$f}<br/>College Name: {$e['College_Name']}<br/>
	  Year Of Admission: {$e['Year_Of_Admission']}<br/>Current Studying Year: {$e['Current_Year']}<br/>College Center Number: {$e['Center_No']}<br/>
	  Average Of SEMESTER Marks: {$e['AVG_SEM_MARKSS']}<br/>SSC Marks: {$e['SSC_Percentage']}<br/>HSC Marks: {$e['HSC_Percentage']}<br/></b> ";
	  echo "<b>Exam Status: Exam Form Submitted Successfully</b><br/>";
	  echo "<b>Exam Commmencement: 15th November 2018</b><br/>";
	  echo "<b>Semester: V</b><br/>";
  }
  mysqli_close($con);
  ?>
  <a href="index.html">Home</a> <a href="srec.html">Back to Record Page</a>
  </body>
  </html>