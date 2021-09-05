<section id="Introduction au PHP" class="contenuChapitre">
    <h1>Introduction au PHP</h1>
    <p>PHP est un langage de script de serveur et un outil puissant pour créer des pages Web dynamiques et interactives</p>
    <ul>
        <li>Générer du contenu de page dynamique</li>
        <li>Créer, ouvrir, lire, écrire, supprimer et fermer des fichiers sur le serveur</li>
        <li>Collecter des données de formulaire</li>
        <li>Envoyer et recevoir des cookies</li>
        <li>Ajouter, supprimer, modifier des données dans votre base de données</li>
        <li>Contrôler l'accès des utilisateurs</li>
        <li>Crypter les données</li>
    </ul>
</section>

<section id="Syntaxe PHP" class="contenuChapitre">
    <h1>Syntaxe du PHP</h1>
    <p>Un script PHP est exécuté sur le serveur et le résultat HTML brut est renvoyé au navigateur</p>
    <p>Un script PHP commence par <code>&lt;?php</code> et se termine par <code>?&gt;</code></p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:darkgreen; background:#281800; ">//&nbsp;Commentaire&nbsp;d'une&nbsp;seule&nbsp;ligne</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:darkgreen; background:#281800; ">#&nbsp;Commentaire&nbsp;d'une&nbsp;seule&nbsp;ligne</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"Hello&nbsp;World!"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:darkgreen; background:#281800; ">//&nbsp;Nouvelle&nbsp;ligne&nbsp;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:darkgreen; background:#281800; ">/*&nbsp;Commentaire&nbsp;de&nbsp;+iers&nbsp;lignes</span>
    <span style="color:darkgreen; background:#281800; ">echo&nbsp;"Hello&nbsp;World!";</span>
    <span style="color:darkgreen; background:#281800; ">echo&nbsp;"&lt;br&gt;";&nbsp;*/</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$a</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#008c00; background:#281800; ">10</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$a</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$a</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#008c00; background:#281800; ">11</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$a</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Variables PHP" class="contenuChapitre">
    <h1>Variables PHP</h1>
    <p>En PHP, une variable commence par le signe $, suivi du nom de la variable</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#ffffff; background:#281800; ">$texte</span><span style="color:#d2cd86; background:#281800; "> =</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"Bonjour&nbsp;le&nbsp;monde"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; "> =</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">17</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#d2cd86; background:#281800; "> =</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#009f00; background:#281800; ">77.5</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$texte</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Portée PHP" class="contenuChapitre">
    <h1>Portée PHP</h1>
    <h2>Globale</h2>
    <p>Une variable déclarée en dehors d'une fonction a une <strong>portée globale</strong> et n'est accessible qu'en dehors d'une fonction</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">77</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:darkgreen; background:#281800; ">//&nbsp;portée&nbsp;globale&nbsp;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">function&nbsp;f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:darkgreen; background:#281800; ">//&nbsp;portée&nbsp;locale&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"&lt;p&gt;x-</span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; ">&lt;/p&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
    <h2>Locale</h2>
    <p>Une variable déclarée dans une fonction a une <strong>portée locale</strong> et n'est accessible que dans cette fonction</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">function&nbsp;f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:darkgreen; background:#281800; ">//&nbsp;portée&nbsp;locale&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;   echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"&lt;p&gt;x - </span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; ">&lt;/p&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"x =&nbsp;</span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; ">&lt;/p&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Le mot clé global" class="contenuChapitre">
    <h1>Le mot clé global</h1>
    <p>Le mot clé <code>global</code> est utilisé pour accéder à une variable globale à partir d'une fonction</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var3</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">function&nbsp;f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;global&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; ">$var3</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var3</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var3</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
    <p>PHP stocke également toutes les variables globales dans un tableau appelé <code>$GLOBALS[indice]</code>. L’indice contient le nom de la variable. Ce tableau est également accessible depuis les fonctions et peut être utilisé pour mettre à jour directement les variables globales</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$var3</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">function&nbsp;f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$GLOBALS</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#00c4c4; background:#281800; ">'var3'</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#ffffff; background:#281800; ">$GLOBALS</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#00c4c4; background:#281800; ">'var1'</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#ffffff; background:#281800; ">$GLOBALS</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#00c4c4; background:#281800; ">'var2'</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">echo&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var3</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">&nbsp;</span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Le mot clé statique" class="contenuChapitre">
    <h1>Le mot clé statique</h1>
    <p>Lorsqu'une fonction est terminée/exécutée, toutes ses variables sont supprimées. Cependant, nous voulons parfois qu'une variable locale ne soit pas supprimée</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">function&nbsp;f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;static&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;  echo&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"var1 =&nbsp;</span><span style="color:#00c4c4; background:#281800; ">$var1</span><span style="color:#00c4c4; background:#281800; ">"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;  </span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Echo" class="contenuChapitre">
    <h1><code>echo</code></h1>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;h2&gt;texte1&lt;/h2&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"I'enjeu&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"un"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"deux "</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"trois "</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"quatre"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"cinq six sept ."</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$txt1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$txt2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"le monde "</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">17</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">77</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;h1&gt;"</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$txt1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;/h1&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$txt2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">"x="</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Exercice 1" class="contenuChapitre">
    <h1>Exercice 1</h1>
    <p>Codez un script permettant de calculer la somme, soustraction, division, multiplication de deux variables</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">5</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">*</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Print" class="contenuChapitre">
    <h1><code>print</code></h1>
    <p>L'instruction print peut être utilisée avec ou sans parenthèses</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">5</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">*</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$z</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">'&lt;br&gt;'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span> 
