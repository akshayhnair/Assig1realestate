<?php
$servername='localhost';
$username='root';
$password='';
$dbname="realestate_db";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
die('could not connect My sql:' .mysql_error());
}
else
{
echo"database is connectd";
}
?>