<?php
    session_start();
    $_SESSION['user']= $_POST['username'];
    include("connect.php");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from member where username = '$username' && password = '$password' ";
    $result= mysqli_query($con,$query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        $_SESSION["login"]=1;
        header("location:home.php");
    }else{
      
    echo"log in failed!";
    }

?>