<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vegetable Vendor Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type= "text/css" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@300;400;500;600;700;800;900&family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<nav id="navigation" class="navbar navbar-expand-lg bg-body-tertiary">
       <div class="logo">
           <a class="navbar-brand" href="#">
               <img src="images/vvt.png" width="30" height="30" alt="" loading="lazy">
           </a>
           <a class="navbar-brand" href="#">Vegetable Vendor Tracker</a>
       </div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarContent">
           <ul id="nav-link" class="navbar-nav me-auto mb-2 mb-lg-0">
               <li class="nav-item">
                   <a class="nav-link active" aria-current="page" href="#">Home</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="inventory.php">Inventory</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Location</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">Contact Us</a>
               </li>
           </ul>
           <form class="d-flex" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
           </form>
       </div>
       <div id="profile">     
           <a href="profile.php"><img src="images/profile.png" height="70" width="70"></a></div>
       </div>
         
</nav>

<!--Navigation section end-->

    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center">
            <h1>Your New Vegetable Vendor Tracking Site</h1>
            <h2>Click below to track your Vendor</h2>
            <a href="register.php" class="btn_get_started">Get Started</a>

        </div>
    </section>
    
    <!--Client section begin-->
    <section class="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                    <img src="images/clients/client1.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                    <img src="images/clients/client2.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                    <img src="images/clients/client3.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                    <img src="images/clients/client4.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                    <img src="images/clients/client5.jpg" class="img-fluid" alt="image">
                </div>
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center">
                    <img src="images/clients/client6.jpg" class="img-fluid" alt="image">
                </div>
            </div>
        </div>
    </section>
    <!--Client section end-->

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>