<?php require '../includes/header.php'; ?>
<?php require '../config/config.php'; ?>
<?php

  //take the data from the form

  if(isset($_POST['submit'])) {
    if(empty($_POST['email']) || empty($_POST['password'])) {   
  } else {
    $email = $_POST['email'];
    $password = $_POST['password'];
  }
}

  //check if user or email exists

  $login = $conn->query("SELECT * FROM users WHERE email = '$email'");
  $login->execute();

  $fetch = $login->fetch(PDO::FETCH_ASSOC);

  //check if password is correct

  if($login->rowCount() > 0) {
    if(password_verify($password, $fetch['mypassword'])) {
      $_SESSION['id'] = $fetch['id'];
      $_SESSION['name'] = $fetch['name'];
      $_SESSION['email'] = $fetch['email'];
      $_SESSION['role'] = $fetch['role'];
      $_SESSION['loggedIn'] = true;
      header('location: ../index.php');
    }
  }


?>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <form id="reservation-form" method="POST" role="search" action="login.php">
            <div class="row">
              <div class="col-lg-12">
                <h4>Login</h4>
              </div>
              <div class="col-md-12">
                  <fieldset>
                      <label for="Name" class="form-label">Your Email</label>
                      <input type="text" name="email" class="email" placeholder="email" autocomplete="on" required>
                  </fieldset>
              </div>
              <div class="col-md-12">
                <fieldset>
                    <label for="Name" class="form-label">Your Password</label>
                    <input type="password" name="password" class="password" placeholder="password" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">                        
                  <fieldset>
                      <button type="submit" id="form-submit" name="submit" class="main-button">login</button>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php require '../includes/footer.php'; ?>
