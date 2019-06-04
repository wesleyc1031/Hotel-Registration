<?php

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
<link rel="stylesheet" href="form.css" type="text/css">