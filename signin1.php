<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8"> 
            <meta content="initial-scale=1.0, width=device-width" name="viewport" />
            <title>MyDay | Sign up </title>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css">
            <link rel="stylesheet" href="./assets/css/signin.css">
        </head>
    <body class="container">
        <br>
        <img src="./assets/images/todo.png" alt="logo" class="img-fluid mb-5">
        
        
        <div class="row">
            <div class="col-md-12">
                    <div class="d-flex justify-content-center">
                <form action="dashboard.php" method="POST" class="form-container">
                        <h1 class="text-center fst-italic">Welcome! </h1>
                         <p class="h3"><small>Let's get started</small></p>
                        <label for="FName" class="form-label">First Name</label>
                        <input type="text" id="FName" class="form-control" required>
                        <label for="Sname" class="form-label">Second name</label>
                        <input type="text" class="form-control" id="Sname" required>
                        <label for="Emailadd" class="form-label">Email Address</label>
                        <input type="Email" class="form-control" id="Emailadd" required>
                        <label for="inputPassword5" class="form-label">Password</label>
                        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required>
                        <div id="passwordHelpBlock" class="form-text mb-3 text-white" >
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces or special characters.
                        </div>
                        <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                        </div>
                        <p><small>Already have an account? <a href="notification.php">Login Now</a></small></p>

                </form>
                </div>
            </div>


                










        </div>

    </body>
</html>