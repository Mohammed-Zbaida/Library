<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>
  <body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="image 9.png" > </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="admin.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Book Store</span> </a>
                <div class="nav_list"> 
                  <a href="admin.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                  <a href="members.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Members</span> </a> 
                  <a href="mes.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> 
                  <a href="Books.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Books</span> </a> 
                  <a href="Reservation.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Reservation</span> </a> 
                </div>
            </div> <a href="Login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <h4>Main Components</h4><br><br>
        <h1 style="text-align: center;">Top Books</h1><br><br>
<div class="sect1" id="sect1" style="display:flex; justify-content: space-around;">

        <section>
            <div class="card" style="width: 18rem;">
            <img src="Poor.jpg" class="card-img-top"/>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-light list-group-small">
                <li class="list-group-item px-4">Cras justo odio</li>
                <li class="list-group-item px-4">Dapibus ac facilisis in</li>
                <li class="list-group-item px-4">Vestibulum at eros</li>
            </ul>
        </section>

        <section>
            <div class="card" style="width: 18rem;">
            <img src="Last.jpg" class="card-img-top"/>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-light list-group-small">
                <li class="list-group-item px-4">Cras justo odio</li>
                <li class="list-group-item px-4">Dapibus ac facilisis in</li>
                <li class="list-group-item px-4">Vestibulum at eros</li>
            </ul>
        </section>


        <section>
            <div class="card" style="width: 18rem;">
            <img src="Wolf.jpg" class="card-img-top"/>
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-light list-group-small">
                <li class="list-group-item px-4">Cras justo odio</li>
                <li class="list-group-item px-4">Dapibus ac facilisis in</li>
                <li class="list-group-item px-4">Vestibulum at eros</li>
            </ul>
        </section>

</div><br><br>

<section style="display:flex; justify-content: space-around;">

<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Mumbers</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</div>

<div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Books</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</div>

<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>

</section>

    </div>
    <!--Container Main end-->
</body>
</html>