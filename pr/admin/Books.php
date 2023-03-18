<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <script src="admin.js"></script>
    <script src="ajouter.js"></script>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Document</title>
</head>



  <body id="body-pd">
    <section id="op">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="image 9.png" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="admin.php" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">Book Store</span> </a>
                <div class="nav_list"> 
                  <a href="admin.php" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                  <a href="members.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Members</span> </a> 
                  <a href="mes.php" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a> 
                  <a href="Books.php" class="nav_link active"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Books</span> </a> 
                  <a href="Reservation.php" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Reservation</span> </a> 

                </div>
            </div> <a href="Login.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light" >
        <h4>Main Components</h4><br><br><br>
        <section class="search-sec">
            <div class="container">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Book Name">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt" placeholder="Book Writer">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="date" class="form-control search-slt">
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0" style="max-width: fit-content;">
                                    <button type="button" class="btn btn-danger wrn-btn" >Search</button>
                                </div>
                                    <form action="POST">
                                        <!-- <button class="btn btn-outline-primary" name='submit' onclick="Add()" style="max-width: fit-content;">Add a book</button> -->
                                        <input class="btn btn-outline-primary" style="max-width: fit-content;" type="submit" name="Add_book" value="Add a book">
                                    </form> 
                                    
                                


                                    <div id="myForm"">

                                    </div>
                                






                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <br><br>
        <section class="sec1">

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
                <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>
                <a href="#" class="btn btn-primary">Update</a>
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
                <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>
                <a href="#" class="btn btn-primary">Update</a>
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
                <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>
                <a href="#" class="btn btn-primary">Update</a>
              </div>
            </div>
        </section><br><br>

        <section class="sec1">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Poor.jpg" id="img" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">poor dad rich dad</h5>
                <p class="card-text">Rich Dad Poor Dad is a 1997 book by Robert Kiyosaki and Sharon Lechter.</p>
                <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>
                <a href="#" class="btn btn-primary">Update</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="Last.jpg" id="img" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Last Bus to Wisdom</h5>
                <p class="card-text">The Last Bus to Wisdom (2015) is Ivan Doig’s last novel before he died in April, 2015.</p>
                <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>
                <a href="#" class="btn btn-primary">Update</a>
                </div>
            </div>

          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="Wolf.jpg" id="img" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">A wolf called Romeo</h5>
              <p class="card-text">Romeo was an Alexander Archipelago wolf (Canis lupus ligoni, a type of gray wolf) who lived around Mendenhall Glacier between 2003 and 2009.</p>
              <a href="#" class="btn btn-primary" style="background-color: red;">Delete</a>
              <a href="#" class="btn btn-primary">Update</a>
            </div>
          </div>
        </section>

    </div >
    <!--Container Main end-->
    </section>
   

    <?php  
        if(isset($_POST['Add_book']))
        {
            echo ' 
            <style>
            #op{
                opacity: 0.10;
            }
        </style>
        
        
           <form class="foorm">
           <div class="go">
        <div id="left">
        
           <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1" style="color:white">Title</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2" style="color:white">Author name</label>
              </div>
            </div>
          </div>
          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="file" id="form6Example3" class="form-control" />
            <label class="form-label" for="form6Example3" style="color:white">Cover picture</label>
          </div>
          <!-- Text input -->
          <div class="form-outline mb-4">
          <label class="form-label" for="form6Example4" style="color:white">State</label>
            <select>
                <option value="">New</option>
                <option value="">Occasion</option>
            </select>
        
            
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="form6Example4" class="form-control" />
            <label class="form-label" for="form6Example4" style="color:white">Type</label>
          </div>
        
        </div>
        
        
        <div id="right">
            <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5" style="color:white">Email</label>
          </div>
          <!-- Number input -->
          <div class="form-outline mb-4">
            <input type="date" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example6" style="color:white">Date publishing</label>
          </div>
          <!-- Message input -->
          <div class="form-outline mb-4">
            <input type="date" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example7" style="color:white">Date Editions</label>
          </div>
          <div class="form-outline mb-4">
            <input type="number" id="form6Example6" class="form-control" />
            <label class="form-label" for="form6Example7" style="color:white">Pages number</label>
          </div>
          <!-- Checkbox -->
          <div class="form-check d-flex justify-content-center mb-4">
          </div>
          <!-- Submit button -->
        </div>
        </div>
          
          <button type="submit" class="btn btn-primary btn-block mb-4" id="btnn" >Done</button>
        </form>
            
            
            
            
            ';
        }
    
    
    ?>




</body>
</html>