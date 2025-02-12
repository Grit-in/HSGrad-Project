<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
  
    <link rel="stylesheet" href="../css/Signup.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
    <nav class="navbar">
        <div class="navbar__container">
         <a href="../index.html" id="navbar__logo"><i class="fas fa-book"></i>Japan日本</a>
         <div class="navbar__toggle" id="menu">
             <span class="bar"></span>
             <span class="bar"></span>
             <span class="bar"></span>
         </div>
         <ul class="navbar__menu">
             <li class="navbar__item">
                 <a href="../index.html" class="navbar__links">Home</a>
             </li>
             <li class="navbar__item">
                 <a href="../html/lang.html" class="navbar__links">Japanese</a>
             </li>
             <li class="navbar__item">
                 <a href="../html/Grammar.html" class="navbar__links">Grammar</a>
             </li>
             <li class="navbar__btn">
                 <a href="signup.php" class="btn">Sign Up</a>
             </li>
         </ul>
        </div>
    </nav>
    <div class="bod">
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">

        <div class="text">
         
        </div>
      </div>
      <div class="back">
        <div class="text">
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">Login</div>
          <form action="includes/login.inc.php" method = "post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="name" placeholder="Enter your name/email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="pwd"placeholder="Enter your password" required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <?php
    if(isset($_GET["error"])){
      if($_GET["error"] == "wronglogin"){
        echo "<p>Something went wrong try again!<p>";
      }else if($_GET["error"] == "none"){
        echo "<p>You have loged in!<p>";
      }

    }
  
  ?>
              <div class="button input-box">
                <input type="submit" value="Sumbit">
              </div>
              <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
            </div>
        </form>
        
      </div>
        <div class="signup-form">
          <div class="title">Signup</div>
        <form action="includes/signup.inc.php" method = "post">
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text"  name="name" placeholder="Enter your name" required>
              </div>
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="Enter your email" required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="pwd"placeholder="Enter your password" required>
              </div>
              <?php
    if(isset($_GET["error"])){
     if($_GET["error"] == "invalidUserId"){
        echo "<p>Choose a valid username!<p>";
      }
      else if($_GET["error"] == "invalidEmail"){
        echo "<p>Choose a valid email!<p>";
      }
      else if($_GET["error"] == "stmtfailed"){
        echo "<p>Something went wrong,try again!<p>";
      }
      else if($_GET["error"] == "usernameistaken"){
        echo "<p>Username already taken!<p>";
      }
      else if($_GET["error"] == "none"){
        echo "<p>You have signed up!<p>";
      }

    }
  
  ?>
              <div class="button input-box">
                <input type="submit" name = "submit">
              </div>
              <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
            </div>
      </form>
    </div>
    </div>
    </div>
  </div>
  </div>
  <script src="../js/app.js"></script>
</body>
</html>
