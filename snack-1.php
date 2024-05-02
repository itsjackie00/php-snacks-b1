<?php
//SNACK 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
// Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
//e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60
$matches = [
    [
        "casa" => "Varese",
        "ospite" => "Juventus",
        "casaPunti" => 33,
        "ospitePunti" => 44
    ],
    [
        "casa" => "Stella Azzurra",
        "ospite" => "Virtus Trieste",
        "casaPunti" => 30,
        "ospitePunti" => 51
    ],
    [
        "casa" => "Stella Azzurra",
        "ospite" => "Treviso",
        "casaPunti" => 22,
        "ospitePunti" => 22
    ],
    [
        "casa" => "Varese",
        "ospite" => "Stella Azzurra",
        "casaPunti" => 41,
        "ospitePunti" => 34
    ],
    [
        "casa" => "Juventus",
        "ospite" => "Juvecaserta",
        "casaPunti" => 32,
        "ospitePunti" => 35
    ],
    [
        "casa" => "Virtus Trieste",
        "ospite" => "Varese",
        "casaPunti" => 50,
        "ospitePunti" => 60
    ],
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Juvecaserta",
        "casaPunti" => 62,
        "ospitePunti" => 71
    ],
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Virtus Roma",
        "casaPunti" => 72,
        "ospitePunti" => 79
    ],
    [
        "casa" => "Treviso",
        "ospite" => "Olimpia Milano",
        "casaPunti" => 55,
        "ospitePunti" => 51
    ],
    [
        "casa" => "Trieste",
        "ospite" => "Virtus Roma",
        "casaPunti" => 20,
        "ospitePunti" => 30
    ]
];
//var_dump($matches);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">

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
    <main class="container mt-4 ">
        <ul class="list-group">
        <?php
        foreach ($matches as $match) {
            echo "<li class=\"list-group-item\">". $match["casa"] . " - " . $match["ospite"] . " | " . $match["casaPunti"] . " - " . $match["ospitePunti"] . "<li>";
        }
        ?>
        </ul>
    </main>
</body>

</html>