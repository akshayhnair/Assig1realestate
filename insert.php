<html>
<body bgcolor="cyan">
<form action="signup.html" method="post">
<center>
<br>
<br>
<?php
include_once 'conn.php';
if(isset($_POST['submit']))
{
    $name= $_POST['name'];
    $email= $_POST['email'];
    $pincode= $_POST['pincode'];
    $password= $_POST['password'];

$sql="INSERT INTO store(name,email,pincode,password)
 VALUES('$name','$email','$pincode','$password')";
if(mysqli_query($conn,$sql))
{
echo"new created sucessfully!<br>";
}
else
{
echo"error:" .$sql."".mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<br><br><input type="submit" value="back to homepage" name="submit">
</center>
</form>
</body>
</html>