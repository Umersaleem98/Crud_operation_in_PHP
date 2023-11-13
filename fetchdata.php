<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetchdata</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <br><br>


            <h1>Show All Records</h1>
            <div class="col-md-12">
            <a href="index.php" class="btn btn-primary">Add Record</a>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>CNIC</th>
                        <th>Gender</th>
                        <th>Comment</th>
                        <th>City</th>
                        <th>Actions</th>
                    </tr>

                    <tr>
                    <?php


                        $fetchquery= "SELECT * FROM `student`";

                        
                        $result=mysqli_query($conn, $fetchquery);
                        
                        
                        while($data=mysqli_fetch_array($result))
                        {
                        ?>
                            <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['name']; ?></td>
                            <td><?php echo $data['email']; ?></td>
                            <td><?php echo $data['cnic']; ?></td>
                            <td><?php echo $data['gender']; ?></td>
                            <td><?php echo $data['comment']; ?></td>
                            <td><?php echo $data['city']; ?></td>
                            <td>
                           
                            <a href="delete.php?id=<?php echo $data["id"];?>" class="btn btn-danger">Delete</a>
                            <a href="update.php?id=<?php echo $data["id"];?>" class="btn btn-info">Update</a>
                            
                            </td>
                </tr>  
                <?php  
                        }
                        ?>
                
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>