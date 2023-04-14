<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header id="header" class="fixed-top ">
       
    
      <h1 >PLANARIZE<span>	✿</span></h1>
    <div class="login-page">
      <div class="avatar">
        <img src="https://cdn.pixabay.com/photo/2014/04/02/14/10/female-306407_960_720.png" alt="Avatar">
      </div>
      <div class="form">
        <h2>𝓛𝓞𝓖𝓘𝓝  ✿</h2>
        <form action="dblogin2.php" method="post">
          <input type="text" placeholder="Username" name="usernames">
          <input type="password" placeholder="Password" name="passwords">
          <button>Log in</button>
        </form>
        <p class="message">Not registered? <a href="register_as.php">Create an account</a></p>
        <p class="message">Forgot your password? <a href="#">Click here to reset it</a></p>
      </div>
    </div>
  </body>
</html>
