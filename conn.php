<?php 
$servername ="localhost";
$username = "root";
$password ="";
$dbname ="gatesofgotham";
$connection=mysqli_connect($servername,$username,$password,$dbname);
if($connection)
{
    echo "Connection ok";
}
else {
   echo "Connection Failed";
}
?>