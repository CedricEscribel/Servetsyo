<?php
require '../phpconfig/count.php';


session_start();

if (isset($_SESSION['admin_id'])) {

    include "../Adminlog/adminsession.php";
    $user = getUserById($_SESSION['admin_id'], $conn);


?>

    <!DOCTYPE html>


    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>


        <?php include 'design/header.php'; ?>

        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'design/sidebar.php'; ?>
            <div class="container-fluid" style="overflow: hidden;">
                <!-- Content -->
                <?php if ($user) { ?>
                    <div class="main-body">
                        <div class="row ">
                            <div class="col-md-8 m-4">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Fullname</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['Fullname'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Username</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['Username'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Position</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['Position'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">User type</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['User_type'] ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } else {
                    header("Location: login.php");
                    exit;
                } ?>

            </div>
        </div>


        </body>

    <?php } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "login.php";</script>';
} ?>