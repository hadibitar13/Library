<?php 
    include('connect.php');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query="insert into member (username,email,password) values ('$username','$email','$password')";
    mysqli_query($con,$query);

    header("location:login.php");

?>