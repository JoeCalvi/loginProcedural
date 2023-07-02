<?php
  require "header.php";
?>

    <main>
      <div>
        <section>
          <h1>Signup</h1>
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
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>