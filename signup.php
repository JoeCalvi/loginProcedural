<?php
  require "header.php";
?>

    <main>
      <div class="container-fluid h-100">
        <div class="row justify-content-center align-items-center h-75">
          <div class="col-6 d-flex flex-column signup justify-content-evenly">
            <div class="text-center">
              <h1>Signup</h1>
            </div>
              <?php
                if(isset($_GET['error'])) {
                  if($_GET['error'] == "emptyfields") {
                    echo '<p>Fill in all fields.</p>';
                  } else if($_GET['error'] == "invaliduidmailuid") {
                    echo '<p>Invalid username or email.</p>';
                  } else if($_GET['error'] == "invaliduidmail") {
                    echo '<p>Invalid email.</p>';
                  } else if($_GET['error'] == "invaliduid") {
                    echo '<p>Invalid username.</p>';
                  } else if($_GET['error'] == "passwordcheck") {
                    echo '<p>Passwords do not match.</p>';
                  } else if($_GET['error'] == "usertaken") {
                    echo '<p>Username already taken.</p>';
                  } else if($_GET['signup'] == "success") {
                    echo '<p>Signup successful!</p>';
                  }
                }
              ?>
              <form action="includes/signup.inc.php" method="post">
                <div class="mb-3">
                  <input class="form-control" type="text" name="uid" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="text" name="mail" placeholder="E-mail">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="password" name="pwd" placeholder="Password">
                </div>
                <div class="mb-3">
                  <input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat password">
                </div>
                <div class="w-100 d-flex justify-content-end">
                  <button class="btn btn-outline-success" type="submit" name="signup-submit">Signup</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </main>

<?php
  require "footer.php";
?>