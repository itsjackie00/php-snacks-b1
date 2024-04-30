<?php
// Snack 1
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
var_dump($matches);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack</title>
</head>

<body>
    <h1>Snack-1</h1>
    <?php
    foreach ($matches as $match) {
        echo $match["casa"] . " - " . $match["ospite"] . " | " . $match["casaPunti"] . " - " . $match["ospitePunti"] . "<br>";   
    }
    ?>
</body>

</html>