<?php
include_once "../phpconfig/config.php";
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

include "../log/session.php";
$user = getUserById($_SESSION['user_id'], $conn);

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
                <form action="#">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" id="Fullname" placeholder="<?=$user['Fullname']?>" disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input type="text" placeholder="<?=$user['Address']?>" disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" placeholder="<?=$user['Email']?>" disabled>
                    </div>
                    <div class="input-box">
                        <span class="details">Contact Number</span>
                        <input type="text" placeholder=" <?=$user['PhoneNum']?>" required disabled>
                    </div>

                        <div class="Visit input-box">
                            <p>Will you be able to visit the office for the interview?</p>
                            <div class="radioV" require>
                            <div class="form-check form-check-inline">
                            <input type="radio" class="btn-check" name="Int" id="IntYes" value="Yes">
                            <label class="btn btn-outline-success" for="IntYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="radio" class="btn-check" name="Int" id="IntNo" value="No">
                            <label class="btn btn-outline-danger" for="IntNo">No</label>
                            </div>
                            </div>
                        </div>  

                        <div class="input-box">
                            <!-- To be created as a calendar -->
                            <span class="details">Interview and Visitation (Minors must be accompanied by parents) </span>
                            <input type="date" placeholder="Preferred date and time for onsite interview" required>
                        </div>
                        </div>
                        

                    <div class="button SubmitB">
                        <input type="submit" value="Submit Form">
                    </div>
                 </form>
            </div> 
        </div>
      
    <!-- Adoption form end -->







    <!-- Footer Start -->
    <?php include "footer.php";?>
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>


<?php }else {
    echo '<script>alert("Log in first")</script>';
    echo '<script>window.location.href = "../login.php";</script>';
} ?>