<?php
$name = $_POST['name'];
 $age = $_POST['age'];
 $email = $_POST['email'];

 $conn=mysqli_connect("localhost","root","","crud");
 $sql= "INSERT INTO students VALUES (NULL, '$name', $age, '$email');";
 if(mysqli_query($conn,$sql)){
     header("location: index.php");
 }
 else{
     echo "Not Inserted";
 }