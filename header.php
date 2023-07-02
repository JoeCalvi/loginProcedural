<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>
<body>


  <header>
      <nav class="navbar bg-dark text-light h-100">
        <div class="container-fluid">
          <div class="d-flex gap-4 me-auto mb-2">
            <div class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="#">Portfolio</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="#">About</a>
            </div>
            <div class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </div>
          </div>
          <div>
  
          <?php
  
              if(isset($_SESSION['userId'])) {
  
                echo '
                <form class="d-flex" action="includes/logout.inc.php" method="post">
                  <button class="btn btn-outline-danger" type="submit" name="logout-submit">Logout</button>
                </form>';
  
              } else {
  
                echo '
                <div class="d-flex align-items-center">
                  <form class="d-flex gap-2 pe-2" action="includes/login.inc.php" method="post">
                    <input class="form-control" type="text" name="mailuid" placeholder="Username/E-mail...">
                    <input class="form-control" type="password" name="pwd" placeholder="Password...">
                    <button class="btn btn-outline-primary" type="submit" name="login-submit">Login</button>
                  </form>
                  <button class="btn btn-outline-light">
                  <a class="nav-link" href="signup.php">Signup</a>
                  </button>
                </div>';
  
              }
              
            ?>
          </div>
        </div>
      </nav>
  </header>
