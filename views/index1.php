<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta content="initial-scale=1.0, width=device-width" name="viewport" />
        <title>MyDay | Welcome page</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../index1.css">
        <style>
          h5{
            font-family: Arial, Helvetica, sans-serif;
            font-style: italic;
            font-weight: bold;
            font-size: 60px;
          }
          .p{
            font-size: 20px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif
          }
          .carousel-item{
              height: 90vh;
              min-height: 300px;
              background:no-repeat scroll center scroll;
              -webkit-background-size:cover;
              background-size: cover;
          }

          .carousel-item::before{
              content: "";
              display: block;
              position: absolute;
              top: 0;
              left: 0;
              right: 0;
              bottom: 0;
              background: #000;
              opacity: 0.7;
          }
          .carousel-inner{
            width:50vw;
            position: relative;
            right: 12px;
          }
          .img{
            height: 90vh;
          }
          .carousel-caption {
            bottom: 10%;
          }
          /* .form-container{
    position: relative;
     height: 82vh ;
    background:rgb(245, 222, 179);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px #000;
          }*/

          /* style="background-color: #647bff; height:90vh" */
        </style>
    </head>

    <body>
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
                        <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> -->
                    </div>
                </div>
                
            
          
                <div class="col-md-5 bg-light" >
                    <div class="mt-5 container">
                    <form action="dashboard.php" class="form-container">
                        <!-- <img src="../assets/images/todo.png" alt="logo" class="img-fluid mb-4">  -->
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
                        <small><p class="text-center message">Don’t have an account? <a href="#">Sign up</a></p></small>
                        <small><p class="text-center"><a href="#">Forgot Password </a></p></small>
                    </form>
                    </div>
                    <div class="mt-2 container" >
                        <form action="" class="form-container"style="display: none;">
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
                        <small><p class="text-center message">Already have an account? <a href="#">Login </a></p></small>

                        </form>
                    </div>
                </div>
            </div>
        
        </div>


        <footer>
            <div class="container d-flex justify-content-center py-3 text-white">
                &copy; copyright 2021
            </div>    
        </footer>
        <script src="../bootstrap js/jquery.min.js"></script>
        <script src="../bootstrap js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script>
                    $('.message a').click(function(){
                        $('form').toggle(1000);
                    });
                </script>
    </body>
</html>