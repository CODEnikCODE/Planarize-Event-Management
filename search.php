<!DOCTYPE html>

</html>
<title>COURSES</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
    background-color: transparent;
    background-image: url("hero-bg.jpg");
    
  }
        section {
            background: #3498db;
            margin: 0;
            padding: 0;
        }

        


        nav.container {
            font-family: 'Roboto', sans-serif;
            width: 100%;
            height: 80px;
            background: #000000;
            border-bottom: 1px solid #3d3f50;
            position: absolute;
            left: 0;
            border-radius: 20px;

            padding-bottom: 20px;

        }



        nav ul {
            width: 65%;
            height: 100%;
            margin: 0 auto;
            list-style: none;
            transition: all 0.5s ease;
        }

        nav ul li {
            width: 20%;
            float: left;
            text-align: center;
            padding: 45px 15px;
            cursor: pointer;
            color: #eee;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            transition: all 0.5s ease;

            position: relative;
        }

        nav ul li:hover {
            color: #69e4ff;
            box-shadow: inset 0 5px #ffffff;
        }

        /* sub-menu */
        * {
            margin: 0;
            padding: 0;
        }

        nav ul li ul.sub-nav {
            position: static;
            top: 75px;
            right: 0;
            left: 0;
            width: 50%;
            height: 100px;
            background: #FFFFFF;
            border-top: 1px solid #3d3f50;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.14), -1px 0px 1px rgba(0, 0, 0, 0.14);
            visibility: hidden;
            opacity: 0;
        }

        nav ul li ul.sub-nav li {
            color: #811264;
            font-size: 14px;
            width: 100%;
            padding: 15px 0;
        }

        nav ul li ul.sub-nav li:hover {
            background-color: black;
            color: white;
            box-shadow: 0 0;
        }

        nav ul li:hover ul.sub-nav {
            visibility: visible;
            opacity: 1;
        }


        figure.snip1171 {
            font-family: 'Raleway', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin:60px;
            min-width: 310px;
            max-width: 450px;
            width: 100%;
            background: #000000;
            color: #333;
            text-align: left;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
            top: 100px;

        }

        .snip1171 {
            float: left;

        }

        figure.snip1171 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            -webkit-transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
            transition: all 0.35s cubic-bezier(0.25, 0.5, 0.5, 0.9);
        }

        figure.snip1171 img {
            max-width: 100%;
            vertical-align: middle;
            padding-left: 35px;
            padding-top: 10px;
        }

        figure.snip1171 figcaption {
            position: relative;
            background-color: #ffffff;
            padding: 20px 25px 50px;
        }

        figure.snip1171 h3 {
            position: absolute;
            bottom: 100%;
            text-transform: uppercase;
            padding: 0px 25px;
            line-height: 44px;
            margin: 0;
            left: 0;
            font-weight: 400;
            background-color: #000000;
            color: #ffffff;
        }

        figure.snip1171 h3:before {
            position: absolute;
            left: 100%;
            border-style: solid;
            border-width: 44px 0 0 12px;
            border-color: transparent transparent transparent #000000;
            content: '';
            top: 0;
        }

        figure.snip1171 p {
            font-size: 0.8em;
            font-weight: 500;
            text-align: left;
            margin: 0;
            line-height: 1.6em;
        }

        figure.snip1171 .price {
            position: absolute;
            top: 0;
            right: 0;
            color: #ffffff;
            background-color: #000000;
            padding: 0 10px;
            line-height: 40px;
            font-weight: 800;
        }

        figure.snip1171.blue .price:before {
            border-color: transparent #2472a4 transparent;
        }

        figure.snip1171:hover img,
        figure.snip1171.hover img {

            -webkit-transform: scale(1.3);
            transform: scale(1.3);
        }

        figure.snip1171 a.add {
            text-decoration: none;
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: #000000;
            line-height: 40px;
            padding: 0 10px;
            color: #ffffff;
            font-weight: 800;
            font-size: 0.9em;
            text-transform: uppercase;
        }
    </style>
</head>

<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname="Planarize";

$connection = mysqli_connect($host, $username, $password,$dbname);
if (!$connection) 
{
    die("Connection Unsucessful: " . mysqli_connect_error());
}
?>

<body style="background-color:rgb(239, 236, 229);">
    <br />
    <b>
        <h1 style="color:rgb(0, 0, 0); font-family: sans-serif; font-size: 25px;">PLANARIZE<span>	✿</span>
        </h1>
    </b>
    <br />
    <section>
    <nav class="container">
            <ul>
                <a href="dashboard.html">
                    <li>Dashboard</li>
                </a>
                <a href="E:\web dev\loginteacher.html">
                    <li>Wishlist</li>
                </a>
                <a href="#">
                    <li>My Events</li>
                </a>
                <a href="home.html">
                    <li>HomePage</li>
                </a>
               

               

                </li>
            </ul>
        </nav>
    </section>

    <br />
    <br />
    <div class="yahoo">
    <?php
    if(isset($_POST['submitsearch']))
    {
       $search= mysqli_real_escape_string($connection, $_POST['searchname']);
       $sql= "SELECT * FROM events WHERE names LIKE '%$search%'";
       $result= mysqli_query($connection,$sql);
       $queryResult= mysqli_num_rows($result);
       
       if($queryResult > 0)
       {
        while($row = mysqli_fetch_assoc($result))
        {
            echo ' <figure class="snip1171"> <a href="#"><img src="images.jpeg" alt="sample71" /></a>
                <div class="price"><span>	₹</span>' .$row['price']. '</div>
                <figcaption>
                    <h3>' .$row['names']. '</h3>
                    <p>
                    ' .$row['description']. '
                    </p>
                    <a class="add" href="#">Add to Cart</a>
                   
                </figcaption> </figure>';
        }
       }
       else
       {
        echo '<script>alert("No results found")</script>';
       }
    }
?>
</div>




</body> 
