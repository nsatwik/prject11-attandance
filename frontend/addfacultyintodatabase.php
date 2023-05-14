<?php include 'connection.php'?>
<?php

    $facultyid = $_REQUEST['facultyid'];
    $facultyname = $_REQUEST['facultyname'];
    $gmail = $_REQUEST['gmail'];
    $subject = $_REQUEST['subject'];
    $newpassword = $_REQUEST['newpassword'];
    $confirmpassword = $_REQUEST['confirmpassword'];
     $query = "INSERT INTO `faculty` (`facultyid`, `facultyname`, `gmail`, `subject`, `newpassword`, `confirmpassword`) VALUES ('$facultyid', '$facultyname', '$gmail', '$subject', '$newpassword', '$confirmpassword')";
     $res = mysqli_query($conn,$query);
     if($res)
        {
          echo '<script>alert("Successfully inserted")</script>';
        }
        ?>
        <button><a href="addfaculty.php">click here to go back</a></button>
