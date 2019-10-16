<?php 
      $id = $_GET['id'];
      $conn=mysqli_connect("localhost","root","","crud");
      $sql= "SELECT * FROM `students` WHERE id= $id";
      $result= mysqli_query($conn,$sql);
      $std = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Project</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="header_sec">
                        <h1>Student Information</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a class="btn btn-info" href="index.php">Student List</a>
                </div>
                <div class="col-md-9">
                    <table class="table">
                       <tr>
                            <th>Name:<th>
                            <td><?php echo $std['name']; ?></td>

                       </tr> 
                       <tr>
                            <th>Age:<th>
                            <td><?php echo $std['age']; ?></td>

                       </tr> 
                       <tr>
                            <th>Email:<th>
                            <td><?php echo $std['email']; ?></td>

                       </tr> 
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
