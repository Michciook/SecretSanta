<?php
    session_start();

    if(!isset($_SESSION['user']))
    {
        header("location:../login/login.php");
        exit;
    }
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require '../setup/connection.php';
    require '../setup/mailSetup.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    $rex = $conn->query("SELECT mail FROM participantsInfo");
    if ($rex->num_rows > 0) {
        while($val = $rex->fetch_assoc()) {
            $mailList[] = $val["mail"];
        }}

    $result = $conn->query("SELECT id, name, mail, topic, wantedItems, sweets, recived FROM participantsInfo");

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    $mail->isSMTP();                                       
        $mail->Host       = $mailHost;     
        $mail->SMTPAuth   = true;                               
        $mail->Username   = $mailUsername;                  
        $mail->Password   = $mailPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                        
        $mail->Port       = 465;                                    

        $mail->setFrom($mailUsername, 'Święty Mikołaj');  
        $mail->Sender = $mailUsername;
        
    if ($result->num_rows > 0) {   
        while($row = $result->fetch_assoc()) {
            while(true) {
                $index = rand(0, count($mailList)-1);
                if ($mailList[$index] != $row['name']) {
                    echo $mailList[$index] . " + " . $row['mail'] . " checked, <br />";
                    break;
                }
            }
            $mail->addAddress($mailList[$index]);
            $mail->isHTML(true);                                
            $mail->Subject = 'HOHOHO! Komu w tym roku przyniesiesz prezent?';
            $mail->Body    = '<h2>Twoją parą jest: '. $row["name"] . "</h2><br><p>Doszły mnie słuchy że temat prezentu który najbardziej go/ją zaciekawi to: " . $row["topic"] . "</p><p>Prezenty które by go/ją zadowoliły (nie musisz się tym sugerować): " . $row["wantedItems"] . "</p><p>A jego/jej ulubione słodycze to: " . $row["sweets"] . "</p><p>Życzę wesołych świąt!<p>";
            $mail->AltBody = 'Made with love by Oskar Michta';

            $mail->send();
            $mail->clearAddresses();
            $conn->query("UPDATE participantsInfo SET recived='" . $mailList[$index] . "' WHERE id=" . $row['id']);

            array_splice($mailList, $index, 1);
        }
    }

    $conn->close();

?>
