<?php session_start(); ?>
<?php include "header.php" ?>
<?php

if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "SELECT * from users WHERE email = '$email' AND password = '$password'";
  $user = mysqli_query($conn, $query);

  if (!$user) {
    die('query Failed' . mysqli_error($conn));
  }

  while ($row = mysqli_fetch_array($user)) {

    $user_id = $row['ID'];
    $user_name = $row['username'];
    $user_email = $row['email'];
    $user_password = $row['password'];
  }
  if ($user_email == $email  &&  $user_password == $password) {

    $_SESSION['id'] = $user_id;       // Storing the value in session
    $_SESSION['name'] = $user_name;   // Storing the value in session
    $_SESSION['email'] = $user_email; // Storing the value in session
    //! Session data can be hijacked. Never store personal data such as password, security pin, credit card numbers other important data in $_SESSION
    header('location: dashboard.php?user_id=' . $user_id);
  } else {
    header('location: login.php');
  }
}
?>

<div class="container col-4 border rounded bg-light mt-5" style='--bs-bg-opacity: .5;'>
  <h1 class="text-center">Sign In</h1>
  <hr>
  <form action="" method="post">
    <div class="mb-3">
      <label for="email" class="form-label">Email ID</label>
      <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" required>
      <small class="text-muted">Your email is safe with us.</small>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
      <small class="text-muted">Do not share your password.</small>
    </div>
    <div class="mb-3">
      <input type="submit" name="signin" value="Sign In" class="btn btn-primary">
    </div>
  </form>
</div>

<?php include "footer.php" ?>