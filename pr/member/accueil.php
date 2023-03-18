<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://unpkg.com/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-P6UZth6UZeu6U33daXUJydu7VzHcGqqAT++VzubvI2K7VZBfAYGm7LR9E1nFAd/7"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ysB35xtOxPJ0/hyfZeUIyML0+0aFb4rc4GZlJ5ZtWodcQ9ff1tS5F8StYfOMdMwM" 
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-lQwByOxLaSISLqt/iY0Zj3F3tXa4vF+Ms7OTuOydk8VgB0viyLrkVfJYjYI8WcqE" 
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
	<!-- Add Bootstrap stylesheet -->
	

	<!-- Add custom CSS for dark dropdown -->
    <style>
        .sec1{
          display:flex;
          justify-content: space-around
        }

        .active::before {
        display: none;
        }
        .dropdown-menu {
            background-color: #565e64;
            left: 0;
            right: auto;
        }
        
        .dropdown-item {
            color: #fff;
        }
        .boddy{
            
        }
        .body{
            background : linear-gradient(rgb(0, 0, 0, 0.7), transparent), url("books.jpg") ;
            background-size: cover; 
            background-position: bottom;
        }
    
	</style>
<body class="body">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <!-- Container wrapper -->
  <div class="container">
  <img src="image 9.png"/>
    <form class="input-group" style="width: 400px; position: relative; right: 79px;">
      <input type="search" class="form-control" placeholder="Type the name of the book" aria-label="Search" />
      <button class="btn btn-outline-primary" type="button" data-mdb-ripple-color="dark" style="padding: .45rem 1.5rem .35rem;">
        Search
      </button>    
    </form>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="" id="navbarSupportedContent"
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="accueil.php"><i class="fas fa-home fa-lg"></i><span class="small">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex flex-column text-center" aria-current="page" href="about.php"><i class="fas fa-briefcase fa-lg"></i><span class="small">About Us</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link d-flex flex-column text-center" aria-current="page" href="contact.php"><i class="fas fa-comment-dots fa-lg"></i><span class="small">Contact Us</span></a>
        </li>
        <li class="nav-item dropdown">
        <div class="btn-group">
        <div class="dropdown">    

        
        	<!-- Create left-aligned dropdown menu -->
        <!-- Create left-aligned dropdown menu -->
        <div class="d-flex justify-content-start" style="position: relative; left: 18px;">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" style="">
                <img
                src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
                class="rounded-circle"
                height="30"
                alt=""
                loading="lazy"
                />
                <span>Mohammed zeeeeen</span>
                </button>
                


                <div class="dropdown-menu" style="text-align:center; width: 90px; left: 70px;">
                    <a class="dropdown-item" href="profile.php">Profile</a>
                    <a class="dropdown-item" href="set.php">Edit profile</a>
                    <a class="dropdown-item" href="Login.php">Logout</a>
                </div>
            </div>
        </div>

        <!-- Add jQuery and Bootstrap JavaScript files -->
        

    
          </a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->




<br><br><br><br>
<div class="bbb">
        <section class="sec1" >

            <div class="card" style="width: 18rem;">
              <img src="Poor.jpg" class="card-img-top" alt="Chicago Skyscrapers"/>
              <div class="card-body">
                  <h5 class="card-title">Poor dad rich dad</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-light list-group-small">
                  <li class="list-group-item px-4">Cras justo odio</li>
                  <li class="list-group-item px-4">Dapibus ac facilisis in</li>
                  <li class="list-group-item px-4">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="btn btn-primary">Reserve</a>
              </div>
            </div>



            <div class="card" style="width: 18rem;">
              <img src="Last.jpg" class="card-img-top" alt="Chicago Skyscrapers"/>
              <div class="card-body">
                  <h5 class="card-title">Last Bus to Wisdom</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-light list-group-small">
                  <li class="list-group-item px-4">Cras justo odio</li>
                  <li class="list-group-item px-4">Dapibus ac facilisis in</li>
                  <li class="list-group-item px-4">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="btn btn-primary">Reserve</a>
              </div>
            </div>



            <div class="card" style="width: 18rem;">
              <img src="Wolf.jpg" class="card-img-top" alt="Chicago Skyscrapers"/>
              <div class="card-body">
                  <h5 class="card-title">A wolf called Romeo</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-light list-group-small">
                  <li class="list-group-item px-4">Cras justo odio</li>
                  <li class="list-group-item px-4">Dapibus ac facilisis in</li>
                  <li class="list-group-item px-4">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="btn btn-primary">Reserve</a>
              </div>
            </div>
        </section><br><br>

        <section class="sec1">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Poor.jpg" id="img" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">poor dad rich dad</h5>
                <p class="card-text">Rich Dad Poor Dad is a 1997 book by Robert Kiyosaki and Sharon Lechter.</p>
                <a href="#" class="btn btn-primary">Reserve</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Last.jpg" id="img" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Last Bus to Wisdom</h5>
                <p class="card-text">The Last Bus to Wisdom (2015) is Ivan Doig’s last novel before he died in April, 2015.</p>
                <a href="#" class="btn btn-primary">Reserve</a>
                </div>
            </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="Wolf.jpg" id="img" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">A wolf called Romeo</h5>
              <p class="card-text">Romeo was an Alexander Archipelago wolf (Canis lupus ligoni, a type of gray wolf) who lived around Mendenhall Glacier between 2003 and 2009.</p>
              <a href="#" class="btn btn-primary">Reserve</a>
            </div>
          </div>
        </section>

    </div>
</div>



</body>
</html>