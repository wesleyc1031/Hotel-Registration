<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Employee Login</title>
</head>
<div style='text-align:center'><h1>Employee Login</h1></div>
<body>
<form action="login.php" method="POST">
    <div style='text-align:center'>Employee ID:</div> 
    <div style='text-align:center'> <input type="text" name="EmployeeID"><br><br> </div>
    <div style='text-align:center'>Password:</div>
    <div style='text-align:center'> <input type="password" name="password"><br><br> </div>
    <div style='text-align:center'> <input type="submit" value="Login"> </div>
</form>
</body>
</html>
<?php
session_destroy();
?>
<link rel="stylesheet" href="form.css" type="text/css">
