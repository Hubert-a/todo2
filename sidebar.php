<!DOCTYPE>
<html lang="en">
    <head>
        <title>sidebar</title>
        <link rel="stylesheet" href="./assets/css/sidebar.css">
        <link rel="stylesheet" href="./assets/fontawesome/css/all.min.css"> 
    </head>
    <body>
        <div class="sidebar">
            <div class="logo_content">
                <div class="logo">
                    <div class="logo_name">TODO</div>
                </div>
                <i class="fas fa-ellipsis-h" id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="#">
                    <i class="fas fa-tachometer-alt"></i>
                    <!-- <span class="links_name">Dashboard</span> -->
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>
                <li>
                    <a href="#">
                    <i class="fas fa-plus"></i>
                    <span class="links_name">Create New Tasks</span>
                    </a>
                    <span class="tooltip">Create New Tasks</span>
                </li>
                <li>
                    <a href="#">
                    <i class="fas fa-plus"></i>
                    <span class="links_name">Add a Collection</span>
                    </a>
                    <span class="tooltip">Add a Collection</span>
                </li>
                <li>
                    <a href="#">
                    <i class="fas fa-user"></i>
                    <span class="links_name">View Profile</span>
                    </a>
                    <span class="tooltip">View Profile</span>
                </li>
                <li>
                    <a href="#">
                    <i class="fas fa-cog"></i>
                    <span class="links_name">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="./assets/images/undraw_profile_pic_ic5t-removebg-preview.png" alt="profile">
                        <div class="name_job">
                            <div class="name">Hubert Amarfio</div>
                            <div class="job">Web Developer, Union Systems Global</div>
                        </div>
                    </div>
                    <i class="fas fa-sign-out-alt" id="log_out"></i> 
                </div>
            </div>
        </div>
        <div class="home_content">
            <div class="text">Home Content</div>
        </div>

        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");

            btn.onclick = function(){
                sidebar.classList.toggle("active");
            }
        </script>
    </body>
</html>