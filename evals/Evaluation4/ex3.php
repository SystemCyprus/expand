<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Exercice 3</title>
</head>

<body>
    <h1>Exercice 3</h1>
    <hr>
    <?php
    function estParfait($nombre)
    {
        // pour stocker la somme
        $somme = 0;
        // parcurir les numeros de 1 à nombre
        for ($i = 1; $i < $nombre; $i++) {
            if ($nombre % $i == 0) {
                $somme = $somme + $i;
            }
        }
        // retourne vrai si la somme est egale au nombre
        // donc si le nombre est parfait
        return $somme == $nombre;
    }
    for ($i = 1; $i < 30; $i++) {
        if (estParfait($i)) echo '<p>' . $i . '</p>';
    }
    ?>
    <hr>
    <nav>
        <nav>
            <a href="ex1.html">Exercice 1</a>
            <a href="ex2.html">Exercice 2</a>
            <a href="ex3.php">Exercice 3</a>
        </nav>
    </nav>
</body>

</html>