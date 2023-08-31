
<head>
    <meta charset="utf-8">
    <title>Service </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php include 'header.php';?>
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar sticky-top navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
   
    <?php include 'navlogo.php';?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link active">Service</a>
                <a href="Petforadoption.php" class="nav-item nav-link">adoption</a>
                <a href="Events.php" class="nav-item nav-link">Events</a>
                <a href="Login.php" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </nav>

    <!-- create new phpfile for service-->
    <!-- Services Start -->
    <?php include 'services.php';?>

    <!-- Services End -->
 

    <!-- Petneeds Start -->
    <!-- Need to be editable in admin side -->
    <div id="Petneeds" class="carousel slide"  data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <div class="Pet-needs text-center">
                    <h2>DONATIONS FOR RESCUED DOGS</h2>
                            <li>Dog food (kibble and canned)</li>
                            <li>Crates, carriers or cages</li>
                            <li>Pet diapers and pee pads</li>
                            <li>Chew toys for the dogs</li>
                            <li>Vaccines, medicine and vitamins</li>
                            <li>Dog treats</li>
                            <li>Leashes, harnesses and collars</li>
                </div>
            </div>
                <div class="carousel-item">
                    <div class="Pet-needs text-center">
                        <h2>SHELTER WISH LIST</h2>       
                            <li>Detergent powder and bleach</li>
                            <li>Dishwashing paste or liquid</li>
                            <li>Bath towels</li>
                            <li>Garbage bags (XXL)</li>
                            <li>Foot rugs or door mats</li>
                            <li>Clinic supplies (alcohol, cotton, etc.)</li>
                            <li>Old newspapers</li>
                            <li>Toilet paper</li>
                            <li>Mops and brooms</li>
                    </div>
                </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#Petneeds" data-bs-slide="prev">
            <span class="carousel-control-prev-icon btn-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#Petneeds" data-bs-slide="next">
            <span class="carousel-control-next-icon btn-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <!-- Pet needs End -->


    <!-- Footer Start -->
    <?php include 'footer.php';?>
    <!-- Footer End -->
    
           <!-- The core Firebase JS SDK is always required and must be listed first -->
           <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
            https://firebase.google.com/docs/web/setup#available-libraries -->
        <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-database.js"></script> 

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  
  <!-- Template Javascript --> 
    <script src="js/main.js"></script>
</body>
