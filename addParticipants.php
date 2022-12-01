<?php
   require 'setup/connection.php';

   $name = $_POST['name'];
   $mail = $_POST['mail'];
   $topic = $_POST['topic'];
   $wantedItems = $_POST['wantedItems'];
   $sweets = $_POST['sweets'];
   $sql = "INSERT INTO participantsInfo (name,mail,topic,wantedItems,sweets)
   VALUES ('$name','$mail','$topic','$wantedItems','$sweets')";
   mysqli_query($conn, $sql);
   mysqli_close($conn);
   header("location:thanks.php");
?>
