<section id="Réagir aux événements" class="contenuChapitre">
    <h1>Réagir aux événements</h1>
    <p>Un JavaScript peut être exécuté lorsqu'un événement se produit, ex, lorsqu'un utilisateur clique sur un élément <code>HTML</code>.</p>
    <p class="codepen" data-height="150" data-theme-id="dark" data-default-tab="html" data-slug-hash="rNwMYxJ" data-user="c64ren" style="height: 150px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/rNwMYxJ">
                réagir</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <p class="codepen" data-height="167" data-theme-id="dark" data-default-tab="js,result" data-slug-hash="BaZLmKj" data-user="c64ren" style="height: 167px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/BaZLmKj">
                réagir2</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="EventListener" class="contenuChapitre">
    <h1>EventListener</h1>
    <p class="codepen" data-height="202" data-theme-id="dark" data-default-tab="js" data-slug-hash="PojGOzP" data-user="c64ren" style="height: 202px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/PojGOzP">
                addEventListener()</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <p class="codepen" data-height="188" data-theme-id="dark" data-default-tab="js" data-slug-hash="MWojOeO" data-user="c64ren" style="height: 188px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/MWojOeO">
                addEventListener()2</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Navigation DOM" class="contenuChapitre">
    <h1>Navigation DOM</h1>
    <ul>
        <li>Avec le DOM, on peut naviguer dans l'arborescence des nœuds à l'aide des relations de nœud</li>
        <li>Tout élément dans un document HTML est un nœud</li>
        <li>Le document entier est un nœud de document</li>
        <li>Chaque élément HTML est un nœud d'élément</li>
        <li>Le texte à l'intérieur des éléments HTML sont des nœuds de texte</li>
        <li>Chaque attribut HTML est un nœud d'attribut (obsolète)</li>
        <li>Tous les commentaires sont des nœuds de commentaires.</li>
    </ul>
    <h3>Relation de Noeuds</h3>
    <p>Les nœuds de l'arborescence ont une relation hiérarchique les uns avec les autres.</p>
    <p>Les termes parent, enfant et frère sont utilisés pour décrire les relations. </p>
    <p>On peut utiliser les propriétés de nœud suivantes pour naviguer entre les nœuds.</p>
    <p>La valeur du nœud de texte est accessible par la propriété du nœud.</p>
    <p class="codepen" data-height="168" data-theme-id="dark" data-default-tab="js" data-slug-hash="VwWKrmJ" data-user="c64ren" style="height: 168px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/VwWKrmJ">
                navigation</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Noeuds racine" class="contenuChapitre">
    <h1>Noeuds racine</h1>
    <p>Il existe une propriété qui permet d'accéder au document complet.</p>
    <p>Le corps du document: <code>document.body</code></p>
    <p>Le document complet: <code>document.documentElement</code> </p>
</section>

<section id="nodeName" class="contenuChapitre">
    <h1>La propriété <code>nodeName</code></h1>
    <p><code>nodeName</code> d'un nœud d'élément est le même que le nom de la balise.</p>
    <p><code>nodeName</code> d'un attribut node est le nom de l'attribut.</p>
    <p><code>nodeName</code> d'un nœud de texte est toujours #text.</p>
    <p><code>nodeName</code> du document node est toujours #document.</p>
    <p class="codepen" data-height="196" data-theme-id="dark" data-default-tab="js" data-slug-hash="wvezPeo" data-user="c64ren" style="height: 196px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/wvezPeo">
                nodeName</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <p><code>nodeName</code> contient toujours le nom de balise en majuscule d'un élément <code>HTML</code>.</p>
</section>

<section id="nodeValue" class="contenuChapitre">
    <h1>La propriété <code>nodeValue</code></h1>
    <p>La propriété <code>nodeValue</code> spécifie la valeur d'un nœud.</p>
    <p><code>nodeValue</code> pour les nœuds d'élément est null.</p>
    <p><code>nodeValue</code> pour les nœuds de texte est le texte lui-même.</p>
    <p><code>nodeValue</code> pour les nœuds d'attribut est la valeur de l'attribut.</p>
</section>

<section id="nodeType" class="contenuChapitre">
    <h1>La propriété <code>nodeType</code></h1>
    <p>La propriété nodeType renvoie le type d'un nœud. </p>
    <p>Les propriétés nodeType les plus importantes sont : </p>
    <table>
        <tr>
            <th>Noeud</th>
            <th>Type</th>
        </tr>
        <tr>
            <td>Noeud élement</td>
            <td>1</td>
        </tr>
        <tr>
            <td>Noeud attribut</td>
            <td>2</td>
        </tr>
        <tr>
            <td>Noeud texte</td>
            <td>3</td>
        </tr>
        <tr>
            <td>Noeud commentaire</td>
            <td>4</td>
        </tr>
        <tr>
            <td>Noeud document</td>
            <td>5</td>
        </tr>
        <tr>
            <td>Noeud document type</td>
            <td>6</td>
        </tr>
    </table>
</section>

<section id="Élements DOM" class="contenuChapitre">
    <h1>Création de nouveaux éléments DOM (nœuds) <code>HTML</code></h1>
    <p class="codepen" data-height="212" data-theme-id="dark" data-default-tab="js" data-slug-hash="xxrEPPM" data-user="c64ren" style="height: 212px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/xxrEPPM">
                createAppend</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <p>La méthode <code>appendChild()</code> a ajouté le nouvel élément en tant que dernier enfant du parent.</p>
</section>

<section id="Insertion" class="contenuChapitre">
    <h1>Insertion</h1>
    <p class="codepen" data-height="205" data-theme-id="dark" data-default-tab="js" data-slug-hash="qBjaVPw" data-user="c64ren" style="height: 205px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/qBjaVPw">
                createElement()</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Suppression" class="contenuChapitre">
    <h1>Suppression déléments HTML existants</h1>
    <p>Les méthodes <code>remove()</code> et <code>removeChild()</code>sont utilisées pour supprimer un élément <code>HTML</code>.</p>
    <p><code>remove()</code> ne fonctionne pas dans les anciens navigateurs</p>
    <p class="codepen" data-height="204" data-theme-id="dark" data-default-tab="js" data-slug-hash="vYZXWdE" data-user="c64ren" style="height: 204px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/vYZXWdE">
                supression</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Remplacement" class="contenuChapitre">
    <h1>Remplacement des éléments HTML</h1>
    <p>La méthode <code>replaceChild()</code> est utilisée pour remplacer un élément.</p>
</section>

<section id="Collections DOM" class="contenuChapitre">
    <h1>Collections DOM</h1>
    <p>La méthode getElementsByTagName() renvoie un objet HTML Collection. </p>
    <p>Un objet HTML Collection est une liste de type tableau d'éléments HTML.</p>
    <p class="codepen" data-height="202" data-theme-id="dark" data-default-tab="js" data-slug-hash="MWojOVG" data-user="c64ren" style="height: 202px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/MWojOVG">
                collections</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<?php include '../bibliographie.php'; ?>