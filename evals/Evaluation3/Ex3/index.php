<?php
// definition de la classe aliment
class Aliment
{
    // proprietes
    public $nom;
    public $type;
    public $gout;
    public $couleur;
    // constructeur
    public function __construct($nom, $type, $gout, $couleur)
    {
        $this->nom = $nom;
        $this->type = $type;
        $this->gout = $gout;
        $this->couleur = $couleur;
    }
    // methode
    public function toString()
    {
        return "Fruit: " . $this->nom . ", type:  " . $this->type . ", gout: " . $this->gout . ", couleur: " . $this->couleur;
    }
}
// remplis un tableau avec des objets et leur proprietes
$aliments[1] = new Aliment("Pomme", "Fruit", "Sucre", "Rouge");
$aliments[2] = new Aliment("Orange", "Fruit", "Sucre", "Orange");
$aliments[3] = new Aliment("Cerise", "Fruit", "Sucre", "Rouge");
$aliments[4] = new Aliment("Banane", "Fruit", "Sucre", "Jaune");
$aliments[5] = new Aliment("Navet", "Legume", "Amer", "Blanc");
$aliments[6] = new Aliment("Tomate", "Fruit", "Sucre", "Rouge");
$aliments[7] = new Aliment("Carotte", "Legume", "Sucre", "Orange");
$aliments[8] = new Aliment("Laitue", "Legume", "Amer", "Vert");
$aliments[9] = new Aliment("Citron", "Fruit", "Sur", "Jaune");
$aliments[10] = new Aliment("Lime", "Fruit", "Sur", "Vert");
$aliments[11] = new Aliment("Ketchup", "Condiment", "Acidule", "Rouge");
$aliments[12] = new Aliment("Relish", "Condiment", "Sucre", "Vert");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercice 1</title>
</head>

<body>
    <table>
        <caption>Instances d'objets de la classe Aliment</caption>
        <tr>
            <th>Aliment</th>
            <th>Type</th>
            <th>Gout</th>
            <th>Couleur</th>
        </tr>
        <?php
        // boucle pour afficher mes objets dans un tableau
        foreach ($aliments as $aliment) {
            echo '<tr>';
            echo '<td>' . $aliment->nom . '</td>';
            echo '<td>' . $aliment->type . '</td>';
            echo '<td>' . $aliment->gout . '</td>';
            echo '<td>' . $aliment->couleur . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <h3>
        <?php
        //boucle pour afficher les objets avec la methode toString
        for ($i = 1; $i <= count($aliments); $i++) {
            echo '<h3>'.$aliments[$i]->toString().'</h3>';
        }
        ?>
</body>

</html>