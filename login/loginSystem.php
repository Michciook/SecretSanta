<?php
    require '../setup/connection.php';
    session_start();

    if(isset($_POST['username'])) {
            $query="select * from users where username='".$_POST['username']."' and password='".md5($_POST['password'])."'";
            $result=mysqli_query($conn,$query);

            if(mysqli_fetch_assoc($result)) {
                $_SESSION['user']=$_POST['username'];
                header("location:../panel/panel.php");
            } else {
                header("location:login.php");
            }
    } else {
        echo 'Not Working Now Guys';
    }

?>