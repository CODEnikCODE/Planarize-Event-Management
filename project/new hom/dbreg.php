

<?php
$email= $_POST['username'];
$pass=$_POST['password'];
$name=$_POST['name'];
$phone=$_POST['phone'];

$host = "localhost";
$username = "root";
$password = "";
$dbname="Planarize";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}
$query = "INSERT INTO registration VALUES ('$email','$pass','$name','$phone')";

if (mysqli_query($connection, $query)) 
{
    echo '<script>alert("Welcome to planarize")</script>';
           include 'courses.html';
} 
else 
{
    echo "Insertion Failed" . mysqli_error($connection);
}
mysqli_close($connection);
?>
