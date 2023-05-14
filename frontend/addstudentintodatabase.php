
<?php include 'connection.php'?>
<?php

    $studentid = $_REQUEST['studentid'];
    $studentname = $_REQUEST['studentname'];
    $course = $_REQUEST['course'];
    $major = $_REQUEST['major'];
    $courseyear = $_REQUEST['courseyear'];
    $gmail = $_REQUEST['gmail'];
    $parentid = $_REQUEST['parentid'];
    $parentname = $_REQUEST['parentname'];
    $parentgmail = $_REQUEST['parentgmail'];
    $newpassword = $_REQUEST['newpassword'];
    $confirmpassword = $_REQUEST['confirmpassword'];
    $query2 = "CREATE TABLE `attendance`.`$studentid` ( `date` DATE NOT NULL , `status` VARCHAR(220) NOT NULL )";
    $res2 = mysqli_query($conn, $query2);
     $query = "INSERT INTO `studentdetails` (`studentid`, `studentname`, `course`, `major`, `courseyear`, `newpassword`, `confirmpassword`, `mailid`) VALUES ('$studentid', '$studentname', '$course', '$major', '$courseyear', '$newpassword', '$confirmpassword', '$gmail')";
     $res = mysqli_query($conn,$query);
     if($res)
    {
        echo '<script>alert("Successfully inserted into student table")</script>';
    }
    $query1 = "INSERT INTO `parent` (`parentid`, `studentid`, `parentname`, `gmail`) VALUES ('$parentid', '$studentid', '$parentname', '$parentgmail')";
    $res1 = mysqli_query($conn,$query1);
    if($res1)
    {
        echo '<script>alert("Successfully inserted into parent table")</script>';
    }
    
     
?>
<button><a href="addstudent.php">click here to go back</a></button>