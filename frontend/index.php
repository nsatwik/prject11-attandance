<?php include "connection.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CJITS Institutions</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        body{
           
            overflow-x: hidden; 
            overflow-y: auto; 
            background-color: aliceblue;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
            
        }
        h2{
            color:rgb(0, 205, 27);
        }
        
        .zoom:hover{
          transform:scale(1.1);
      }
      img{
        
border:2px solid wheat;
border-radius:8px;
    
    
.container-fuild{
    display: inline;
    border-style: 2px solid black;
    height: fit-content;
    border-radius:2px;

   
}
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid blue;
  border-right: 16px solid green;
  border-bottom: 16px solid red;
  border-left: 16px solid pink;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
img{
    display: inline;
    height: 1px;
}
.container {
            background: #21bd62;
            color: black;
            margin-top: 100px;
            padding: 20px;
            box-shadow: 0px 0px 10px 3px black;
        }

        #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
    </style>
    
</head>

  
   
          <div class="loader"></div>
    
    <header>
    <center>
        <div style="text-decoration-style: wavy;color: rgb(165, 15, 15);display: inline;">
        <h1 style="color: rgb(68, 153, 213);"><img src="https://archive.nptel.ac.in/content/college_assets/college_logo/3117_logo.png"width="100"height="100">Christu Jyothi Institute Of Science and Technolgies.</h1>
       <!-- <h3 style="color: rgb(13, 95, 37);">Warangal,Telangana</h3> -->
       </div></center>
   

    <div class="container-fuild">
        <nav class="navbar navbar-expand-lg navbar-static-top bg-info navbar-light">
            <div class="container-fuild">
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span></button>
                <div class="navbar-collapse collapse navbar" id="collapsibleNavbar">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item active">
                            <div class="zoom">
                            
                            <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
                            </div>
                        </li>
                        <!-- <li class="nav-item">
                            <div class="zoom">
                            <a class="nav-link" href="student.php"><i class="fa 92577344-2b1d7600-f2a8-11ea-9ddc-f03f280bda78" aria-hidden="true">Student</i></a>
                        </div>
                        </li> -->
                        <!-- <li class="nav-item">
                            <div class="zoom">
                            <a class="nav-link" href="faculty.php">Faculty</a>
                        </div>
                        </li>
                        <li class="nav-item">
                            <div class="zoom">

                            <a class="nav-link" href="admin.php">Admin</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="zoom">
                            <a class="nav-link" href="aboutus.php">About us</a>
                            </div>
                        </li>
                    </ul>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php"><i class="fa fa-address-card" aria-hidden="true"></i>
                                Contact Us</a>
                        </li>-->
                        <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Login <i class="fa fa-sign-in" aria-hidden="true"></i>
                            </button>
                        </li> 
                        
                    </ul>
                    

                    
                    
                </div>
            </div>
        </nav>

        <?php 
    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $day . '-' . $month . '-' . $year;

    ?>
        <marquee behavior="scroll" direction="left" style="
        color: rgb(32, 70, 28);
        font-weight: bold;
        background: #49c3d6;margin-bottom: 0;
        padding: 10px 0 10px;
        font-size: 14px;display:block" scrollamount="5" ><span><?php echo $today; ?></span>: Welcome to CJITS institutions.</marquee>
        <br>	<div class="container"><div class="quick-links-btn-sec pull-left"> </header>
            <body>          
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin:0% 25% 0% 25%">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="images/image1.jpeg" alt="First slide">
                
                <div class="carousel-caption">
                  <h5 style="color: black;">Attendance by roll call of all students.</h5>
              </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/image2.png" alt="Second slide">
                <div class="carousel-caption">
                  <h5 style="color: black;">Time and Attendance.</h5>
              </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="images/image3.jpeg" alt="Third slide">
                <div class="carousel-caption">
                  <h5 style="color: black;">Attendance by Face recognition.</h5>
              </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
        <form action = "homelogin.php" method = "post">          
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">User Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Username</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" name= "username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Password</span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name= "password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <input type="radio" id="admin" name="role" value="ADMIN">
                          <label for="admin">ADMIN</label>
                          <input type="radio" id="faculty" name="role" value="FACULTY">
                          <label for="faculty">FACULTY</label>
                          <input type="radio" id="student" name="role" value="STUDENT">
                          <label for="student">STUDENT</label><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="homelogin.php" method="post">
                        <button type="submit" class="btn btn-primary"  onclick="homelogin.php">Login</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
   <br>
   <br>
   <br>
   
    <footer>
        <div class="container" style="background-color: #49c3d6;">
            <p style="color: black;">@copyrights 2023. All Rights Reserved.</p>
        </div>
    </footer>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<script>
    function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>