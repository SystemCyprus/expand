<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>
<body>
    <form action="page.php" id="myForm" method="post">
        <label for="n1">Premier nombre: </label></br>
        <input type="text" id="n1" name="n1">
        </br>
        <label for="op">Operation</label></br>
        <input type="text" id="op" name="op">
        </br>
        <label for="n2">Deuxieme Nombre</label></br>
        <input type="text" id="n2" name="n2">
        </br>
        <input type="submit" value="calculer" formaction="index.php">
    </form>
    <h3><?php 
        switch ($_POST['op']){
            case '+':
                echo $_POST['n1'] + $_POST['n2'];
                break;
                echo $_POST['n1'] - $_POST['n2'];
            case '-':
                break;
                echo $_POST['n1'] * $_POST['n2'];
            case '*':
                break;
            case '/':
                if ($_POST['n2'] == 0 )
                    echo 'Division par zero impossible';
                else
                    echo $_POST['n1'] / $_POST['n2'];
                break;
                default: echo 'Operation invalide';
        }
    
    ?></h3>
</body>
</html>