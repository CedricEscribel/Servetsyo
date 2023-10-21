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

                <div class="position-relative">
                    <h1>Add Dogs</h1>
                    <button class="position-absolute top-0 end-0 button" style="width: max-content; border: none; padding: 4px; " onclick="window.location.href='Dog_info.php';">Dogs in pound</button>
                </div>
                <span>
                    <div class="d-flex align-items-center flex-column mb-4 border border-success p-2 mb-2 border-opacity-50">
                        <form class="Upload-dogs" method="POST" enctype="multipart/form-data" action="../phpconfig/Dogs.php" autocomplete="off">
                            <div class="row mb-4 flex-column">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="DogName">Name/Description:</label>
                                        <input type="text" name="description" id="DogName" class="form-control" placeholder="Name/Description" required />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="Age">Age:</label>
                                        <input type="number" id="Age" name="age" class="form-control" required placeholder="Month" />
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="Gender">Gender:</label>
                                            <select class="form-select form-select-sm" aria-label="Small select example" name="gender" required>
                                                <option value="">Please Select</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                            <label class="form-label" for="date">Date In:</label> <br>
                                            <input class="date" type="date" id="dt" name="date" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="RescuedAt">Rescued at:</label>
                                        <select class="form-select form-select-sm" aria-label="Small select example" name="rescue_loc" required>
                                            <option class="dropbtn" value="">Choose Barangay</option>
                                            <option value="Bagong Nayon">Bagong Nayon</option>
                                            <option value="Barangca">Barangca</option>
                                            <option value="Calantipay">Calantipay</option>
                                            <option value="Catulinan">Catulinan</option>
                                            <option value="Concepcion">Concepcion</option>
                                            <option value="Hinukay">Hinukay</option>
                                            <option value="Makinabang">Makinabang</option>
                                            <option value="Matangtubig">Matangtubig</option>
                                            <option value="Pagala">Pagala</option>
                                            <option value="Paitan">Paitan</option>
                                            <option value="Piel">Piel</option>
                                            <option value="Pinagbarilan">Pinagbarilan</option>
                                            <option value="Poblacion">Poblacion</option>
                                            <option value="Sabang">Sabang</option>
                                            <option value="San Jose">San Jose</option>
                                            <option value="San Roque">San Roque</option>
                                            <option value="Santa Barbara">Santa Barbara</option>
                                            <option value="Santo Cristo">Santo Cristo</option>
                                            <option value="Santo Niño">Santo Niño</option>
                                            <option value="Subic">Subic</option>
                                            <option value="Sulivan">Sulivan</option>
                                            <option value="Tangos">Tangos</option>
                                            <option value="Tarcan">Tarcan</option>
                                            <option value="Tiaong">Tiaong</option>
                                            <option value="Tibag">Tibag</option>
                                            <option value="Tilapayong">Tilapayong</option>
                                            <option value="Virgen delas Flores">Virgen delas Flores</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-4 ">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" name="DogInfo" for="DogInfo">Additional information:</label>
                                        <textarea class="form-control" name="dog_info" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <div class="image-preview">
                                            <img src="../image/upload.png" alt="Upload Dog Picture" id="image-preview">
                                            <input type="file" id="image-file" name="image" accept="image/*" value="" style="display: none">
                                            <a href="#" id="choose-file-btn">Choose Images</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <input style="color: white;" type="submit" name="submit" value="Add">
                            </div>

                        </form>

                    </div>
                </span>

            </div>
            <?php include 'design/footer.php'; ?>
            <script src="Image.js"></script>
            </body>

        <?php } else {
        echo '<script>alert("Log in first")</script>';
        echo '<script>window.location.href = "login.php";</script>';
    } ?>

        <script>
            document.getElementById('dt').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
        </script>