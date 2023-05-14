<?php include 'connection.php';?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $role = $_REQUEST['role'];
    if($role=="ADMIN")
        {
        $query = "select * from admin where username = '$username' and password = '$password'";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>=1)
        {
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['adminusername'] = $username;


           
            header('location:admindashboard.php');
        }
        else{
            echo 'Wrong username or password';
        }
    }
    if($role=="FACULTY")
        {
        $query = "select * from faculty where facultyid = '$username' and confirmpassword = '$password'";
        $res = mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>=1)
        {
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['facultyusername'] = $username;
            header('location:facultydashboard.php');
        }
        else{
            echo 'Wrong username or password';
        }
    }
    if($role=="STUDENT")
        {
        $query = "select * from studentdetails where studentid = '$username' and confirmpassword = '$password'";
        $res = mysqli_query($conn,$query);
        if($res)
        {
            session_start();
            $_SESSION['auth']='true';
            $_SESSION['studentusername'] = $username;


            

            
            header('location:studentdashboard.php');
        }
        else{
            echo 'Wrong username or password';
        }
    }
}
?>