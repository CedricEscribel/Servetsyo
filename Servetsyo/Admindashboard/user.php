<?php

require_once '../phpconfig/Dogs.php';

session_start();

if (isset($_SESSION['admin_id'])) {

    include "../Adminlog/adminsession.php";
    $user = getUserById($_SESSION['admin_id'], $conn);


?>

    <?php if ($_SESSION['User_type'] == 'SuperAdmin') { ?>


        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <title>Admin list</title>

            <?php include 'design/datatablelink.php'; ?>

            <?php include 'design/header.php'; ?>
            <div class="wrapper">
                <!-- Sidebar Holder -->
                <?php include 'design/sidebar.php'; ?>
                <div class="container">
                    <div class="position-relative">
                        <h1>Create Account</h1>
                        <button class="position-absolute top-0 end-0 button" style="width: fit-content; border: none; padding: 4px; " onclick="window.location.href='Users.php';">
                            <input style="color: white;" type="submit" value="User list">
                        </button>
                    </div>
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
                                        <label class="form-label" for="Username">Username/Email:</label>
                                        <input type="text" name="Username" class="form-control" placeholder="Username/Email" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <?php if (isset($_GET['error'])) { ?>
                                            <div class="alert alert-danger" role="alert">
                                                <?php echo $_GET['error']; ?>
                                            </div>
                                        <?php } ?>
                                        <label class="form-label" for="Password">Password:</label>
                                        <input type="password" name="Password" id="Pass" class="form-control" placeholder="Password" required />
                                        <div class="show_pass">
                                            <input type="checkbox" onclick="Showpass()">&#32;Show Password
                                        </div>
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
                                <div class="button">
                                    <input style="color: white;" type="submit" name="Sign_up" value="Create account">
                                </div>
                            </div>
                        </form>
                    </div>

                    <section class="tables">
                        <h1>Admin List</h1>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Position</th>
                                    <th>User type</th>
                                    <th>Date Created</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $rows = mysqli_query($con, "SELECT * FROM adminuser")
                                ?>
                                <?php foreach ($rows as $row) : ?>
                                    <tr>
                                        <td><?php echo $row["admin_id"] ?></td>
                                        <td><?php echo $row["Fullname"] ?></td>
                                        <td><?php echo $row["Username"] ?></td>
                                        <td><?php echo $row["Position"] ?></td>
                                        <td><?php echo $row["User_type"] ?></td>
                                        <td><?php echo $row["createdate"] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
            <?php include 'design/footer.php'; ?>
            </body>
            <script>
                $(document).ready(function() {
                    new DataTable('#table');
                });
            </script>

        <?php } else {
        echo '<script>alert("Only for Superadmin")</script>';
        echo '<script>window.location.href = "Dashboard.php";</script>';
    } ?>

    <?php } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "login.php";</script>';
} ?>