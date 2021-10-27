<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta content="initial-scale=1.0, width=device-width" name="viewport" />
        <title>MyDay | Welcome pape</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="./assets/css/index.css">
    </head>

    <body>

        <section>
            <div class="row">
                <div class="col-md-6 bg-danger">
                <img src="" alt="logo" class="img-fluid mb-5 py-3">
                    <div class="d-flex justify-content-start">
                        <img src="./assets/images/undraw_Add_notes_re_ln36-removebg.png" alt="" class="img-fluid " >
                        <!-- <img src="./assets/images/undraw_Collaboration_re_vyau-removebg-preview.png" alt="" class="bg-dark"> -->
                    </div>
                    <div class="container ">
                            <p class="h3 text-center text-white">Easily Manage Your Daily Tasks</p>
                            <pre class="text-center text-white">Overwhelmed by your daily tasks?
     Get them under controll with todolist!</pre>
                    </div> 
                </div>

                <div class="col-md-6 bg-light">
                    <div class="container">
                        <h3 class="mt-5">Get Started...</h3>
                        <p class="mb-5"><small>Don’t have an account? <a href="./signin.php" class="text-danger ms-2"  style="text-decoration: none;">Register</a></small></p>

                        <p class="h4 text-center mb-3">Login Now</p>
                        <p class="text-center mb-4">Please enter your details below to continue</p>

                    
                        <form action="dashboard.php">
                        <!-- <img src="./assets/images/todo.png" alt="logo0" class="img-fluid mb-4">  -->
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                       

                            <div class="mb-3 form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                              <small><p class="text-end"><a href="recovery.php">Forgot Password?</a></p></small>
                            
                        
                        <div class="d-grid gap-2 mb-5">
                        <button type="submit" class="btn btn-danger rounded-pill btn-block">LOGIN</button>
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
                    

                    </div>
                </div>
            </div>
        </section>









    <footer>
            <div class="container d-flex justify-content-center py-3 text-white">
                &copy; copyright 2021
            </div>    
        </footer>
        <script src="bootstrap js/jquery.min.js"></script>
        <script src="bootstrap js/bootstrap.min.js"></script>
    </body>
</html>