<?php
include "connection.php";


$id = $_GET['id'];
$query = "DELETE FROM `student` WHERE id='$id'";

$result = mysqli_query($conn, $query);

if($result)
{
    echo "delete";
    header("Location: fetchdata.php");
}
else 
{
    echo "not deleted";
} 

?>