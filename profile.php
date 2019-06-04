<?php
session_start();
if(isset($_SESSION['log']))
{
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<div style='text-align:center'> <h1>Welcome back fellow employee!</h1> </div>
<div style='text-align:center'> <a href="CustomerInfo.php" >Click here to enter customer information!</a> </div>
<div style='text-align:center'> <a href="index.php" >Logout</a> </div>
</body>
</html>
<?php
}
else
{
	echo "Employee ID or password is invalid, please try again.";
	header("refresh:2;url=index.php");
}
?>
<link rel="stylesheet" href="form.css" type="text/css">
