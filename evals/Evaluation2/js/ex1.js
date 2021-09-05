var tableau = [-71, 100, -17, -26, 107, 70];
afficherTableau();

// on appelle cette fonction plusieurs fois pour mettre le tableau a jour sur la page
// a chaque fois qu'on fait une modification dessus
function afficherTableau(){
    document.getElementById("tableau").innerHTML = tableau;
}

// la fonction pop supprime le dernier element d'un tableau
function supprimer() {
    tableau.pop();
    afficherTableau();
}

// la fonction push ajoute un element a la fin du tableau
function ajouter(){
    tableau.push(777);
    afficherTableau();
}

// la fonction splice se postionne a l'endroit specifie par le premier parametre
// et remplace autant de valeurs que le deuxieme parametre specifie
// par le troisieme parametre (et tous ceux qui suives si il y a lieu)
function remplacer(){
    tableau.splice(0, 1, 77);
    afficherTableau();
}

// pour additionner, je parcours le tableau avec une boucle et aditionne le tout dans une variable
// qui sera affichee en dessous des bouttons
function calculer() {
    var total = 0;
    for (var i = 0; i < tableau.length; i++)
        total += tableau[i];
    document.getElementById("resultat").innerHTML = "Total = " + total;
}


// javascript offre la fonction sort pour trier les tableaux
function trier() {
    tableau.sort();
    afficherTableau();
}

// pour copier les valeur positives, on parcourt le tableau principal
// et si la valeur actuelle est superieure a sero, on l'inserre dans le nouveau tableau avec push
// ensuite on affiche le tableau resultant en dessous des boutons
function copier() {
    var tab2 = [];
    for (var i = 0; i < tableau.length; i++){
        if (tableau[i] > 0)
            tab2.push(tableau[i]);
    }
    document.getElementById("resultat").innerHTML = "Tableau des positifs <br> " + tab2;
}