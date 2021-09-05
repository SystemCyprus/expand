<section id="Constantes" class="contenuChapitre">
    <h1>Constantes</h1>
    <p>La valeur d'une constante ne peut pas être modifiée pendant le script.</p>
    <p>Les constantes sont globales sur l'ensemble du script.</p>
    <h2>Syntaxe</h2>
    <h2><code>define(nom, valeur, c-i)</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#e66170; background:#281800; font-weight:bold; ">define</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">nom</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; ">&nbsp;valeur</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; ">&nbsp;c</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#ffffff; background:#281800; ">i</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <p>c-i: Spécifie si le nom de la constante, insensible à la casse. La valeur par défaut est false</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">define</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"bonjour"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> txt</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span> 
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">define</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"TXT"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#0f4d75; background:#281800; ">true</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> txt</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span> 
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">define</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"TXT"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> txt</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span> 
</pre>
    <p>Warning: Use of undefined constant txt - assumed 'txt' (this will throw an Error in a future version of PHP) in C:\xampp\htdocs\Pr1\test3.php on line 3txt</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">define</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Personne"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"Jean"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"Patrick"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#00c4c4; background:#281800; ">"Gardarin"</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> Personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <p>Une constante définie en dehors de la fonction
    </p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">define</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"texte"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">function</span><span style="color:#ffffff; background:#281800; "> f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> txt</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Expressions conditionnelles" class="contenuChapitre">
    <h1>Expressions conditionnelles</h1>
    <h2><code>if</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">condition</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp; Code à exécuter si la condition est vraie</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Entier negatif"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>if..else</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">condition</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;Code à exécuter si la condition est vraie</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">else</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;Code à exécuter si la condition est fausse</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Entier negatif"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">else</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"null ou positif"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>if...elseif...else</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">condition</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si cette condition est vraie</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">elseif</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">condition</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si la première condition est fausse et cette condition est vraie </span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">else</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si toutes les conditions sont fausses</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Entier negatif"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">elseif</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$X</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">" positif"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">else</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"null"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Exercice 1" class="contenuChapitre">
    <h1>Exercice 1</h1>
    <p>Codez un script permettant de résoudre une équation premier degré</p>
    <p>2 * x = 3<br>
        La solution x = 3 / 2<br>
        a*x=b<br>
        La solution: x = b / a</p>
</section>
<section id="Exercice 2" class="contenuChapitre">
    <h1>Exercice 2</h1>
    <p>Codez un script permettant de résoudre une équation deuxième degré</p>
    <p>inserer exemple equation 2é degré</p>
</section>
<section id="Switch" class="contenuChapitre">
    <h1><code>switch</code></h1>
    <p>L'instruction switch est utilisée pour effectuer différentes actions en fonction de différentes conditions</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">switch</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">x</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;case&nbsp;</span><span style="color:#e34adc; background:#281800; ">e1</span><span style="color:#b060b0; background:#281800; ">:</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si x</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">e1</span>
    <span style="color:#ffffff; background:#281800; ">&nbsp; &nbsp;&nbsp;    </span><span style="color:#e66170; background:#281800; font-weight:bold; ">break</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;  case&nbsp;</span><span style="color:#e34adc; background:#281800; ">e2</span><span style="color:#b060b0; background:#281800; ">:</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si x</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">e2</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">break</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp; case&nbsp;</span><span style="color:#e34adc; background:#281800; ">e3</span><span style="color:#b060b0; background:#281800; ">:</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si x</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; ">e3</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp; </span><span style="color:#e66170; background:#281800; font-weight:bold; ">break</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp; &nbsp; </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp; &nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">default</span><span style="color:#b060b0; background:#281800; ">:</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;      code à exécuter si x est différent de toutes les etiquettes</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Boucles" class="contenuChapitre">
    <h1>Boucles</h1>
    <h2><code>while</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">    <span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">condition</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter si cette condition est vraie</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"var1= </span><span style="color:#00c4c4; background:#281800; ">$var1</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"x= </span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>do while</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#e66170; background:#281800; font-weight:bold; ">do</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp; code à exécuter si cette condition est vraie</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">condition</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">10</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">do</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"x= </span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>for</code></h2>
    <pre style="color:#d1d1d1;background:#000000;">    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">initialisation</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> test</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> incrementation</span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#ffffff; background:#281800; ">décrémentation</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp; code à exécuter à chaque itération</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">11</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;</span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>foreach</code></h2>
    <p>La boucle foreach ne fonctionne que sur les tableaux et est utilisée pour parcourir chaque paire clé/valeur d'un tableau</p>
    <p>Pour chaque itération de boucle, la valeur de l'élément de tableau actuel est affectée à <code>$value</code> et le pointeur de tableau est déplacé d'une unité, jusqu'à ce qu'il atteigne le dernier élément du tableau</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$Tableau</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">3</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">4</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">foreach</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$Tableau</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">as</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$value</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"</span><span style="color:#00c4c4; background:#281800; ">$value</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$alimentID</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Pomme"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"1"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Tomate"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"2"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Avocat"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"3"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">foreach</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$alimentID</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">as</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$val</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; ">    </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"</span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; "> = </span><span style="color:#00c4c4; background:#281800; ">$val</span><span style="color:#00c4c4; background:#281800; ">&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>break</code></h2>
    <p>L'instruction break peut également être utilisée pour sortir d'une boucle</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">10</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">4</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">break</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"var= </span><span style="color:#00c4c4; background:#281800; ">$var1</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">10</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">3</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">break</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"x= </span><span style="color:#00c4c4; background:#281800; ">$x</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>continue</code></h2>
    <p>L'instruction continue interrompt une itération (dans la boucle), si une condition spécifiée se produit, et continue avec l'itération suivante dans la boucle</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">if</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">continue</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"var1= </span><span style="color:#00c4c4; background:#281800; ">$var1</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Exercice 3" class="contenuChapitre">
    <h1>Exercice 3</h1>
    <p>Afficher tous les nombres impairs qui sont supérieurs à 5</p>
    <p><strong>NB.</strong> nombres doivent être affichés les uns au-dessous des autres</p>
