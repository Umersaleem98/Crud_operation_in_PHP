<?php
$servername ='localhost';
$username ='root';
$password ='';
$databasename ='mirza';

$conn = mysqli_connect($servername, $username,$password,$databasename);

if($conn)
{
    echo "connected";
}
else 
{
    echo "failed";
}

?>