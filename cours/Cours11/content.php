<section id="Objet image DOM" class="contenuChapitre">
    <h1>L'Objet image DOM</h1>
    <p>L'objet Image représente un élément HTML <code>&lt;img&gt;</code></p>
    <p class="codepen" data-height="189" data-theme-id="dark" data-default-tab="js" data-slug-hash="BaREPRJ" data-user="c64ren" style="height: 189px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/BaREPRJ">
                objetDom</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Créer un objet image" class="contenuChapitre">
    <h1>Créer un objet <code>&lt;img&gt;</code></code></h1>
    <p>On peut créer un élément <code>&lt;img&gt;</code> en utilisant la méthode <code>document.createElement()</code></p>
    <p class="codepen" data-height="253" data-theme-id="dark" data-default-tab="js" data-slug-hash="YzVMjrN" data-user="c64ren" style="height: 253px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/YzVMjrN">
                creerImage</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Objet form du DOM" class="contenuChapitre">
    <h1>Objet <code>form</code> du DOM</h1>
    <p>L'objet <code>form</code> représente un élément HTML <code>&lt;form&gt;</code></p>
    <p class="codepen" data-height="197" data-theme-id="dark" data-default-tab="js" data-slug-hash="oNWOMoz" data-user="c64ren" style="height: 197px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/oNWOMoz">
                objetForm</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Créer un objet form" class="contenuChapitre">
    <h1>Créer un objet <code>form</code></h1>
    <p>On peut créer un élément <code>&lt;form&gt;</code> en utilisant la méthode <code>document.createElement()</code></p>
    <p class="codepen" data-height="285" data-theme-id="dark" data-default-tab="js" data-slug-hash="WNjWKMg" data-user="c64ren" style="height: 285px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/WNjWKMg">
            </a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Exercice 1" class="contenuChapitre">
    <h1>Exercice 1</h1>
    <p>Codez un script permettant de calculer le nombre d’élément dans un <code>&lt;form&gt;</code></p>
    <p class="codepen" data-height="241" data-theme-id="dark" data-default-tab="js" data-slug-hash="ExmJpLj" data-user="c64ren" style="height: 241px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/ExmJpLj">
                cours11ex1</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Collection d'éléments" class="contenuChapitre">
    <h1>Collection d'éléments</h1>
    <p>La collection elements renvoie une collection de tous les éléments d'un formulaire</p>
    <p>Les éléments de la collection sont triés tels qu'ils apparaissent dans le code source</p>
    <h3><code>objectforme.elements</code></h3>
    <table>
        <tr>
            <th>Attribut</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>length</td>
            <td>Renvoie le nombre d'éléments dans l'élément <code>&lt;form&gt;</code></td>
        </tr>
        <tr>
            <td>index</td>
            <td>Renvoie l'élément dans <code>&lt;form&gt;</code> avec l'index spécifié (commence à 0)</code></td>
        </tr>
        <tr>
            <td>item(index)</td>
            <td>Renvoie l'élément dans <code>&lt;form&gt;</code> avec l'index spécifié (commence à 0)</td>
        </tr>
        <tr>
            <td>namedItem(id)</td>
            <td>Renvoie l'élément dans <code>&lt;form&gt;</code> avec l'identifiant spécifié</code></td>
        </tr>
    </table>
</section>

<section id="Exercice 2" class="contenuChapitre">
    <h1>Exercice 2</h1>
    <p>Codez un script permettant de récupérer la valeur du premier élément (index 0) dans un formulaire</p>
    <p class="codepen" data-height="221" data-theme-id="dark" data-default-tab="js" data-slug-hash="rNmbroa" data-user="c64ren" style="height: 221px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/rNmbroa">
                cours11ex2</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Exercice 3" class="contenuChapitre">
    <h1>Exercice 3</h1>
    <p>Codez un script permettant de parcourir tous les éléments d'un formulaire et affichez la valeur de chaque élément</p>
    <p class="codepen" data-height="295" data-theme-id="dark" data-default-tab="js" data-slug-hash="JjNVBxR" data-user="c64ren" style="height: 295px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/JjNVBxR">
                cours11ex3</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Validation de formulaire" class="contenuChapitre">
    <h1>Validation de formulaire</h1>
    <p>La validation du formulaire HTML peut être effectuée par JavaScript</p>
    <p class="codepen" data-height="253" data-theme-id="dark" data-default-tab="js" data-slug-hash="xxdeJNE" data-user="c64ren" style="height: 253px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/xxdeJNE">
                validationFormulaire</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <p>Si un champ de formulaire <code>fname</code> est vide, cette fonction alerte un message et renvoie <code>false</code> pour empêcher la soumission du formulaire</p>
</section>

