<?php
include "config.php";

    if(isset($_POST['submit'])) {

    $name= $_POST['name'];
    $username= $_POST['username'];
    $password= $_POST['password'];

    $insert = mysqli_query($connect, "INSERT INTO register2 VALUES
     ('$name','$username','$password')");


    header("location: home.php");
}
?>