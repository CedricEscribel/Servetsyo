<?php include "header.php" ?>
<?php
if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $query = "INSERT INTO users(username,email,password) VALUES('{$name}','{$email}','{$password}')";
  $addUser = mysqli_query($conn, $query);

  if (!$addUser) {
    echo "Something went wrong" . mysqli_error($conn);
  } else {
    header('location: login.php');
  }
}
?>


<div class="container col-4 border rounded bg-light mt-5" style='--bs-bg-opacity: .5;'>
  <h1 class="text-center">Sign Up</h1>
  <hr>
  <form action="" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Username</label>
      <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" required>
    </div>
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
      <input type="submit" name="signup" value="Sign Up" class="btn btn-primary">
    </div>
  </form>
</div>


<?php include "footer.php" ?>