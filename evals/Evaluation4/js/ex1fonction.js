// importer la classe (modulaire)
import Citoyen from "./ex1Classe.js";

// instanciation de l'objet
const citoyen = new Citoyen(
    "1765",
    "Jean",
    "Patrick",
    30,
    "1548, Maisonneuve Est, apt 104",
    "Laval",
    "Canada"
);

// vu qu'on a importé un module, il faut ajouter l
window.AfficherObjet = AfficherObjet;


function AfficherObjet() {
    // on cree une variable pour l'element paragraphe
    let paragraph = document.createElement('p');
    // puis une autre pour le avoir le "toString" de l'objet
    let text = document.createTextNode(citoyen.aficherString());
    // on fiche le texte de l'objet dans le paragraphe
    paragraph.appendChild(text);
    // et on affiche ce paragraphe au DOM
    document.querySelector('main').appendChild(paragraph);
}