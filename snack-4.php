<?php
//SNACK 4
/*
Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta.
*/
$numbers = array();
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
                    <a class="nav-link" href="#">Home</a>
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
        <h2>Snack 4</h2>
        <?php
        for ($i = 0; $i < 15; $i++) {
            $number = rand(1, 100);
            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
                echo $number . "<br>";
            }
        }
        ?>
    </section>
</body>

</html>