</section>
<section id="Les fonctions" class="contenuChapitre">
    <h1>Les fonctions</h1>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#ffffff; background:#281800; ">function&nbsp;nomfonction</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;code à exécuter </span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
    <p>Un nom de fonction doit commencer par une lettre ou un trait de soulignement. Les noms de fonction ne sont PAS sensibles à la casse</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">function</span><span style="color:#ffffff; background:#281800; "> f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour le monde"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">function</span><span style="color:#ffffff; background:#281800; "> bonjour</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour </span><span style="color:#00c4c4; background:#281800; ">$var1</span><span style="color:#00c4c4; background:#281800; ">.&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">bonjour</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Bob"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">bonjour</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Petter"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">function</span><span style="color:#ffffff; background:#281800; "> f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$var1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$var2</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour </span><span style="color:#00c4c4; background:#281800; ">$var1</span><span style="color:#00c4c4; background:#281800; ">  </span><span style="color:#00c4c4; background:#281800; ">$var2</span><span style="color:#00c4c4; background:#281800; "> &lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Petter"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Gardarin"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">f</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Jacquee"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Alpha"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Créer un tableau en PHP" class="contenuChapitre">
    <h1>Créer un tableau en PHP</h1>
    <p>En PHP, la fonction <code>array()</code> permet de créer un tableau</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">7</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">count</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Pomme"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"cerise"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"banane"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Aliment"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">""</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">", "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">" et "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"."</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Exercice 4" class="contenuChapitre">
    <h1>Exercice 4</h1>
    <p>Codez un script permettant de créer le tableau aliment</p>
    <p>Utilisez une boucle for pour parcourir et imprimer toutes les valeurs du tableau indexé</p>
    <ul>
        <li>pomme</li>
        <li>orange</li>
        <li>cerise</li>
        <li>banane</li>
        <li>navet</li>
        <li>tomate</li>
        <li>carotte</li>
        <li>laitue</li>
        <li>citron</li>
        <li>lime</li>
        <li>chou de Bruxelles</li>
        <li>ketchup</li>
        <li>relish</li>
    </ul>
</section>
<section id="Tableaux associatifs" class="contenuChapitre">
    <h1>Tableaux associatifs</h1>
    <p>Les tableaux associatifs sont des tableaux qui utilisent des clés</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Pomme"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"Rouge"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Cerise"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"Rouge"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Banna"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"jaune"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Couleur pomme "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#00c4c4; background:#281800; ">'Pomme'</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">""</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

</section>
<section id="Exercice 5" class="contenuChapitre">
    <h1>Exercice 5</h1>
    <p>Codez un script permettant de créer un tableau associatif aliment</p>
    <p>Utilisez une boucle foreach pour parcourir et imprimer toutes les valeurs du tableau indexé</p>
    <h3><code>index</code></h3>
    <div class="deuxBoites">
        <ul>
            <li>Pomme</li>
            <li>Orange</li>
            <li>Cerise</li>
            <li>Banane</li>
            <li>Navet</li>
            <li>Tomate</li>
            <li>Carotte</li>
            <li>Laitue</li>
            <li>Citron</li>
            <li>Lime</li>
            <li>Chou de bruxelles</li>
            <li>Ketchup</li>
            <li>Reliche</li>
        </ul>
        <ul>
            <li>Fruit</li>
            <li>Fruit</li>
            <li>Fruit</li>
            <li>Fruit</li>
            <li>Legume</li>
            <li>Fruit</li>
            <li>Legume</li>
            <li>Legume</li>
            <li>citron</li>
            <li>Fruit</li>
            <li>Fruit</li>
            <li>Condiment</li>
            <li>Condiment</li>
        </ul>
    </section>
