<?php include("../includes/config.php") ?>

<?php
if (isset($_POST['email']) && isset($_POST['new_pass']) && isset($_POST['confirm_pass'])) {
    $mail = $_POST['email'];
    $n_pass = $_POST['new_pass'];
    $c_pass = $_POST['confirm_pass'];

    if (isset($_POST['save_pass'])) {
        if ($n_pass == $c_pass) {
            $query = mysqli_query($db_conn, "UPDATE LoginDetails SET password='$n_pass' WHERE email='$mail'");
            //header("Location: ../login.php");
            echo "<script>
                    alert('Updated Password');
                    window.location.href='../login.php';
                </script>";
        } else {
            echo "<script>alert('Re-type your pass')</script>";
        }
    }
}
?>
