<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname="Planarize";
    $emailid=$_POST['usernames'];
    $pass=$_POST['passwords'];

    $storedname='';
    //Procedural
    $connection = mysqli_connect($host, $username, $password,$dbname);
    if (!$connection) 
    {
      die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT email,passwd FROM registration where email='$emailid' and passwd='$pass'";
    if (!mysqli_query($connection, $query)) 

    {
        echo "Select Query" . mysqli_error($connection);
    }
    $result = mysqli_query($connection, $query);
    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            echo '<script>alert("Welcome to Planarize")</script>';
           include 'events.php';
        }
    } 
    else 
    {
        echo '<script>alert("Invalid email or password")</script>';
        include 'logincopy.php';

        
    }
    /*$unique_id=uniqid();
    setcookie('email',$unique_id, time()+ (86400 * 30),'/');
    $query = "INSERT INTO user_sessions(email, unique_id) VALUES ('$emailid','$unique_id')";

     if (mysqli_query($connection, $query)) 
     {
    echo "Insertion succesful!";
     } */
?> 