<?php
require_once '../phpconfig/config.php';

session_start();

if (isset($_SESSION['admin_id'])) {

    include "../Adminlog/adminsession.php";
    $user = getUserById($_SESSION['admin_id'], $conn);

    $sql = "SELECT * FROM dogs_info where status='adoption'";
    $all_adoption = $con->query($sql);

?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Edit Dogs</title>


        <?php include 'design/header.php'; ?>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <?php include 'design/sidebar.php'; ?>


            <div class="container">
                <div class="header">
                    <h1 style="text-transform:uppercase">Edit dog details </h1>
                </div>
                <!-- Body design -->

                <div class="Dogs">
                    <?php
                    while ($row = $all_adoption->fetch_assoc()) {
                    ?>
                        <div class="card adoption_card " style="width: 20rem;">
                            <img src="DogImage/<?php echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
                            <form action="../phpconfig/Dogs.php" method="POST">
                                <div class="card-body adoption-details text-center">
                                    <input type="text" name="description" class="text-center form-control" value="<?php echo $row["description"] ?>">
                                    <input type="text" name="dog_info" class="text-center form-control" value="<?php echo $row["dog_info"] ?>">
                                </div>

                                <ul class="adoption-details mb-5" style="margin-left: -15%;">
                                    <p><?php echo $row["gender"] ?></p>
                                    <p><?php echo $row["age"] ?> Months old</p>
                                </ul>

                                <div class="card-body card-button position-absolute bottom-0 start-50 translate-middle-x">
                                    <input type="hidden" name="id" id="id" value="<?php echo $row['dog_id'] ?>">
                                    <button value="<?php echo $row["dog_id"] ?>" name="Save" class="btn btn-success">Save</button>
                                    <button value="<?php echo $row["dog_id"] ?>" name="Cancel" class="btn btn-danger">cancel</button>
                                </div>
                            </form>

                        </div>
                    <?php } ?>
                </div>


            </div>

            <!-- footer -->
            <?php include 'design/footer.php'; ?>
            </body>

        <?php } else {
        echo '<script>alert("Log in first")</script>';
        echo '<script>window.location.href = "login.php";</script>';
    } ?>