</section>
<section id="Tableaux multidimensionnels" class="contenuChapitre">
    <h1>Tableaux multidimensionnels</h1>
    <p>Un tableau multidimensionnel est un tableau contenant un ou plusieurs tableaux</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Patrick"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#008c00; background:#281800; ">34</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Jacque"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#009f00; background:#281800; ">0.88</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#008c00; background:#281800; ">40</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Petter"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#009f00; background:#281800; ">0.99</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#008c00; background:#281800; ">50</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Gardarin"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#009f00; background:#281800; ">0.78</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#008c00; background:#281800; ">22</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">": Taille: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">", Poids: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">".&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">": Taille: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">", Poids: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">".&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">": Taille: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">", Poids: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">".&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">3</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">": Taille: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">3</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">1</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">", Poids: "</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$personne</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">3</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">".&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Exercice 7" class="contenuChapitre">
    <h1>Exercice 7</h1>
    <p>Codez un script permettant de créer un tableau multidimensionnel aliment</p>
    <p>Utilisez une boucle for pour parcourir et imprimer toutes les valeurs du tableau sous forme de liste</p>
    <div class="deuxBoites">
        <div>
            <dl>
                <dt>Aliment 0</dt>
                <dd>Pomme</dd>
                <dd>Fruit</dd>
                <dd>Rouge</dd>
            </dl>
            <dl>
                <dt>Aliment 0</dt>
                <dd>Orange</dd>
                <dd>Fruit</dd>
                <dd>Orange</dd>
            </dl>
            <dl>
                <dt>Aliment 0</dt>
                <dd>Cerise</dd>
                <dd>Fruit</dd>
                <dd>Rouge</dd>
            </dl>
            <dl>
                <dt>Aliment 0</dt>
                <dd>Banana</dd>
                <dd>Fruit</dd>
                <dd>Jaune</dd>
            </dl>
        </section>
        <div>
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
    </section>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Pomme"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"fruit"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Vert"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Orange"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Fruite"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Orange"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Cerise"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Fruit"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Rouge"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Banane"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Fruit"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#00c4c4; background:#281800; ">"Jaune"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">4</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;p&gt;&lt;b&gt;Aliment </span><span style="color:#00c4c4; background:#281800; ">$i</span><span style="color:#00c4c4; background:#281800; ">&lt;/b&gt;&lt;/p&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;ul&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$j</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$j</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">3</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$j</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;li&gt;"</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; ">$aliment</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#ffffff; background:#281800; ">$j</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#00c4c4; background:#281800; ">"&lt;/li&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;/ul&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

</section>
<section id="Tableaux de tri" class="contenuChapitre">
    <h1>Tableaux de tri</h1>
    <h2><code>sort()</code></h2>
    <p>Trie les tableaux dans l'ordre croissant</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"beta"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"gama"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"alpha"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">sort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$longueur</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">count</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$longueur</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>rsort()</code></h2>
    <p>Trie les tableaux dans l'ordre décroissant</p>
    <h2><code>asort()</code></h2>
    <p>Trie un tableau associatif par ordre croissant, selon la valeur</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Peter"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"47"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Ben"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"37"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Joe"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"43"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">asort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">foreach</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">as</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Key="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">", Value="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>ksort()</code></h2>
    <p>Trie un tableau associatif par ordre croissant, selon la clé</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Peter"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"35"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Ben"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"37"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Joe"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"43"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">ksort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">foreach</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">as</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Key="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">", Value="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>arsort()</code></h2>
    <p>Trie un tableau associatif par ordre décroissant, selon la valeur</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Peter"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"35"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Ben"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"37"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Joe"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"43"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">arsort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">foreach</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">as</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Key="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">", Value="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>krsort()</code></h2>
    <p>Trie un tableau associatif par ordre décroissant, selon la clé</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Peter"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"35"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Ben"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"37"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Joe"</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#00c4c4; background:#281800; ">"43"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#e66170; background:#281800; font-weight:bold; ">krsort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#e66170; background:#281800; font-weight:bold; ">foreach</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$age</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">as</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Key="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">", Value="</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x_value</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Exercice 8" class="contenuChapitre">
    <h1>Exercice 8</h1>
    <p>Codez un script permettant de trier un tableau d’entiers par ordre croissant</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">74</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">15</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">22</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">-</span><span style="color:#008c00; background:#281800; ">11</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">sort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$longueur</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">count</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$longueur</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$tableau</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#ffffff; background:#281800; ">$i</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

