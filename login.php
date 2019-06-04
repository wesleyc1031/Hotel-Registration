<?php
$EmployeeID=$_POST['EmployeeID'];//username
$password=$_POST['password'];//password 
session_start();

$con=mysqli_connect("localhost","root","","login");//mysqli("localhost","username of database","password of database","database name")
$result=mysqli_query($con,"SELECT * FROM `login_info` WHERE `EmployeeID`='$EmployeeID' && `password`='$password'");
$count=mysqli_num_rows($result);
if($count==1)
{
	echo "Logged in succesfully";
	$_SESSION['log']=1;
	header("refresh:2;url=profile.php");

}
else
{
	echo "Employee ID or password is invalid, please try again.";
	header("refresh:2;url=index.php");// it takes 2 sec to go index page
}
?>
<link rel="stylesheet" href="form.css" type="text/css">
