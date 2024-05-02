<?php
//SNACK 3
/*
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
    DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
    Stampare ogni data con i relativi post.
*/
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
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
        <h2>Snack 3</h2>
        <?php
        foreach ($posts as $key => $value) {
            echo ($key) . "<br>";
            echo $value[0]['title'] . "<br>";
            echo $value[0]['author'] . "<br>";
            echo $value[0]['text'] . "<br><br>";
            //echo print_r($value);
        }
        ?>
    </section>