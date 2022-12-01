<?php
    session_start();

    if(!isset($_SESSION['user']))
    {
        header("location:../login/login.php");
    }
    
   $option = isset($_POST['entries']) ? $_POST['entries'] : false;
   if ($option) {
        require '../setup/connection.php';
        $sql = "DELETE FROM participantsInfo WHERE id = ".$option."";
        $result = $conn->query($sql);
        mysqli_close($conn);
        header("location:panel.php");
   } else {
     header("location:panel.php");
   }

?>