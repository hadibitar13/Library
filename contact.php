<?php
session_start();
if(!isset($_SESSION["login"]))
header("location:login.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body style="background-image: url(lbbg.png)">
    <header>
        <p>HB Book</p>
        
        
        <ul>
        <li ><a id="R" href="home.php">Home</a></li>
            <li><a href="book.php">Some Book</a></li>
            <li><a href="author.php">Author's Book</a></li>
            <li><a href="contact.php">contact</a></li>
            
        </ul>
    </header>
    <section>
        <pre>
    All book summaries are shared on our website,
    and the browser can share their favorite books
    or suggest books to read
    if you have any problem Contact us via e-mail:
        <a href="#">hadiBitar2001@gmail.com</a></pre>
    </section>
</body>
</html>