</section>
<section id="Exercice 9" class="contenuChapitre">
    <h1>Exercice 9</h1>
    <p>Codez un script permettant de trier un tableau d’entiers par ordre décroissant</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$numbers</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">array</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#008c00; background:#281800; ">4</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">6</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">2</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">22</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">11</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">rsort</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$numbers</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$arrlength</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">count</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$numbers</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">for</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#008c00; background:#281800; ">0</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$arrlength</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">+</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$numbers</span><span style="color:#d2cd86; background:#281800; ">[</span><span style="color:#ffffff; background:#281800; ">$x</span><span style="color:#d2cd86; background:#281800; ">]</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

</section>
<section id="Exercice 10" class="contenuChapitre">
    <h1>Exercice 10</h1>
    <p>Codez un script permettant de trier un tableau d’aliment par par ordre alphabétique décroissant</p>
    <ul>
        <li>Pomme</li>
        <li>Orange</li>
        <li>Cerise</li>
        <li>Banane</li>
        <li>Navet</li>
        <li>Tomate</li>
        <li>Carotte</li>
        <li>Laitue</li>
        <li>Citron</li>
        <li>Lime</li>
        <li>Chou de bruxelles</li>
        <li>Ketchup</li>
        <li>Reliche</li>
    </ul>
</section>
<section id="Exercice 11" class="contenuChapitre">
    <h1>Exercice 11</h1>
    <p>Codez un script permettant de</p>
    <ul>
        <li>Trier un tableau associatif d’aliment par ordre alphabétique décroissant selon la clé</li>
        <li>Trier un tableau associatif d’aliment par ordre alphabétique décroissant selon la valeur</li>
    </ul>
    <div class="deuxBoites">
        <dl>
            <dt>Clé</dt>
            <dd>Pomme</dd>
            <dd>Orange</dd>
            <dd>Cerise</dd>
            <dd>Banane</dd>
            <dd>Navet</dd>
            <dd>Tomate</dd>
            <dd>Carotte</dd>
            <dd>Laitue</dd>
            <dd>Citron</dd>
            <dd>Lime</dd>
            <dd>Chou de bruxelles</dd>
            <dd>Ketchup</dd>
            <dd>Reliche</dd>
        </dl>
        <dl>
            <dt>Valeur
            <dt></dt>
            <dd>Fruit</li>
            <dd>Fruit</dd>
            <dd>Fruit</dd>
            <dd>Fruit</dd>
            <dd>Legume</dd>
            <dd>Fruit</dd>
            <dd>Legume</dd>
            <dd>Legume</dd>
            <dd>citron</dd>
            <dd>Fruit</dd>
            <dd>Fruit</dd>
            <dd>Condiment</dd>
            <dd>Condiment</dd>
        </dl>
    </section>
</section>
<section id="Dates" class="contenuChapitre">
    <h1>Dates</h1>
    <p>La fonction php <code>date()</code> formate un la date et l’heure plus lisibles</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Date  "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">date</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Y/m/d"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Date "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">date</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Y.m.d"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Date "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">date</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Y-m-d"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Date "</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">date</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"l"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">date</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Y"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
</section>
<section id="Inclure les fichiers" class="contenuChapitre">
    <h1>Inclure les fichiers</h1>
    <p>L'instruction include (ou require) prend tout le texte/code/balisage qui existe dans le fichier spécifié et le copie dans le fichier qui utilise l'instruction include</p>

    <pre style="color:#d1d1d1;background:#000000;">file<span style="color:#00a800;">.</span>php
<span style="color:forestgreen; background:#281800; text-decoration: line-through;">&lt;?php</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; text-decoration: line-through;">include</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">'foot.php'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;">foot<span style="color:#00a800; ">.</span>php
<span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;p&gt;Copyright &amp;copy; 2021-"</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">date</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"Y"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">" Rosemont &lt;/p&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;">data<span style="color:#00a800; ">.</span>php
<span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$color</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">'red'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$car</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">'BMW'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <pre style="color:#d1d1d1;background:#000000;">afficher<span style="color:#00a800; ">.</span>php
<span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">include</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">'data.php'</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"I have a </span><span style="color:#00c4c4; background:#281800; ">$color</span><span style="color:#00c4c4; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">$car</span><span style="color:#00c4c4; background:#281800; ">."</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>require</code></h2>
    <p>L'instruction require est également utilisée pour inclure un fichier dans le code PHP. Cependant, il y a une grande différence entre include et require ; lorsqu'un fichier est inclus avec l'instruction include et que PHP ne le trouve pas, le script continuera à s'exécuter</p>
