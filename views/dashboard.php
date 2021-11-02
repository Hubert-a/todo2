<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <meta content="initial-scale=1.0, width=device-width" name="viewport" />
        <title>MyDay | Welcome page</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
        <link rel="stylesheet" href="../assets/css/dashboard.css">
        
    </head>
    <body>
        
            <div class="row">
                <div class="col-md-2 me-5 bg-danger" style="padding:2px; height:auto;">
                    <!-- start of logo -->
                    <!-- <div class="mb-5 d-flex justify-content-start">
                    <img src="./assets/images/month-calendar.png" alt="calender" class="image">
                    <h3 class="text-white">TODO</h3>
                    </div> -->
                    <!-- End of logo -->
                    <img src="../assets/images/todo 2.png" alt="todo" class="img-fluid mb-4">        

                    <!-- start of buttons -->
                    <div class="container mt-5">
                        <button class="btn d-flex justify-content-start rounded-pill  py-2 mb-2" style="width:100%; background: rgba(255, 255, 255, 0.1); border:1px solid rgba(255, 255, 255, 0.1);" type="button">
                            <span class="me-3">
                            <i class="fas fa-tachometer-alt"></i>
                            </span>
                            <span class="text-white fs-6">Dashboard</span>
                        </button>
                        <button class="btn d-flex justify-content-start rounded-pill py-2 mb-2" style="width:100%; background: rgba(255, 255, 255, 0.1); border:1px solid rgba(255, 255, 255, 0.1);" type="button">
                            <span class="me-3">
                            <i class="fas fa-plus"></i>
                            </span>
                            <span class="text-white fs-6" >Create New Task</span>
                        </button>
                        <button class="btn d-flex justify-content-start flex-wrap align-items-center rounded-pill py-2 mb-2" style="width:100%;background: rgba(255, 255, 255, 0.1); border:1px solid rgba(255, 255, 255, 0.1);" type="button">
                            <span class="me-3">
                            <i class="fas fa-plus"></i>
                            </span>
                            <span class="text-white fs-6">Add a Collection</span>
                        </button>
                        <button class="btn d-flex justify-content-start rounded-pill py-2 mb-2" style="width:100%;background: rgba(255, 255, 255, 0.1); border:1px solid rgba(255, 255, 255, 0.1);" type="button">
                            <span class="me-3">
                            <i class="fas fa-user"></i>
                            </span>
                            <span class="text-white fs-6">View Profile</span>
                        </button>
                        <button class="btn d-flex justify-content-start mb-5 rounded-pill py-2 mb-2" style="width:100%;background: rgba(255, 255, 255, 0.1); border:1px solid rgba(255, 255, 255, 0.1);" type="button">
                            <span class="me-3"> 
                            <i class="fas fa-cog"></i>
                            </span>
                            <span class="text-white fs-6">Settings</span>
                        </button>

                        <a href="../includes/logout.inc.php" style="text-decoration: none;">
                        <button class="btn d-flex justify-content-center border rounded-pill" style="background-color: white; width:100%;" type="button">
                            <span class="me-3 fs-6" style="color: #E12F2F;">LOGOUT</span>
                            <span >
                            <i class="fas fa-sign-out-alt"></i> 
                            </span>
                        </button>
                        </a>
                    </div>
                    <!-- End of buttons -->
                </div>
                

                    <div class="col-md-9 py-4">
                        <div class="container bg-light py-4 border rounded d-flex justify-content-start align-items-center">
                            <img src="../assets/images/undraw_profile_pic_ic5t-removebg-preview.png" alt="profile" class="profile me-4">

                            <div class="d-flex flex-column">

                                <?php
                                if(isset($_SESSION["name"])){
                                    echo "<h2>Hello " . $_SESSION["name"] ."</h2>";
                                }
                                ?>
                                <!-- <h2>Hubert Amarfio</h2> -->
                                <p>Web Developer, Union Systems Global</p>
                            </div>
                            <div class="d-flex ms-auto mb-auto">
                                <button type="button" class="btn bg-danger rounded-pill">
                                    Edit Profile    
                                </button>
                            </div>   
                        </div>
                        
                            <div class="d-flex justify-content-around mt-5 mb-5">
                                <button class="btn btn-secondary" type="button" id="all" style="width: 10%;">All</button>
                                <button class="btn btn-secondary" type="button" id="progress">In Progress</button>
                                <button class="btn btn-secondary" type="button" id="complete">Completed</button>
                            </div>
                                <!-- Backend -->
                        <div>
                            <div class="d-flex justify-content-start mt-5 mb-5">
                                <h4 class="me-2">All Tasks</h4>
                                <p class="border text-center text-white " style="width:30px; background: #5916E8;">4</p>
                            </div>


                            <div class="col-md-6 border rounded py-2 mb-3 px-5 bg-light">
                                <p class="h6">Final Year Project Research</p>
                                <p >I will start researching into my final year project work</p>
                            </div>
                            <div class="col-md-6 border rounded py-2 mb-3 px-5 bg-light">
                                <p class="h6">Final Year Project Research</p>
                                <p>Please enter the details below to continue</p>

                            </div>
                            <div class="col-md-6 border rounded py-2 mb-3 px-5 bg-light">
                                <p class="h6">Final Year Project Research</p>
                                <p >Please enter the details below to continue</p>

                            </div>

                        </div>
                            <hr class="bg-danger" style="width:600px">
                    </div>  



            </div>
        

        









        <footer>
            <div class="container d-flex justify-content-center py-3">
                &copy; copyright 2021
            </div>    
        </footer>
        <script src="../bootstrap js/jquery.min.js"></script>
        <script src="../bootstrap js/bootstrap.min.js"></script>
    </body>
</html>