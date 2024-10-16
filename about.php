<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    *About*/




  </style>
</head>

<body>
<header class="p-3 mb-3 border-bottom  mh-20">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img src="./assets/images/logo.png" alt="logo" class="rounded-circle">

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="indexADMIN.php" class="nav-link px-2 link-dark">Home</a></li>
          <li><a href="about.php" class="nav-link px-2 link-dark">About</a></li>
          
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="indexADMIN.php" role="button" aria-haspopup="true" aria-expanded="false">Fonction</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="gererMENU.php">gererMENU</a>
            <a class="dropdown-item" href="gererUSERS.php">gererUSERS</a>
            <a class="dropdown-item" href="gererCOMMANDES.php">gererCOMMANDES</a>
            <div></div>
  </li>
        </ul>

       

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            
            <img src="" alt="mdo" width="32" height="32" class="rounded-circle">
        </a>
          <ul class="dropdown-menu text-small">
            <!-- nom d'utilisateur -->
            <li><p class="dropdown-item" >user name</p></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
    <div class="container py-5">
        
    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="./assets/images/Food-Plate.png">
            </div>

            <div class="about_text">
                <h1><span>About</span>Us</h1>
                <h3>Why Choose us?</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita, est. Doloremque 
                    sapiente veritatis laboriosam corrupti optio et maxime. Ad, amet explicabo eaque labore 
                    cupiditate quasi nostrum nemo recusandae id quibusdam? Lorem ipsum dolor sit amet 
                    consectetur adipisicing elit. Doloremque ab, dolores pariatur cum exercitationem, illo nisi 
                    veritatis vitae ea deleniti fugiat quisquam tempora, accusantium corrupti excepturi optio. 
                    Inventore, cupiditate recusandae.
                </p>
            </div>

        </div>

        

    </div>



    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>
