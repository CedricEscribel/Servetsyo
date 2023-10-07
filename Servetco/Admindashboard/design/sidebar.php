<div class="container stick" id="sidebar" style="background-color: #4CAF50 ">
    <nav class="stick">
        <div class="sidebar-header ">
            <a class="head-dash" href="Dashboard.php">
                <h2>Dashboard</h2>
            </a>
        </div>

        <ul class="list-unstyled components">
            <li>
                <div class="accordion accordion-flush " id="accordionFlushExample1">
                    <div class="accordion-item">
                        <h2 class="accordion-header sidebar-accordion">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Appointment" aria-expanded="false" aria-controls="flush-collapseOne">
                                Appointment
                            </button>
                        </h2>
                        <div id="Appointment" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample6">
                            <a href="Appointment.php" class="dropdown-item">Pending</a>
                            <a href="AppointHistory.php" class="dropdown-item">History</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush " id="accordionFlushExample2">
                    <div class="accordion-item">
                        <h2 class="accordion-header sidebar-accordion">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#DogCatching" aria-expanded="false" aria-controls="flush-collapseOne">
                                Dog Catching
                            </button>
                        </h2>
                        <div id="DogCatching" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
                            <a href="DogCatching.php" class="dropdown-item">Pending</a>
                            <a href="CatchingHistory.php" class="dropdown-item">History</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush " id="accordionFlushExample3">
                    <div class="accordion-item">
                        <h2 class="accordion-header sidebar-accordion">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Pound" aria-expanded="false" aria-controls="flush-collapseOne">
                                Dogs in Pound
                            </button>
                        </h2>
                        <div id="Pound" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                            <a href="Dog_info.php" class="dropdown-item">Add dogs</a>
                            <a href="PoundHistory.php" class="dropdown-item">History</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="Adoption.php"><i class="Animals"></i>Dogs for Adoption</a>
            </li>
            <li>
                <div class="accordion accordion-flush " id="accordionFlushExample4">
                    <div class="accordion-item">
                        <h2 class="accordion-header sidebar-accordion">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Adoption" aria-expanded="false" aria-controls="flush-collapseOne">
                                Adoption Request
                            </button>
                        </h2>
                        <div id="Adoption" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
                            <a href="Adoption_Request.php" class="dropdown-item">Pending</a>
                            <a href="AdoptRequestHistory.php" class="dropdown-item">History</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush " id="accordionFlushExample5">
                    <div class="accordion-item">
                        <h2 class="accordion-header sidebar-accordion">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Insemination" aria-expanded="false" aria-controls="flush-collapseOne">
                                Artificial Insemination
                            </button>
                        </h2>
                        <div id="Insemination" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
                            <a href="ArtInsemination.php" class="dropdown-item">Pending</a>
                            <a href="InseminationHistory.php" class="dropdown-item">History</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="accordion accordion-flush " id="accordionFlushExample6">
                    <div class="accordion-item" style="background-color: #4caf50;">
                        <h2 class="accordion-header sidebar-accordion">
                            <button class="accordion collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Rescue" aria-expanded="false" aria-controls="flush-collapseOne">
                                Animal Rescue
                            </button>
                        </h2>
                        <div id="Rescue" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample5">
                            <a href="AnimalRescue.php" class="dropdown-item">Pending</a>
                            <a href="RescueHistory.php" class="dropdown-item">History</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="Users.php"><i class="users"></i>Users</a>
            </li>
            <li>
                <a href="Announcement.php"><i class="Announcement"></i>Announcement</a>
            </li>
        </ul>
    </nav>
</div>