<section id="Exercice 4" class="contenuChapitre">
    <h1>Exercice 4</h1>
    <p>Codez un script permettant de valider un formulaire selon la contrainte suivante: <code>3 &lt; value &lt; 15</code> </p>
    <p class="codepen" data-height="309" data-theme-id="dark" data-default-tab="js" data-slug-hash="GRmLBbd" data-user="c64ren" style="height: 309px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/GRmLBbd">
                cours11ex4</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Validation automatique" class="contenuChapitre">
    <h1>Validation automatique</h1>
    <p>La validation du formulaire HTML peut être effectuée automatiquement par le navigateur</p>
    <p>Si un champ de formulaire <code>fname</code> est vide, l'attribut <code>required</code> empêche la soumission de ce formulaire</p>
    <p class="codepen" data-height="192" data-theme-id="dark" data-default-tab="html" data-slug-hash="NWjmBQo" data-user="c64ren" style="height: 192px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/NWjmBQo">
                validationAutomatique</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Validation des contraintes" class="contenuChapitre">
    <h1>Validation des contraintes</h1>
    <h3><code>readonly</code>, <code>disabled</code>, <code>size</code>, <code>maxlength</code>, <code>min</code> et <code>max</code></h3>
    <p>HTML a introduit un nouveau concept de validation HTML appelé validation de contrainte</p>
    <p>La validation des contraintes HTML est basée sur les attributs d'entrée</p>
</section>

<section id="L'attribut readonly" class="contenuChapitre">
    <h1>L'attribut <code>readonly</code></h1>
    <p>L'attribut <code>readonly</code> spécifie qu'un champ de saisie est en lecture seule</p>
    <p class="codepen" data-height="300" data-theme-id="dark" data-default-tab="html" data-slug-hash="eYWoLNp" data-user="c64ren" style="height: 300px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/eYWoLNp">
                readonly</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <p>Un champ de saisie en lecture seule ne peut pas être modifié</p>
</section>

<section id="L'attribut disabled" class="contenuChapitre">
    <h1><code>L'attribut <code>disabled</code></code></h1>
    <p>L'attribut <code>disabled</code> spécifie qu'un champ de saisie doit être désactivé</p>
    <p class="codepen" data-height="294" data-theme-id="dark" data-default-tab="html" data-slug-hash="jOmRvPj" data-user="c64ren" style="height: 294px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/jOmRvPj">
                disabled</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <p>La valeur d'un champ de saisie désactivé ne sera pas envoyée lors de l’envoi du formulaire</p>
</section>

<section id="L'attribut size" class="contenuChapitre">
    <h1>L'attribut <code>size</code></code></h1>
    <p>L'attribut <code>size</code> spécifie la largeur visible, en caractères, d'un champ de saisie</p>
    <p>La valeur par défaut pour la taille est 20</p>
    <p class="codepen" data-height="267" data-theme-id="dark" data-default-tab="html" data-slug-hash="poPBOyo" data-user="c64ren" style="height: 267px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/poPBOyo">
                size</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="L'attribut maxlength" class="contenuChapitre">
    <h1>L'attribut <code>maxlength</code></h1>
    <p>L'attribut <code>maxlength</code> spécifie le nombre maximal de caractères autorisés dans un champ de saisie</p>
    <p>Cet attribut ne fournit aucun retour. Donc, si vous voulez alerter l'utilisateur, vous devez écrire du code JavaScript</p>
    <p class="codepen" data-height="294" data-theme-id="dark" data-default-tab="html" data-slug-hash="qBmwMaX" data-user="c64ren" style="height: 294px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/qBmwMaX">
                maxlength</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Les attributs min et max" class="contenuChapitre">
    <h1>Les attributs <code>min</code> et <code>max</code></h1>
    <p>Les attributs d'entrée <code>min</code> et <code>max</code> spécifient les valeurs minimale et maximale d'un champ d'entrée</p>
    <p>Utilisez les attributs <code>max</code> et <code>min</code> ensemble pour créer une plage de valeurs</p>
    <p class="codepen" data-height="385" data-theme-id="dark" data-default-tab="html" data-slug-hash="YzVMOpa" data-user="c64ren" style="height: 385px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/YzVMOpa">
                minMax</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
</section>

<section id="Bibliographie" class="contenuChapitre">
    <h1>Bibliographie</h1>
    <h2>Liste des ouvrages de références</h2>
    <p>[1] Javascript, The Definitive Guide. Daniel Flanagan, O'Reilly</p>
    <p>[2] Learning JavaScript Design Patterns - A JavaScript and jQuery Developer's Guide. Addy Osmani, O'Reilly</p>
    <h2>Sites Internet à consulter</h2>
    <nav>
        <a href="http://www.codecademy.com/fr/tracks/web">http://www.codecademy.com/fr/tracks/web</a></br>
        <br>
        <a href="http://www.codecademy.com/fr/tracks/javascript">http://www.codecademy.com/fr/tracks/javascript</a></br>
        <br>
        <a href="http://www.codecademy.com/fr/tracks/php">http://www.codecademy.com/fr/tracks/php</a></br>
        <br>
        <a href="http://openclassrooms.com/courses/comprendre-le-web">http://openclassrooms.com/courses/comprendre-le-web</a></br>
        <br>
        <a href="http://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3">http://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3</a></br>
        <br>
        <a href="http://openclassrooms.com/courses/dynamisez-vos-sites-web-avec-javascript">http://openclassrooms.com/courses/dynamisez-vos-sites-web-avec-javascript</a></br>
        <br>
        <a href="http://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql">http://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql</a></br>
        <br>
        <a href="http://www.w3schools.com">http://www.w3schools.com</a></br>
    </nav>
</section>