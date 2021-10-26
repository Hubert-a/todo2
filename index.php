<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta content="initial-scale=1.0, width=device-width" name="viewport" />
        <title>MyDay | Welcome page</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../Todo/assets/css/index.css">
    </head>

    <body>
        <br>
        <br>
        <section class="container" style="background-color: #647bff;">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center">
                    <div class="container">
                        <img src="./assets/images/todo.png" class="img-fluid mb-5 py-3">
                            <p class="fs-1 fw-bold mx-5 px-4 mb-4 fst-italic text-white" style="color: white; font-family:Roboto;">
                                Easily</br>
                                Manage Your</br>
                                Daily Tasks</p>
                            <p class="fs-5 fw-light mx-5 px-4 mb-5 text-white" style="font-family:Roboto;"><small>Overwhelmed by your daily tasks?</br>
                                Get them under controll with todolist!</small></p>
                            <p class="fs-5 fw-light mx-5 px-4 fst-italic mb-4 text-white" style="font-family:Roboto;"><small>Get notified with each task?(Optional)
                                </small></p>
                                <form action="notification.php" method="post">
                                    <div class="row g-1">
                                        <div class="col-md-6 mx-5 px-3">
                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control border-0" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                            </div>
                                            <button type="submit" class="btn mb-5" style="background-color: #959EE9;">
                                                <span>Get notified</span>
                                                <span><i class="far fa-bell"></i></span>
                                            </button>
                                        
                                        </div>
                                    </div>
                                </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <form action="dashboard.php" class="form-container">
                        <img src="./assets/images/todo.png" alt="logo0" class="img-fluid mb-4"> 
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp"required>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                        </div>
                        <small><p class="text-center">Don’t have an account? <a href="signin.php">Sign up</a></p></small>
                        <small><p class="text-center"><a href="recovery.php">Forgot Password </a></p></small>
                      </form>
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