</section>
<section id="La gestion des fichiers" class="contenuChapitre">
    <h1>La gestion des fichiers</h1>
    <p>PHP a plusieurs fonctions pour créer, lire, télécharger et éditer des fichiers</p>
    <h2><code>readfile()</code></h2>
    <p>La fonction <code>readfile()</code> lit un fichier et l'écrit dans le tampon de sortie</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">readfile</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file1.txt"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>fopen()</code></h2>
    <p>Une <strong>meilleure méthode</strong> pour ouvrir des fichiers est d'utiliser la fonction <code>fopen()</code></p>
    <p>Cette fonction offre plus d'options que la fonction <code>readfile()</code></p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fopen</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file1.txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"r"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">or</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">die</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">" ouverture impossible "</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fread</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#e66170; background:#281800; font-weight:bold; ">filesize</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file1.txt"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fclose</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <p>Le premier paramètre de <code>fopen()</code> contient le nom du fichier à ouvrir et le second paramètre spécifie dans quel mode le fichier doit être ouvert</p>
    <p>La fonction <code>fclose()</code> est utilisée pour fermer un fichier ouvert</p>
    <h2><code>fgets()</code></h2>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    
    <span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fopen</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file1.txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"r"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">or</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">die</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"impossible"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fgets</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fclose</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <p>Après un appel à la fonction fgets(), le pointeur de fichier est passé à la ligne suivante</p>
    <h2><code>feof()</code></h2>
    <p>La fonction <code>feof()</code> vérifie si la "fin de fichier" (EOF) a été atteinte</p>

    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fopen</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file1.txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"r"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">or</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">die</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"impossible"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">!</span><span style="color:#e66170; background:#281800; font-weight:bold; ">feof</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fgets</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">.</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"&lt;br&gt;"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fclose</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>
    <h2><code>fgetc()</code></h2>
    <p>La fonction <code>fgetc()</code> est utilisée pour lire un seul caractère d'un fichier</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>
    
    <span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fopen</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file1.txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"r"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">or</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">die</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">" impossible!"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">while</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#d2cd86; background:#281800; ">!</span><span style="color:#e66170; background:#281800; font-weight:bold; ">feof</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span>
    <span style="color:#b060b0; background:#281800; ">{</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fgetc</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#b060b0; background:#281800; ">}</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fclose</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

    <p>Après un appel à la fonction <code>fgetc()</code>, le pointeur de fichier passe au caractère suivant</p>
</section>
<section id="Créer un fichier" class="contenuChapitre">
    <h1>Créer un fichier</h1>
    <p>La fonction <code>fopen()</code> est également utilisée pour créer un fichier</p>
    <h2><code>fwrite()</code></h2>
    <p>Est utilisée pour écrire dans un fichier</p>
    <p>Le premier paramètre de fwrite() contient le nom du fichier dans lequel écrire et le second paramètre est la chaîne à écrire</p>
    <pre style="color:#d1d1d1;background:#000000;"><span style="color:forestgreen; background:#281800; ">&lt;?php</span><span style="color:#ffffff; background:#281800; "></span>

    <span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">fopen</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"file2.txt"</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"w"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">or</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">die</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#00c4c4; background:#281800; ">"impossible"</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$ligne</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"Bonjour</span><span style="color:#008080; background:#281800; ">\n</span><span style="color:#00c4c4; background:#281800; ">"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fwrite</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$ligne</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">$ligne</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#00c4c4; background:#281800; ">"le monde</span><span style="color:#008080; background:#281800; ">\n</span><span style="color:#00c4c4; background:#281800; ">"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fwrite</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">,</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#ffffff; background:#281800; ">$ligne</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">fclose</span><span style="color:#d2cd86; background:#281800; ">(</span><span style="color:#ffffff; background:#281800; ">$fichier</span><span style="color:#d2cd86; background:#281800; ">)</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#e66170; background:#281800; font-weight:bold; ">echo</span><span style="color:#00c4c4; background:#281800; ">"Fin"</span><span style="color:#b060b0; background:#281800; ">;</span><span style="color:#ffffff; background:#281800; "></span>
<span style="color:forestgreen; background:#281800; ">?&gt;</span>
</pre>

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