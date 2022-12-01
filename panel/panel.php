<?php
    session_start();

    if(!isset($_SESSION['user']))
    {
        header("location:../login/login.php");
    }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="panelStyle.css">
        <title>Secret Santa - Oskar Michta</title>
    </head>

    <body>
        <main>
            <section class="contentbox">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <label for="entries">Który wpis chcesz usunąć:</label>
                            <form method="post" action="deleteEntry.php">
                                <select name="entries" id="entries" required>
                                <?php
                                    require '../setup/connection.php';
                                    $sql = "SELECT id, name, mail FROM participantsInfo";
                                    $result = $conn->query($sql);
                                        
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<option value=".$row["id"].">".$row["id"]." - ".$row["name"]." - ".$row["mail"]."</option>";}}
                                ?>
                                </select>
                                <input type="submit" value="Usuń wpis"/>
                            </form>
                            <a href="mailingSystem.php">Wylosuj pary!</a>
                        </div>
                    </div>
                    
                </div>
            </section>
        </main>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>