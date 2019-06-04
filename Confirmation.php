<table style ="width: 600px; margin:auto; color:while; padding:5px;" border="5">
     <tr><th colspan="2"><hl>Customer Information</hl> </th></tr> 
<tr>
    <td><h2>Name</h2></td>
    <td><h2>Age</h2></td>
    <td><h2>Phone Number</h2></td>
    <td><h2>Email</h2></td>
    <td><h2>Address</h2></td>
    <td><h2>Number of people in group</h2></td>
    <td><h2>Drivers license</h2></td>
    <td><h2>Number of days staying</h2></td>
    <td><h2>Amount of bags</h2></td>
    <td><h2>Room number</h2></td>
</tr>
</table>

<?php
$con = mysqli_connect ("localhost", "root", "", "customerinfo");

if(!$con)
{
 echo "Database connection has failed, please try again.";
}

$query ="SELECT * FROM customer_info";
    $result =mysqli_query($con, $query);
    while($row=mysqli_fetch_array($result));
   {
    echo"<tr>";
    echo"<td>".$row['name']."</td>";
    echo"<td>".$row['age']."</td>";
    echo"<td>".$row['phone']."</td>";
    echo"<td>".$row['email']."</td>";
    echo"<td>".$row['address']."</td>";
    echo"<td>".$row['numofgroup']."</td>";
    echo"<td>".$row['license']."</td>";
    echo"<td>".$row['days']."</td>";
    echo"<td>".$row['bags']."</td>";
    echo"<td>".$row['room']."</td>";
    echo"</tr>";
   }
?>

<html>
<head>
<title>Confirmation Page</title>
</head>
<body>
<form action="CustomerInfo.php" method="POST">
    <div style='text-align:center'> <input type="submit" value="Continue"> </div>
    <div style='text-align:right'> <a href="index.php" >Logout</a> </div>
</form>
</body>
</html>

<link rel="stylesheet" href="form.css" type="text/css">