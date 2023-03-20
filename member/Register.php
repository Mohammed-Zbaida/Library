<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
    <section style="background-image: url('books.jpg') ; background-size: cover; background-position: center;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  
                <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
                  <div class="col-xl-6">
                    <!-- Form -->
                    <form method="POST" action="./Register-member.php" onsubmit="return validate();"> 
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Member registration form</h3>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="Full_name" name="Full_name">
                                <label class="form-label" for="Full_name">Full name</label>
                                <p id="error-1" style="color: red;"></p>
                              </div>

                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="Adresse" name="Adresse" >
                                <label class="form-label" for="form3Example1n">Adresse</label>
                                <p id="error-2" style="color: red;"></p>
                              </div>
                            </div>
                          </div>
          
                          <div class="row">
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="email" name="email">
                                <label class="form-label" for="form3Example1m1">Email</label>
                                <p id="error-3" style="color: red;"></p>
                                


                              </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <div class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="cin" name="cin">
                                <label class="form-label" for="form3Example1n1">CIN</label>
                                <p id="error-4" style="color: red;"></p>

                              </div>
                            </div>
                          </div>
          
                          <div class="form-outline mb-4">
                            <input type="text" class="form-control form-control-lg" id="Phone_number" name="Phone_number">
                            <label class="form-label" for="form3Example8">Phone number</label>
                            <p id="error-5" style="color: red;"></p>
                          </div>

                          <!--  -->
                            <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                              <h6 class="mb-0 me-4" style="    margin-right: 48px;    font-size: 17px;">Gender: </h6>


                              <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="Gender" id="femaleGender"
                                  value="Female" />

                                <label class="form-check-label" for="femaleGender">Female</label>
                              </div>

                              <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" name="Gender" id="maleGender"
                                  value="Male" />
                                <label class="form-check-label" for="maleGender">Male</label>
                              </div>
                          </div>

                          <p id="error-9" style="color: red;"></p>

                              
          
                    <div class="form-outline mb-4">
                            <input type="date" class="form-control form-control-lg" id="Date" name="Date">
                            <label class="form-label" for="form3Example8">Date of birth</label>
                            <p id="error-6" style="color: red;"></p>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="password" class="form-control form-control-lg" id="password" name="password">
                            <label class="form-label" for="form3Example8">Password</label>
                            <p id="error-7" style="color: red;"></p>
                          </div>

                          <div class="form-outline mb-4">
                            <input type="password" class="form-control form-control-lg" id="confirm_password" name="confirm_password">
                            <label class="form-label" for="confirm_password">Confirmer Password</label>
                            <p id="error-8" style="color: red;"></p>
                          </div>
                          </div>
                          <div class="row" style="justify-content: flex-end;
                          margin-right: -11px;">
                            <div class="col-md-6 mb-4">
                <!-- <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="button" class="btn btn-warning btn-lg ms-2" name="add">Submit form</button>
                </div> -->
                <div class="d-flex justify-content-end pt-3 " style="margin-right: 15px;">
                  <button  class="btn btn-warning btn-lg ms-2"  id="myButton" name="add">Click me</button>
                </div>
                  </div></form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- Link jacascript -->
    <script src="validations.js"></script>
</body>
</html>