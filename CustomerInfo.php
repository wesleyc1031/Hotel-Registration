<?php
session_start();
$con=mysqli_connect ("localhost", "root", "");

if(!$con)
{
 die ('Could not connect:' .mysql_connect_error());
}

$db_select = mysqli_select_db ($con, "customerinfo");

if (!$db_select)
{
 die ('Error when inserting records' .mysqli_error($con));
}
if (isset($_POST['submit']))
{
 $name=$_POST ['name'];
$age=$_POST ['age'];
$phone=$_POST ['phone'];
$email=$_POST ['email'];
$address=$_POST ['address'];
$numofgroup=$_POST ['numofgroup'];
$license=$_POST ['license'];
$days=$_POST ['days'];
$bags=$_POST ['bags'];
$room=$_POST ['room'];

$query="INSERT INTO customer_info (name, age, phone, email, address, numofgroup, license, days, bags, room) VALUES ('$name', '$age', '$phone', '$email', '$address', '$numofgroup', '$license', '$days', '$bags', '$room')";
$result=mysql_query($query,$con);

if ($result ==1)
{
  echo "Registration complete!";
 header("refresh:2;url=confirmation.php");
}
else
{
  echo "Registration failed";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Customer Information</title>
</head>
<div style='text-align:center'><h1>Customer Information</h1></div>
<body>
<form action="confirmation.php" method="POST">
    <div style='text-align:center'>Name:</div> 
    <div style='text-align:center'> <input type="text" name="name"><br><br> </div>
    <div style='text-align:center'>Age:</div>
    <div style='text-align:center'> <input type="text" name="age"><br><br> </div>
    <div style='text-align:center'>Phone Number:</div>
    <div style='text-align:center'> <input type="text" name="phone"><br><br> </div>
    <div style='text-align:center'>Email:</div>
    <div style='text-align:center'> <input type="text" name="email"><br><br> </div>
    <div style='text-align:center'>Address:</div>
    <div style='text-align:center'> <input type="text" name="address"><br><br> </div>
    <div style='text-align:center'>Number of people in the group:</div>
    <div style='text-align:center'> <input type="text" name="numofgroup"><br><br> </div>
    <div style='text-align:center'>License Plate Number:</div>
    <div style='text-align:center'> <input type="text" name="license"><br><br> </div>
    <div style='text-align:center'>Number of days staying:</div>
    <div style='text-align:center'> <input type="text" name="days"><br><br> </div>
    <div style='text-align:center'>Amount of bags:</div>
    <div style='text-align:center'> <input type="text" name="bags"><br><br> </div>
    <div style='text-align:center'>Room Number:</div>
    <div style='text-align:center'> <input type="text" name="room"><br><br> </div>
    <div style='text-align:center'> <input type="submit" value="Submit"> </div>
    <div style='text-align:right'> <a href="index.php" >Logout</a> </div>
</form>
</body>
</html>
<?php
session_destroy();
?>
<link rel="stylesheet" href="form.css" type="text/css">