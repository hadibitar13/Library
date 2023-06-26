<?php
session_start();
 $name = $_SESSION['user'];
if(!isset($_SESSION["login"]))
{
    //$a= $_SESSION['user'];
    
header("location:login.php");}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Document</title>
</head>
<body>
    <header>
        <p>HB Book</p>
        
        
        <ul>
        <li ><a id="R" href="home.php">Home</a></li>
            <li><a href="book.php">Some Book</a></li>
            <li><a href="author.php">Author's Book</a></li>
            <li><a href="contact.php">contact</a></li>
            <li><form id="lgout" action="logout.php" method="POST"><input type="submit" value="log out"></form></li>
        </ul>
    </header>
    <section id="infoBook">
        <pre>       Show Book           </pre>
    <ul>
        <li><img src="logolibrary.jpg" width="20" height="20"><a href="book.php">Library</a></li>
        <li><img src="logomember.jpg" width="20" height="20"><a href="m.php">Members</a></li>
        
    </ul>
    </section>
    <section id="share">
        <form action="m.php" method="post">
           <label><h3>share with us a book</h3></label>
           <br>
           <label for="fname">name</label>
           <br>
           
           <input id="fname" name="username" type="text" placeholder="Enter your Name" value=<?php echo $name ?>><br>
           <label for=""></label>
           <label for="Bname">Book name</label><br>
           <input id="Bname" name="bookname" type="text" placeholder="Enter the name of book" required><br>
           <br>
           <label for="typeB">this book is :</label><br>
           <input type="radio" id="religion" name="typeOfbook" value="religion">
            <label for="religion">religion</label>
            <input type="radio" id="money" name="typeOfbook" value="money">
            <label for="money">money</label>
            <input type="radio" id="psychology" name="typeOfbook" value="psychology">
            <label for="psychology">psychology</label><br>
            <br>
            <label for="aboutBoook">some word about this book:</label><br>
            <textarea name="aboutBook" id="aboutBook" cols="40" rows="10"></textarea>
            <br>
            <br>
           <input type="submit" value="add book">
           <input type="reset">
        </form>
    </section>
    <section id="info">

    </section>


</body>
</html>