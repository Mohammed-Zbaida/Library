
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #error{
            color: red;
        }
    </style>
</head>
<body>
    <section class="" style="background-image: url('books.jpg') ; background-size: cover; background-position: center;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                    <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="bookg.jpg"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                    </div>
                    <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
        
                        <form method="POST"  action="./Login_member.php">
                            <div class="d-flex align-items-center mb-3 pb-1">
                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                            <span class="h1 fw-bold mb-0"><img src="image 9.png" alt=""></span>
                            </div>
        
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                            
        
                            <div class="form-outline mb-4">
                            <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required/>
                            <label class="form-label" for="form2Example17">Email address</label>
                            </div>
        
                            <div class="form-outline mb-4">
                            <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required/>
                            <label class="form-label" for="form2Example27">Password</label>
                            </div>
                            <?php
						session_start();
                        // echo $_SESSION['error'];
						if (isset($_SESSION['error'])) {
							echo $_SESSION['error'];
							unset($_SESSION['error']);
						}
						?>
                            <div class="pt-1 mb-4">
                            <button class="btn btn-dark btn-lg btn-block"  name="login">Login</button>
                            </div>
        
                            <a class="small text-muted" href="#!">Forgot password?</a>
                            <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="Register.php"
                                style="color: #393f81;">Register here</a></p>
                            <a href="#!" class="small text-muted">“A reader lives a thousand lives before he dies .“</a>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
    
    </body>
</html>