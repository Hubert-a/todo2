<!DOCTYPE html>
    <html>
        <head> 
            <meta charset="utf-8"> 
            <meta content="initial-scale=1.0, width=device-width" name="viewport" />
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
            <link rel="stylesheet" href="../assets/css/signin.css">
            <script src="../assets/js/password.js"></script>
            <title>Sign in</title>
        </head>


        <body>
            <div class="row">
                <div class="col-md-6 bg-danger">
                <div class="container ">
                    <div class="text-center">
                        <img src="../assets/images/logo.png" alt="" class="align-items-baseline"style="width: 70%; height:70%" >
                    </div>
                            <p class="h3 text-center text-white">Easily Manage Your Daily Tasks</p>
                            <pre class="text-center text-white">Overwhelmed by your daily tasks?
     Get them under controll with todolist!</pre>
                    </div> 

                </div>
                <div class="col-md-6 bg-light">
                    <div class="container">
                            <h3 class="mt-5">Get Started...</h3>
                            <p class="mb-5"><small>Already have an account? <a href="../index.php" class="text-danger ms-1"  style="text-decoration: none;">Login</a></small></p>
                            <p class="h4 text-center mb-3">Register Now</p>
                            <p class="text-center mb-4">Please enter your details below to continue</p>

                            <form action="../includes/signup.inc.php" method="POST">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="name" id="floatingInput" placeholder="Hubert Amarfio" required>
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email address</label>
                                </div>
                                <div class="form-floating mb-3 " style="position: relative;">
                                        <input type="password" class="form-control" name="pswd" id="floatingPassword" placeholder="Password" required>
                                        <label for="floatingPassword">Password</label>
                                        <span>
                                            <img src="../assets/images/view.png" alt="view" class="view fa" onclick="toggle()">
                                        </span>
                                </div>
                            
                                   
                                <div class="form-floating mb-5">
                                    <input type="password" class="form-control" name="cpswd" id="floatingInput" placeholder="Confirm Password" required>
                                    <label for="floatingInput">Confirm Password</label>
                                    <span>
                                        <img src="../assets/images/view.png" alt="view" class="view fa" onclick="toggle()">
                                    </span>
                                </div>
                                <div class="d-grid gap-2 mb-5">
                                    <button type="submit" name="submit" class="btn btn-danger rounded-pill btn-block">REGISTER</button>
                                </div>
                            </form>    

                            <?php
                    if(isset($_GET["error"])){
                        if ($_GET["error"]=="invalidEmail"){
                            echo "<p>Choose a proper Email</p>";
                        }
                        else if($_GET["error"]=="passwordsdontmatch"){
                            echo "<p>Passwords don't match</p>"; 
                        }
                        else if($_GET["error"]=="stmtfailed"){
                            echo "<p>Something went wrong, try again!</p>"; 
                        }
                        else if($_GET["error"]=="emailexists"){
                            echo "<p>Email already exists!</p>"; 
                        }
                        else if($_GET["error"]=="none"){
                            echo "<p>Signup succesful</p>"; 
                        }
                    } 
                ?>
                    </div>
                </div>
            </div>

            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                    });
            </script>
        </body>
    </html>