<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="m.css">
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

<div id="caption"></div>
<?php
$con=mysqli_connect("localhost","root","","books");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

if(!empty($_POST["username"])){
$username= $_POST["username"];
$bookname=$_POST["bookname"];
$typeofbook =$_POST["typeOfbook"];
$aboutbook=$_POST["aboutBook"];

$qry="INSERT INTO book VALUES ('$username','$bookname','$typeofbook','$aboutbook')";
mysqli_query($con,$qry);
}


$sql = "SELECT `username`, `bookname`, `typeofbook`, `aboutbook` FROM `book`";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo "<table>";
  echo "<tr><td>Name</td><td>Book name</td><td>type of book</td><td>about this book</td></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>". $row["username"]. "</td> <td>" . $row["bookname"]. "</td> <td>" . $row["typeofbook"]. "</td> <td>".$row["aboutbook"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";}
?>
</body>
</html>