</pre>
</section>

<section id="Types de données" class="contenuChapitre">
    <h1>Types de données</h1>
    <h2><code>String</code></h2>
    <p>On peut utiliser des guillemets simples ou doubles</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$txt1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour   "</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$txt2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">'Monde '</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$txt1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$txt2</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
    <h2><code>Integer</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">var_dump</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
    <p>La fonction PHP <code>var_dump()</code> renvoie le type et la valeur des données</p>
    <h2><code>Float</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#009f00; background:#281800; ">7.5</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">var_dump</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
    <h2><code>Boolean</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#0f4d75; background:#281800; ">true</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#0f4d75; background:#281800; ">false</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">var_dump</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"x="</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
    <h2><code>Tableau</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$cars</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"BMW"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"FORD"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"CITROEN"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">var_dump</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$cars</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$cars</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span> 
</pre>


    <h2><code>Objet</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">class</span><span style="color:#ffffff; background:#281800; "> Personne</span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">public</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$nom</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">public</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$prenom</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">public</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">function</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">__construct</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$nom</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$prenom</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$</span><span style="color:#e66170; background:#281800; font-weight:bold; ">this</span><span style="color:#d2cd86; background:#281800; ">-&gt;</span><span style="color:#ffffff; background:#281800; ">nom</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$nom</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$</span><span style="color:#e66170; background:#281800; font-weight:bold; ">this</span><span style="color:#d2cd86; background:#281800; ">-&gt;</span><span style="color:#ffffff; background:#281800; ">prenom</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$prenom</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">public</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">function</span><span style="color:#ffffff; background:#281800; "> message</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">return</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"La prsonne est "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$</span><span style="color:#e66170; background:#281800; font-weight:bold; ">this</span><span style="color:#d2cd86; background:#281800; ">-&gt;</span><span style="color:#ffffff; background:#281800; ">nom</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"  "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$</span><span style="color:#e66170; background:#281800; font-weight:bold; ">this</span><span style="color:#d2cd86; background:#281800; ">-&gt;</span><span style="color:#ffffff; background:#281800; ">prenom</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"text1"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$pers1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">new</span><span style="color:#ffffff; background:#281800; "> Personne</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Jacque"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Gardarin"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$pers1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> message</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$pers2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">new</span><span style="color:#ffffff; background:#281800; "> Personne</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Patrick"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Alpha"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$pers2</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> message</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Exercice 2" class="contenuChapitre">
    <h1>Exercice 2</h1>
    <p>Créez un objet de type aliment</p>
    <p>Utilisez les lignes pour instantier l’objet</p>
    <p>Codez une function permettant d’afficher les attributs</p>
    <table>
        <tr>
            <th>Aliment</th>
            <th>Type</th>
            <th>Couleur</th>
        </tr>
        <tr>
            <td>Pomme</td>
            <td>Fruit</td>
            <td>Rouge</td>
        </tr>
        <tr>
            <td>Cerise</td>
            <td>Fruit</td>
            <td>Rouge</td>
        </tr>
        <tr>
            <td>Banane</td>
            <td>Fruit</td>
            <td>Jaune</td>
        </tr>
        <tr>
            <td>Navet</td>
            <td>Legume</td>
            <td>Blanc</td>
        </tr>
        <tr>
            <td>Tomate</td>
            <td>Fruit</td>
            <td>Rouge</td>
        </tr>
        <tr>
            <td>Carotte</td>
            <td>Legume</td>
            <td>Orange</td>
        </tr>
        <tr>
            <td>Laitue</td>
            <td>Legume</td>
            <td>Vert</td>
        </tr>
        <tr>
            <td>Citron</td>
            <td>Fruit</td>
            <td>Jaune</td>
        </tr>
        <tr>
            <td>Lime</td>
            <td>Fruit</td>
            <td>Vert</td>
        </tr>
        <tr>
            <td>Choux de bruxelles</td>
            <td>Legume</td>
            <td>Vert</td>
        </tr>
        <tr>
            <td>Ketchup</td>
            <td>Condiment</td>
            <td>Rouge</td>
        </tr>
        <tr>
            <td>Ketchup</td>
            <td>Condiment</td>
            <td>Jaune</td>
        </tr>
    </table>
