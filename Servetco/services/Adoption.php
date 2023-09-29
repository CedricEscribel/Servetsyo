<?php
include_once "../phpconfig/config.php";
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

    include "../log/session.php";
    $user = getUserById($_SESSION['user_id'], $conn);

    if (isset($_POST['Adopt_dog'])) {

        $Dog_id = $_POST['Dog_id'];
    }
?>


    <head>
        <meta charset="utf-8">
        <title>Adoption </title>

        <?php include "header.php"; ?>
        <!-- Navbar End -->

        <!-- Adoption form start -->
        <!-- Personal data must be automatically put on adoption field -->
        <div class="container">
            <div class="title">Application form</div>
            <div class="content">
                <form method="post" action="../phpconfig/adoptionRequest.php">
                    <div class="user-details">
                        <select class="Hide" name="Fullname" style="display: none;">
                            <option value="<?= $user['Fullname'] ?>"></option>
                        </select>
                        <div class="input-box">
                            <span class="details">Full Name</span>
                            <input type="text" id="Fullname" placeholder="<?= $user['Fullname'] ?>" disabled>
                        </div>
                        <select class="Hide" name="Address" style="display: none;">
                            <option value="<?= $user['Address'] ?>"></option>
                        </select>
                        <div class="input-box">
                            <span class="details">Address</span>
                            <input type="text" placeholder="<?= $user['Address'] ?>" disabled>
                        </div>
                        <select class="Hide" name="Email" style="display: none;">
                            <option value="<?= $user['Email'] ?>"></option>
                        </select>
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" placeholder="<?= $user['Email'] ?>" disabled>
                        </div>
                        <select class="Hide" name="PhoneNum" style="display: none;">
                            <option value="<?= $user['PhoneNum'] ?>"></option>
                        </select>
                        <div class="input-box">
                            <span class="details">Contact Number</span>
                            <input type="text" placeholder=" <?= $user['PhoneNum'] ?>" required disabled>
                        </div>

                        <div class="input-box">
                            <span class="details">Interview and Visitation (Minors must be accompanied by parents) </span>
                            <input type="date" name="Date" placeholder="Preferred date and time for onsite interview" required>
                        </div>

                        <div class="Visit input-box" required>
                            <p>Will you be able to visit the office for the interview?</p>
                            <div name="Interview" id="Interview" class="radioV" style="margin-left: 30%;" required>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="btn-check" name="Interview" id="IntYes" value="Yes">
                                    <label class="btn btn-outline-success" for="IntYes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" class="btn-check" name="Interview" id="IntNo" value="No">
                                    <label class="btn btn-outline-danger" for="IntNo">No</label>
                                </div>
                            </div>
                            <p id="Alert" class="alert alert-danger" role="alert" hidden></p>
                        </div>



                        <div class="input-box">
                            <span class="details">Dog id</span>
                            <input type="text" placeholder="<?= $Dog_id; ?>" disabled>
                        </div>
                        <select class="Hide" name="Dog_id" style="display: none;">
                            <option value="<?= $Dog_id; ?>"></option>
                        </select>
                    </div>

                    <div class="button SubmitB">
                        <input type="submit" onclick="Valid()" name="save" value="Submit">
                    </div>
                </form>
            </div>
        </div>

        <!-- Adoption form end -->

        <!-- Footer Start -->
        <?php include "footer.php"; ?>
        <!-- Footer End -->
        </body>

        <script>
            function Valid() {
                if (document.getElementById("IntYes").checked) {
                    document.getElementById("Alert").hidden = true;
                } else if (document.getElementById("IntNo").checked) {
                    document.getElementById("Alert").hidden = true;
                } else {
                    document.getElementById("Alert").innerHTML = "Select one";
                    document.getElementById("Alert").hidden = false;
                }
            }
        </script>

    <?php } else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
} ?>

