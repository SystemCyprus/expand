<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>

<body>


    <form action="page.php" id="myForm" method="get">
        <label for="nom">Nom:</label>
        </br>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="prenom">Prénom:</label>
        </br>
        <input type="text" id="prenom" name="prenom">
        </br></br>
        <input type="submit" value="Envoyer" formaction="index.php">
    </form>
    <h3><?php echo isset($_GET['nom']) ?  $_GET['nom'] : 'variable pas existante'; ?></h3>
    <h3><?php echo isset($_GET['prenom']) ? $_GET['prenom'] : 'variable pas existante'; ?></h3>

</body>

</html>