<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta content="initial-scale=1.0, width=device-width" name="viewport" />
        <title>MyDay | Welcome page</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/index1.css">
    </head>

    <body>
        <br>
        <br>
        <div class="container bg-transparent" >
            <div class="row">
                <div class="col-md-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="../assets/images/holdingmoney.jpg" class="d-block w-100  img" alt="carouselImage">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Welcome</h5>
                              <p class="p">Need cash? Login to request</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="../assets/images/coins.jpg" class="d-block w-100  img" alt="carouselImage" >
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Fast & Reliable</h5>
                              <p class="p">Processing requests only takes minutes</p>
                            </div>
                            </div>
                            <div class="carousel-item">
                            <img src="../assets/images/bundle.jpg" class="d-block w-100 img" alt="carouselImage" >
                            <div class="carousel-caption d-none d-md-block">
                              <h5>Get Notified</h5>
                              <p class="p">Get notified when approved</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            
          
                <div class="col-md-5 bg-light" >
                    <div class="mt-5 container">
                    <form action="" class="form-container">
                        <h3 class="mt-5 ">Hello...</h3>
                        <p class="mb-4 message"><small>Don’t have an account? 
                          <a href="#" class=" ms-2"  style="text-decoration: none;">Register</a></small></p>
                          <p class="h4 text-center mb-3">Login Now</p>
                        <p class="text-center mb-4">Please enter your details below to continue</p>
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" id="email" placeholder="name@example.com">
                          <label for="email">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="password" placeholder="Password">
                          <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-block" style="background-color: #647bff;">Log in</button>
                        </div>
                        <small><p class="text-center"><a href="#" style="text-decoration:none">Forgot Password </a></p></small>
                    </form>
                    </div>
                    <div class="mt-2 container" >
                        <form action="" class="form-container"style="display: none;">
                        <h3 class="mt-5 ">Welcome...</h3>
                        <p class="mb-4 message"><small>Already have an account?
                        <a href="#" class=" ms-2"  style="text-decoration: none;">Login</a></small></p>
                          <p class="h4 text-center mb-3">Signup Now</p>
                        <p class="text-center mb-4">Please enter your details below to continue</p>
                        <div class="mb-2 form-floating">
                          <input type="text" class="form-control mb-2" id="name" placeholder="Jonas Markin">
                          <label for="name" class="form-label">Name</label>
                        </div>
                        <div class="mb-2 form-floating">
                          <input type="text" class="form-control" id="username" placeholder="Jomark">
                          <label for="username" class="form-label">Username</label>
                        </div>
                        <div class="mb-2 form-floating">
                          <input type="text" class="form-control" id="email" placeholder="name@example.com">
                          <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="mb-2 form-floating">
                          <input type="text" class="form-control" id="role" placeholder="Channels">
                          <label for="role" class="form-label">Role</label>
                        </div>
                        <div class="mb-2 form-floating">
                          <input type="password" class="form-control" id="password" placeholder="Password">
                          <label for="password" class="form-label">Password</label>
                        </div>
                        <div class="mb-3 form-floating">
                          <input type="password" class="form-control" id="password_confirmation" placeholder="Repeat Password">
                          <label for="password_confirmation" class="form-label">Confirm password</label>
                        </div>
                        <div class="d-grid gap-2 mb-2">
                        <button type="submit" class="btn btn-block"style="background-color: #647bff;">Sign up</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        
          </div>
          


        <script src="../bootstrap js/jquery.min.js"></script>
        <script src="../bootstrap js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script>
                    $('.message a').click(function(){
                        $('form').animate({height:"toggle",opacity:"toggle"}, "slow");
                    });
                </script>
    </body>
</html>