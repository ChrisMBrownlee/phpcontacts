<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="Login system using PHP and stuff." />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title></title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <header>
    <nav class="nav-header-main">
      <!-- <a class="header-logo" href="index.php">
        <img src="images/glasses.png" alt="Deal Wit it">
      </a> -->
      <ul>
        <li><a href="index.php">    Home</a></li>
      </ul>


      <div class="header-login">
        <?php
        if (isset($_SESSION['userId'])){
          echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                </form>';
        } else {
          echo '<form action="includes/login.inc.php" method="post">
                  <input  type="text"     name="mailuid"  placeholder="Username/Email...">
                  <input  type="password" name="pwd"      placeholder="Password...">
                  <button type="submit"   name="login-submit">Login</button>
                </form>
                <a href="signup.php" class="header-signup">Signup</a>';
        }
         ?>
      </div>
      </nav>
  </header>
</body>
</html>
