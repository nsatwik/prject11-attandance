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
        
       
        


        label {
        display: block;
        margin-bottom: 5px;
      }
      input[type="text"],
      input[type="email"],
      input[type="password"] {
        display: block;
        margin-bottom: 10px;
        padding: 5px;
        width: 300px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        border-radius: 3px;
        cursor: pointer;
      }
      .error {
        color: red;
        margin-bottom: 10px;
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
                        </li>
                        <li class="nav-item">
                            <div class="zoom">
                            <a class="nav-link" href="faculty.php">Faculty</a>
                        </div>
                        </li>
                        <li class="nav-item">
                            <div class="zoom">

                            <a class="nav-link" href="admin.php">Admin</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php"><i class="fa fa-address-card" aria-hidden="true"></i>
                                Contact Us</a>
                        </li> -->
                        
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
        <body>
<br>
<br>
<br>

<center><h1>Student Registration Form</h1>
    <form method="post" action="addstudentintodatabase.php">
      <label for="studentid">Student ID:</label>
      <input type="text" id="studentid" name="studentid"  required>
      <label for="studentname">Student Name:</label>
      <input type="text" id="studentname" name="studentname"  required>
      <label for="course">Course Name:</label>
      <input type="text" id="course" name="course"  required>
      <label for="major">Major Name:</label>
      <input type="text" id="major" name="major"  required>
      <label for="courseyear">Course Year:</label>
      <input type="text" id="courseyear" name="courseyear"  required>
      <label for="gmail">Gmail:</label>
      <input type="email" id="gmail" name="gmail" required>
      <label for="parentid">Parent ID:</label>
      <input type="text" id="parentid" name="parentid"  required>
      <label for="parentname">Parent Name:</label>
      <input type="text" id="parentname" name="parentname"  required>
      <label for="parentgmail">Parent Gmail:</label>
      <input type="email" id="parentgmail" name="parentgmail"  required>
      <label for="newpassword">New Password:</label>
      <input type="password" id="newpassword" name="newpassword" minlength="8" required>
      <label for="confirmpassword">Confirm Password:</label>
      <input type="password" id="confirmpassword" name="confirmpassword" minlength="8" required>
      <div id="password-error" class="error"></div>
      <input type="submit" value="Register">
    </form>
    <script>
      const form = document.querySelector('form');
      const passwordError = document.getElementById('password-error');

      form.addEventListener('submit', (event) => {
        const password = form.newpassword.value;
        const confirmPassword = form.confirmpassword.value;
        if (password !== confirmPassword) {
          event.preventDefault();
          passwordError.textContent = 'Passwords do not match';
        } else {
          passwordError.textContent = '';
        }
      });
    </script>
    </center>
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