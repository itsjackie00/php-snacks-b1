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
var_dump($matches);
?>
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
    <title>Snack</title>
</head>

<body>
    <section>
    <h1>Snack-1</h1>
    <?php
    foreach ($matches as $match) {
        echo $match["casa"] . " - " . $match["ospite"] . " | " . $match["casaPunti"] . " - " . $match["ospitePunti"] . "<br>";   
    }
    ?>
    </section>
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
        if(isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["mail"])) {
            if(strlen($_GET["name"]) > 3 && strpos($_GET["mail"], ".") && strpos($_GET["mail"], "@") && is_numeric($_GET["age"])) {
                echo "Accesso riuscito";
            } else {
                echo "Accesso negato";
            }
        };
    ?>
    </section>
</body>

</html>