// tableau vide qui va contenir nos nombres parfaits
var tabParfaits = []

// on commence par looper de 1 a 500
// on appelle a chaque index la fonction qui verifie si le nombre est parfait
// si oui, on l'ajoute au tableau des parfaits
// et on break pour sortir de la boucle et ne pas l'ajouter plus d'une fois
for (var i = 1; i < 501; i++) {
    for (var j = 0; j <= i; j++){
        if (estParfait(i)) tabParfaits.push(i);
        break;
    }
}

// on affiche le tableau avec les nombres parfaits de 1 a 500
document.getElementById("tabParfaits").innerHTML = tabParfaits;


// la fonction prend un nombre comme parametre, retourne vrai ou faux pour indiquer si il est parfait ou non
function estParfait(nombre) {
    var temp = 0;
    for(var i=1 ; i <= nombre / 2; i++){
        if(nombre % i === 0){
            temp += i;
        }
    }
    return (temp === nombre && temp !== 0);
}