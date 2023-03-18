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
        .form-group {
        margin-bottom: 20px;
        }
        label {
        font-weight: bold;
        }
        .error-message {
        color: red;
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
        .ms{
            color:white;
            background: #6c757d;
            height: 400px;
            padding-top: 3px;
            text-align: center;
            position: relative;
            border-radius: 10%;
            top:25px;
        }
        .body{
            background : linear-gradient(rgb(0, 0, 0, 0.7), transparent), url("many.jpeg") ;
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
          <a class="nav-link d-flex flex-column text-center" aria-current="page" href="about.php"><i class="fas fa-briefcase fa-lg"></i><span class="small">About Us</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active d-flex flex-column text-center" aria-current="page" href="contact.php"><i class="fas fa-comment-dots fa-lg"></i><span class="small">Contact Us</span></a>
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

<section class="ms">

    <div class="container">
    <h2>Contact Us</h2>
    <form action="" method="post">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary">Send</button>
        </div>
      </div>
    </form>
  </div>


</section>





</body>
</html>