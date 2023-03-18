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
    .body{
            background : linear-gradient(rgb(0, 0, 0, 0.7), transparent), url("books.jpg") ;
            background-size: cover; 
            background-position: bottom;
      }
    .cardd{
      color:white;
      background: #6c757d;
      height: 500px;
      padding-top: 3px;
      text-align: center;
      position: relative;
      border-radius: 10%;
    }


    .dropdown-menu {
      background-color: #565e64;
          left: 0;
          right: auto;
    }

    .active::before {
          display: none;
          }
    
    .dropdown-item {
      color: #fff;
    }
    
	</style>
<body class="body">
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <!-- Container wrapper -->
  <div class="container">
  <img src="image 9.png"/>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link d-flex flex-column text-center" aria-current="page" href="accueil.php"><i class="fas fa-home fa-lg"></i><span class="small">Home</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="about.php"><i class="fas fa-briefcase fa-lg"></i><span class="small">About Us</span></a>
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
<br><br><br>

<section class="cardd">
      <div class="container my-5" >
        <div class="row">
        <div class="col-md-6">
            <h1>About Us</h1>
            <p>
            Hello, I am an electronic bookstore that specializes in renting books online. As a lover of books and reading, I have created this platform to offer an easy and accessible way for book enthusiasts to enjoy their favorite reads without having to spend  money on purchasing new books.
            At my electronic bookstore, you can browse through a wide variety of books in different genres, including fiction, non-fiction, biographies, and many more. With just a few clicks, you can rent the book of your choice for a specified period of time and read it .
            I am committed to providing a seamless and hassle-free experience to all my customers. Whether you are a student looking for academic books or an avid reader searching for the latest bestseller, I have got you covered.
            </p>
            <p>So, why wait? Go choose your first book now !</p>
            <a href="accueil.php"><button type="button" class="btn btn-outline-danger">Reserve</button></a>

        </div>
        <div class="col-md-6">
            <img src="bookstore.jpg" alt="Our Team" class="img-fluid">
        </div>
</section>





</body>
</html>