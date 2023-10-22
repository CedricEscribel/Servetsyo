<?php
require '../phpconfig/events.php';
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

        <title>Announcement</title>


        <?php include 'design/header.php'; ?>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'design/sidebar.php'; ?>

            <div class="container">
                <div class="position-relative">
                    <h1>Announcement</h1>
                    <button class="position-absolute top-0 end-0 button" style="width: max-content; border: none; padding: 4px; " onclick="window.location.href='Announcement.php';">
                        <input style="color: white;" type="submit" value="Announcement">
                    </button>
                </div>
                <!-- Body design -->

                <div class="d-flex align-items-center flex-column mb-4 border border-success p-2 mb-2 border-opacity-50">
                    <form enctype="multipart/form-data" method="POST" autocomplete="off">

                        <div class="container">

                            <div class="col">
                                <div class="row my-2" style="max-width: 85%;">
                                    <label for="Name">Title:</label>
                                    <input type="text" name="EventName" placeholder="Enter title:" required>
                                </div>
                                <div class="row">
                                    <div class="col-5 my-2">
                                        <label for="Date">Date:</label>
                                        <input type="date" id="dt" name="Dates" placeholder="Date">
                                    </div>
                                    <div class="col-5 my-2">
                                        <label for="Expired date">Expired at:</label>
                                        <input type="date" id="dt2" name="Expired_date" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col" style="margin-left: 25%;">
                                <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                                <div class="image-preview">
                                    <img src="../image/upload.png" alt="Upload Dog Picture" id="image-preview">
                                    <a href="#" id="choose-file-btn">Choose Images</a>
                                </div>
                            </div>

                        </div>

                        <div class="col">
                            <label for="Name">Announcement details:</label>
                            <div>
                                <div>
                                    <textarea rows="4" cols="50" name="Details" placeholder="Announcement details"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="button">
                            <input style="color: white;" type="submit" name="submit" value="Post">
                        </div>
                    </form>
                </div>

                <?php include 'design/footer.php'; ?>
                <script src="Image.js"></script>
                </body>

            <?php } else {
            echo '<script>alert("Log in first")</script>';
            echo '<script>window.location.href = "login.php";</script>';
        } ?>

            <script>
                document.getElementById('dt').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
                document.getElementById('dt2').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
            </script>