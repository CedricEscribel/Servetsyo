
    <?php

    if (isset($_SESSION['user_id']) && isset($_SESSION['Fullname'])) {

        include "log/session.php";
        $user = getUserById($_SESSION['user_id'], $conn);

    ?>
        <div class="dropdown-menu m-0">
            <a href="profile.php" class="dropdown-item ">Profile</a>
            <a href="schedules.php" class="dropdown-item">Schedules</a>
            <a href="./log/logout.php" class="dropdown-item">Logout</a>
        </div>
    <?php } else { ?>
        <div class="dropdown-menu m-0">
            <a href="login.php" class="dropdown-item">Login</a>
        </div>
    <?php } ?>