</section>

<section id="Null" class="contenuChapitre">
    <h1><code>null</code></h1>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour "</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#007d45; background:#281800; ">null</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">var_dump</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"x =  "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">" "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$y</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">" text1"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Fonctions de chaîne" class="contenuChapitre">
    <h1>Fonctions de chaîne</h1>
    <h2><code>strlen()</code></h2>
    <p>Renvoie la longueur d'une chaîne</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">strlen</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"bon"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>

    <h2><code>str_word_count()</code></h2>
    <p>Compte le nombre de mots dans une chaîne</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">str_word_count</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"bonjour le monde"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>

    <h2><code>strrev()</code></h2>
    <p>Inverse une chaîne</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">strrev</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"bonjour le monde"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>

    <h2><code>strpos()</code></h2>
    <p>Rrecherche un texte spécifique dans une chaîne. Si une correspondance est trouvée, la fonction renvoie la position du caractère de la première correspondance. Si aucune correspondance n'est trouvée, il renverra <code>false</code></p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">strpos</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"bonjour le monde"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"monde"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">strpos</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"bonjour le monde"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"la"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>

    <h2><code>str_replace()</code></h2>
    <p>Remplace certains caractères par d'autres caractères dans une chaîne</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">str_replace</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Bonjour"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonsoir"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour le monde"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
</section>

<section id="Fonctions mathématiques" class="contenuChapitre">
    <h1>Fonctions mathématiques</h1>
    <p>PHP a un ensemble de fonctions mathématiques qui vous permet d'effectuer des tâches mathématiques sur des nombres</p>
    <h2><code>pi()</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#e66170; background:#281800; font-weight:bold; ">pi</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">print</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">pi</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

    <h2><code>min()</code> et <code>max()</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#e66170; background:#281800; font-weight:bold; ">min</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">17</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">  </span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#e66170; background:#281800; font-weight:bold; ">max</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">17</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; ">  </span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>

    <h2><code>abs()</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#e66170; background:#281800; font-weight:bold; ">abs</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">print</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">abs</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>

    <h2><code>sqrt()</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#e66170; background:#281800; font-weight:bold; ">sqrt</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#008c00; background:#281800; ">9</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#e66170; background:#281800; font-weight:bold; ">sqrt</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">9</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span></pre>
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