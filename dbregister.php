<?php
$names= $_POST['name'];
$email=$_POST['email'];
$passwords=$_POST['password'];

echo $names;
echo $email;
echo $passwords;

$host = "127.0.0.1";
$username = "root";
$password = "";
$dbname="planarize;

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}
$query = "INSERT INTO Registration VALUES ('$names','$email','$passwords')";

if (mysqli_query($connection, $query)) 
{
    echo '<script>alert("Welcome to planarize")</script>';
           
} 
else 
{
    echo "Insertion Failed" . mysqli_error($connection);
}
mysqli_close($connection);
?>