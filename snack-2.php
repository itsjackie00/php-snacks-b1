<?php
//SNACK 2
/* 
Snack 2
Con un form passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare 
 “Accesso riuscito”, altrimenti “Accesso negato”
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Snack</title>
</head>

<body>
    <header class="container d-flex justify-content-between">
        <h1>PHP Snacks</h1>
        <nav>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="snack-1.php">Snack-1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="snack-2.php">Snack-2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="snack-3.php">Snack-3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="snack-4.php">Snack-4</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <h2>Snack-2</h2>
        <form action="index.php" method="GET">
            <label for="name">Insert name</label>
            <input type="text" name="name" id="name">
            <label for="age">Insert age</label>
            <input type="text" name="age" id="age">
            <label for="mail">Insert mail</label>
            <input type="text" name="mail" id="mail">
            <button type="submit">Send</button>

        </form>
        <?php
        if (isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["mail"])) {
            if (strlen($_GET["name"]) > 3 && strpos($_GET["mail"], ".") && strpos($_GET["mail"], "@") && is_numeric($_GET["age"])) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        };
        ?>
    </section>