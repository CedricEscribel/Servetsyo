<?php

require_once '../phpconfig/Dogs.php';

session_start();

if (isset($_SESSION['admin_id'])) {

    include "../Adminlog/adminsession.php";
    $user = getUserById($_SESSION['admin_id'], $conn);


?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dogs in pound</title>

        <?php include 'design/header.php'; ?>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'design/sidebar.php'; ?>
            <div class="container">

                <h1>Admin Account</h1>
                <span>

                    <div class="d-flex align-items-center flex-column mb-4 border border-success p-2 mb-2 border-opacity-50">
                        <form class="Upload-dogs" method="POST" action="../Adminlog/SuperAdmin.php" autocomplete="off">
                            <div class="row mb-4 flex-column">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="Fullname">Full name:</label>
                                        <input type="text" name="Fullname" class="form-control" placeholder="Fullname" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="Username">Username:</label>
                                        <input type="text" name="Username" class="form-control" placeholder="Username" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="Password">Password:</label>
                                        <input type="password" name="Password" class="form-control" placeholder="Password" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="Position">Position:</label>
                                        <input type="text" name="Position" class="form-control" placeholder="Position   " required />
                                    </div>
                                </div>
                                <div class="col mb-2 ">
                                    <div class="form-outline">
                                        <label class="form-label" for="User-type">User type:</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example" name="User_type" required>
                                            <option value="">Please Select</option>
                                            <option value="Barangay">Barangay</option>
                                            <option value="Admin">Admin</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=" button">
                                    <input style="color: white;" type="submit" name="Sign_up" value="Create account">
                                </div>
                            </div>
                        </form>
                    </div>


            </div>
            </span>


        </div>
        <?php include 'design/footer.php'; ?>
        </body>

    <?php } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "login.php";</script>';
} ?>