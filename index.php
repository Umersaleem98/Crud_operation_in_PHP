<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://classless.de/classless.css"> -->

</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Enter Your data</h1>
            <div class="col-md-8">
                <a href="fetchdata.php" class="btn btn-info"> show record</a>
                <form action="" method="Post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">CNIC</label>
                        <input type="number" name="cnic" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="gender">For Gender</label>
                        <input type="radio" name="gender" value="Male" class="gender">Male 
                        <input type="radio" name="gender" value="Female" class="gender"> Female
                    </div>
<br>
                    <div class="form-group">
                        <label for="">Coment</label>
                        <br>
                        <textarea name="comment" id="" cols="50" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="city" class="form-control" id="">
                    </div>

                    <br>
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>

                
            </div>
        </div>
    </div>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
    $na =$_POST['name'];
    $em =$_POST['email'];
    $cni =$_POST['cnic'];
    $gend =$_POST['gender'];
    $comm =$_POST['comment'];
    $cit =$_POST['city'];

    $query ="INSERT INTO `student`(`name`, `email`, `cnic`, `gender`, `comment` , `city`) VALUES ('$na', '$em','$cni','$gend','$comm', '$cit')";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo "data is inserted";
    }
    else
    {
        echo "data failed";
    }
}

?>