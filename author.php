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
    <link rel="stylesheet" href="author.css">
</head>
<body>
    <header>
        <p>HB Book</p>
        
        
        <ul>
        <li ><a id="R" href="home.php">Home</a></li>
            <li><a href="book.php">Some Book</a></li>
            <li><a href="author.php">Author's Book</a></li>
            <li><a href="contact.php">contact</a></li>
        </ul>
    </header>
<table>
    <tr>
        <td> <section>
            <img src="authors/robert koysaki.jpg" width="200" height="250">
            <p>Robert Koysaki</p>
        </section></td>
        <td> <section>
            <img src="authors/robert.jpg" width="200" height="250">
            <p>Robert Greene</p>
        </section></td>
        <td> <section>
            <img src="authors/butron.jpg" width="200" height="250">
            <p>Butron Malkeil</p>
        </section></td>
    </tr>
    <tr>
        <td> <section>
            <img src="authors/fahed.jpg" width="200" height="250">
            <p>Fahed Al Ahmad</p>
        </section></td>
        <td> <section>
            <img src="authors/mostafa.jfif" width="200" height="250">
            <p>Mostafa Mahmooud</p>
        </section></td>
        <td> <section>
            <img src="authors/oliva.jpeg" width="200" height="250">
            <p>Oliva Fox</p>
        </section></td>
    </tr>
    <tr>
        <td> <section>
            <img src="authors/napolean.jpg" width="200" height="250">
            <p>Napolean Hill</p>
        </section></td>
        <td> <section>
            <img src="authors/leil.jpg" width="200" height="250">
            <p>Leil Lowndes</p>
        </section></td>
        <td> <section>
            <img src="authors/ferris.jpg" width="200" height="250">
            <p>Timothy Ferris</p>
        </section></td>
    </tr>
</table>
</body>
</html>