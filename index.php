<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="Style.css"  type="text/css"/>
        <title>Secret Santa - Oskar Michta</title>

</head>
<body>
    <main>
        <section class="contentbox">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>Dodaj się do listy!</p>
                        <form action="addParticipants.php" method="post">
                            <input type="text" id="name" name="name" placeholder="Podaj swoje imię..">
                            <input type="email" id="mail" name="mail" placeholder="Podaj swój mail.." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                            <input type="text" id="topic" name="topic" placeholder="Podaj temat prezentu który najbardziej by Cię zadowolił..">
                            <input type="text" id="wantedItems" name="wantedItems" placeholder="Podaj przykładowe prezenty które by cię zadowoliły..">
                            <input type="text" id="sweets" name="sweets" placeholder="Ulubione marki słodyczy..">
                            <input type="submit">
                        </form>
                    </div>
                    <div class="col-md-12 footer">
                        <a href="login/login.php">Panel Administracyjny</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
        <script src="snow.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>