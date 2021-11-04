<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta content="initial-scale=1.0, width=device-width" name="viewport" />
        <title>MyDay | Welcome pape</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/index.css">
        <link rel="stylesheet" href="./assets/css/signin.css">
        <script src="./assets/js/password.js"></script>

    </head>

    <body>
        <section>
            <div class="row">
                <div class="col-md-8 bg-danger">
                    <div class="text-center">
                        <img src="./assets/images/logo.png" alt="" class="align-items-baseline"style="width: 70%; height:70%" >
                    </div>
                    <div class="container ">
                            <p class="h3 text-center text-white">Easily Manage Your Daily Tasks</p>
                            <pre class="text-center text-white">Overwhelmed by your daily tasks?
     Get them under controll with todolist!</pre>
                    </div> 
                </div>

                <div class="col-md-4 bg-light">
                    <div class="container">
                        <h3 class="mt-5">Get Started...</h3>
                        <p class="mb-5"><small>Don’t have an account? <a href="./views/signin.php" class="text-danger ms-2"  style="text-decoration: none;">Register</a></small></p>

                        <p class="h4 text-center mb-3">Login Now</p>
                        <p class="text-center mb-4">Please enter your details below to continue</p>

                    
                        <form action="./includes/login.inc.php" method="POST">
                        <!-- <img src="./assets/images/todo.png" alt="logo0" class="img-fluid mb-4">  -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name= "email" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="pswd" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                            <span>
                                <img src="./assets/images/view.png" alt="view" class="view" id="view" onclick="toggle()">
                            </span>
                        </div>
                       
                            <div class="d-flex justify-content-between">
                            <div class="mb-3 form-check d-flex justify-content-between">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label ms-1" for="exampleCheck1">Remember me</label>
                            </div>
                            <small><p class="text-end"><a href="./views/  recovery.php">Forgot Password?</a></p></small>
                            </div>
                            
                        
                        <div class="d-grid gap-2 mb-5">
                        <button type="submit"  name="submit" class="btn btn-danger rounded-pill btn-block">LOGIN</button>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light d-flex justify-content-start py-2">
                                <span class="me-4">
                                    <img src="./assets/images/google.png" alt="" class="images">
                                </span>
                            
                                <span>
                                    Sign up with Google
                                </span>

                            </button>

                            <button type="button" class="btn btn-light d-flex justify-content-start">
                                <span class="me-4">
                                <img src="./assets/images/facebook.png" alt="" class="images">
                                </span>
                                <span>
                                    Sign up with Facebook
                                </span>
                            </button>
                        </div>
                        </div>
                      </form>
                    

                <?php
                    if(isset($_GET["error"])){
                        if ($_GET["error"]=="invalidEmail"){
                            echo "<div class='modal' tabindex='-1'>
                            <div class='modal-dialog'>
                              <div class='modal-content'>
                                <div class='modal-body'>
                                  <p>Choose a proper Email.</p>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                </div>
                              </div>
                            </div>
                          </div>";
                        }
                        else if($_GET["error"]=="wronglogin"){
                            echo "<p>Incorrect credentials!</p>"; 
                        }
                    }
                ?>
                    </div>
                </div>
            </div>
        </section>









    <footer>
            <div class="container d-flex justify-content-center py-3 text-white">
                &copy; copyright 2021
            </div>    
        </footer>
        <script src="./bootstrap js/jquery.min.js"></script>
        <script src="./bootstrap js/bootstrap.min.js"></script>
    </body>
</html>