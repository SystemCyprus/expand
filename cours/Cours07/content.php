<section id="Objets de date" class="contenuChapitre">
    <h1>Objets de date</h1>
    <p>Les objets <code>Date</code> sont créés avec le constructeur <code>new Date()</code>.</p>
    <p>Les nombres spécifient l'année, le mois, le jour, l'heure, la minute, la seconde et la milliseconde</p>
    <p>Si vous ne fournissez qu'un seul paramètre, il sera traité en millisecondes.</p>
    <p><code>new Date(string)</code> crée un nouvel objet date à partir d'une chaîne de date.</p>
    <p class="codepen" data-height="260" data-theme-id="dark" data-default-tab="js" data-slug-hash="OJgRQEe" data-user="c64ren" style="height: 260px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/OJgRQEe">
            </a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Obtention date" class="contenuChapitre">
    <h1>Méthodes d'obtention de la date</h1>
    <p>La méthode <code>getTime()</code> renvoie le nombre de millisecondes depuis le 1er janvier 1970.</p>
    <p>La méthode <code>getFullYear()</code> renvoie l'année d'une date sous la forme d'un nombre à quatre chiffres.</p>
    <p>La méthode <code>getMonth()</code> renvoie le mois d'une date sous forme de nombre (0 - 11).</p>
    <p>La méthode <code>getDate()</code> renvoie le jour d'une date sous la forme d'un nombre (1 - 31).</p>
    <p>La méthode <code>getDay()</code> renvoie le jour de la semaine d'une date sous forme de nombre (0-6)</p>
    <p>La méthode <code>getHours()</code> renvoie les heures d'une date sous forme de nombre (0 - 23).</p>
    <p>La méthode <code>getMinutes()</code> renvoie les minutes d'une date sous forme de nombre (0 - 59).</p>
    <p>La méthode <code>getSeconds()</code> renvoie les secondes d'une date sous forme de nombre (0 - 59).</p>
    <p>La méthode getMilliseconds() renvoie les millisecondes d'une date sous forme de nombre (0 - 999).</p>
    <p class="codepen" data-height="464" data-theme-id="dark" data-default-tab="js" data-slug-hash="oNwzEdy" data-user="c64ren" style="height: 464px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/oNwzEdy">
                obtentionDate</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Affectation date" class="contenuChapitre">
    <h1>Méthodes d'affectation de la date</h1>
    <p>La méthode <code>setFullYear()</code> définit l'année d'un objet date et peut optionnellement définir le mois et le jour.</p>
    <p>La méthode <code>setMonth()</code> définit le mois d'un objet date (0 - 11).</p>
    <p>La méthode <code>setDate()</code> définit le jour d'un objet date (1 - 31).</p>
    <p>La méthode <code>setHours()</code> définit les heures d'un objet date (0 - 23).</p>
    <p>La méthode <code>setMinutes()</code> définit les minutes d'un objet date (0 - 59).</p>
    <p>La méthode <code>setSeconds()</code> définit les secondes d'un objet date (0-59).</p>
    <p class="codepen" data-height="282" data-theme-id="dark" data-default-tab="js" data-slug-hash="ZEyprvB" data-user="c64ren" style="height: 282px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/ZEyprvB">
                affectationDate</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Objet Mathematique" class="contenuChapitre">
    <h1>Objet Mathematique</h1>
    <p>L'objet JavaScript Math permet d'effectuer des opération mathématiques sur des nombres</p>
    <p><code>Math.round(x)</code> renvoie l'entier le plus proche.</p>
    <p><code>Math.ceil(x)</code> renvoie la valeur entière suivant <code>x</code>.</p>
    <p><code>Math.floor(x)</code> renvoie la valeur entière précédant <code>x</code>.</p>
    <p><code>Math.trunc(x)</code> renvoie la partie entière de <code>x</code>.</p>
    <p class="codepen" data-height="278" data-theme-id="dark" data-default-tab="js" data-slug-hash="XWgjZgM" data-user="c64ren" style="height: 278px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/XWgjZgM">
                objetMath</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <p><code>sign(x)</code> renvoie -1 si <code>x</code> est négatif, 1 si <code>x</code> est positif et 0 si <code>x = 0</code>.</p>
    <p><code>pow(x, y)</code> renvoie la valeur de <code>x</code> à la puissance <code>y</code>.</p>
    <p><code>sqrt(x)</code> renvoie la racine carrée de <code>x</code>.</p>
    <p><code>abs(x)</code> renvoie la valeur absolue de <code>x</code>;
    <p class="codepen" data-height="234" data-theme-id="dark" data-default-tab="js" data-slug-hash="ExXgQwX" data-user="c64ren" style="height: 234px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/ExXgQwX">
                mathAutres</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Trigonometrie" class="contenuChapitre">
    <h1>Trigonometrie</h1>
    <p><code>sin(x)</code> renvoie le sinus de l'angle x (exprimé en radians).</p>
    <p><code>cos(x)</code> renvoie le cosinus de l'angle x (exprimé en radians).</p>
    <p class="codepen" data-height="195" data-theme-id="dark" data-default-tab="js" data-slug-hash="JjJRpNr" data-user="c64ren" style="height: 195px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/JjJRpNr">
                trigonometrie</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="min() et max()" class="contenuChapitre">
    <h1>Minimum et Maximum</h1>
    <p><code>min()</code> et <code>max()</code> peuvent être utilisés pour trouver la valeur minimale ou maximale dans une liste d'arguments.</p>
    <p class="codepen" data-height="210" data-theme-id="dark" data-default-tab="js" data-slug-hash="PojGQpV" data-user="c64ren" style="height: 210px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/PojGQpV">
                minMax</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="random() et log()" class="contenuChapitre">
    <h1>Random et Log</h1>
    <p>random() renvoie un nombre aléatoire entre 0 (inclus) et 1 (exclu)</p>
    <p>log(x) renvoie le logarithme (base optionnelle) de x</p>
    <p class="codepen" data-height="236" data-theme-id="dark" data-default-tab="js" data-slug-hash="GREjQrw" data-user="c64ren" style="height: 236px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/GREjQrw">
                randomLog</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<section id="Operateurs de comparaison" class="contenuChapitre">
    <h1>Operateurs de comparaison</h1>
    <table>
        <tr>
            <th>Operateur</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><code>!=</code></td>
            <td>inégal</td>
        </tr>
        <tr>
            <td><code>&gt;=</code></td>
            <td>plus grand ou égal/td>
        </tr>
        <tr>
            <td><code>==</code></td>
            <td>égal</td>
        </tr>
        <tr>
            <td><code>&gt;</code></td>
            <td>plus grand</td>
        </tr>
        <tr>
            <td><code>&lt;</code></td>
            <td>Inférieur</td>
        </tr>
        <tr>
            <td><code>&lt;=</code></td>
            <td>inférieur ou égal</td>
        </tr>
        <tr>
            <td><code>===</code></td>
            <td>valeur <strong>et</strong> type égaux</td>
        </tr>
        <tr>
            <td><code>!==</code></td>
            <td>valeur <strong>ou</strong> type différents</td>
        </tr>
    </table>
</section>

<section id="Structure conditionnelle" class="contenuChapitre">
    <h1>Structure conditionnelle</h1>
    <p>On peut utiliser l'instruction <code>if</code> pour spécifier un bloc de code JavaScript à exécuter si une condition est vraie.</p>
    <p class="codepen" data-height="278" data-theme-id="dark" data-default-tab="js" data-slug-hash="bGRwLpJ" data-user="c64ren" style="height: 278px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/bGRwLpJ">
                conditionnelle</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
    <p>Utilisez l'instruction optionnelle <code>else</code> pour spécifier un bloc de code à exécuter si la condition est fausse.</p>
    <p class="codepen" data-height="334" data-theme-id="dark" data-default-tab="js" data-slug-hash="BaZLYzb" data-user="c64ren" style="height: 334px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;">
        <span>See the Pen <a href="https://codepen.io/c64ren/pen/BaZLYzb">
                else if()</a> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a>)
            on <a href="https://codepen.io">CodePen</a>.</span>
    </p>
</section>

<?php include '../bibliographie.php'; ?>