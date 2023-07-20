<?php include("../includes/config.php") ?>

<?php

$query = mysqli_query($db_conn, "SELECT * FROM LoginDetails");

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];


    while ($info = mysqli_fetch_object($query)) {
        $email_db = $info->email;
        $pass_db = $info->password;
        $desig_db=$info->designation;

        if ($email == "admin@example.com" && $pass == "admin@sms") {
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../admin/dashboard.php?user=admin');
        } 
        else if ($email == $email_db && $pass == $pass_db && $desig_db=='teacher') {
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../teacher/dashboard.php?user=teacher');
        } 
        else if ($email == $email_db && $pass == $pass_db && $desig_db=='student') {
            session_start();
            $_SESSION['login'] = true;
            header('Location: ../student/dashboard.php?user=student');
        }
        else {
            // header('Location: ../login.php');
            // echo"<script>alert('Wrong pass or usernmae!')</script>";
            // set_time_limit(4);
            //header("Refresh:0; url=../login.php");
            echo "<script>
            alert('Wrong Password/Username');
            window.location.href='../login.php'
            </script>";
           // exit();
        }
    }

}
?>