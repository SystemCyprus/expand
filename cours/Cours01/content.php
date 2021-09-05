<section id="HTML" class="contenuChapitre">
    <h1 onClick="">HTML (Hypertext Markup Language)</h1>
    <p>Structurer de documents comme en-têtes, paragraphes, listes, etc. pour faciliter le partage d'informations scientifiques entre chercheurs. </p>
    <pre style="color:#d1d1d1;background:#000000;">
    <span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#d2cd86; background:#281800; ">!</span><span style="color:#e66170; background:#281800; font-weight:bold; ">DOCTYPE</span><span style="color:#ffffff; background:#281800; "> html</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; ">html</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; ">head</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; ">meta charset</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">"utf-8"</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">link</span><span style="color:#ffffff; background:#281800; "> rel</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">"stylesheet"</span><span style="color:#ffffff; background:#281800; "> </span><span style="color:#e66170; background:#281800; font-weight:bold; ">type</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">"text/css"</span><span style="color:#ffffff; background:#281800; "> href</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">"style.css"</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#e66170; background:#281800; font-weight:bold; ">title</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#e66170; background:#281800; font-weight:bold; ">title</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#ffffff; background:#281800; ">head</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; ">body</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#ffffff; background:#281800; ">script </span><span style="color:#e66170; background:#281800; font-weight:bold; ">type</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">"text/javascript"</span><span style="color:#ffffff; background:#281800; "> src</span><span style="color:#d2cd86; background:#281800; ">=</span><span style="color:#00c4c4; background:#281800; ">"script.js"</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#ffffff; background:#281800; ">script</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
    <span style="color:#ffffff; background:#281800; ">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color:#d2cd86; background:#281800; ">&lt;</span><span style="color:#d2cd86; background:#281800; ">/</span><span style="color:#ffffff; background:#281800; ">body</span><span style="color:#d2cd86; background:#281800; ">&gt;</span><span style="color:#ffffff; background:#281800; "></span>
</pre>
</section>
<section id="Balise d'en-tête" class="contenuChapitre">
    <h1><code>&#x3C;h&#x3E;&#x3C;/h&#x3E;</code></h1>
    <p>
        Le navigateur ajoute une ligne avant et une ligne après le titre.
    </p>
    <p class="codepen" data-height="437" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="yLMPvWR" style="height: 437px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Balises d'en-tête"><span>See the Pen <a href="https://codepen.io/c64ren/pen/yLMPvWR">
                Balises d'en-tête</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Balise Paragraph" class="contenuChapitre">
    <h1><code>&#x3C;p&#x3E;&#x3C;/p&#x3E;</code></h1>
    <p>
        Un moyen de structurer votre texte en différents paragraphes.
    </p>
    <p class="codepen" data-height="204" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="vYxWdWO" style="height: 204px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="La balise Paragraph"><span>See the Pen <a href="https://codepen.io/c64ren/pen/vYxWdWO">
                La balise Paragraph</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Balise Line Break" class="contenuChapitre">
    <h1><code>&#x3C;br&#x3E;</code></h1>
    <p>
        Commence à partir de la ligne suivante
    </p>
    <p class="codepen" data-height="216" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="KKWyQoQ" style="height: 216px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="La balise Line Break"><span>See the Pen <a href="https://codepen.io/c64ren/pen/KKWyQoQ">
                La balise Line Break</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Centrage du contenu" class="contenuChapitre">
    <h1><code>&lt;center&gt;</code></h1>
    <p>
        Vous pouvez utiliser la balise <code>&lt;center&gt;</code> pour placer n'importe quel contenu au centre de la page ou dans n'importe quelle cellule du tableau.
    </p>
    <p class="codepen" data-height="265" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="OJpOvbQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="OJpOvbQ"><span>See the Pen <a href="https://codepen.io/c64ren/pen/OJpOvbQ">
                Centrage du contenu</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>)on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Ligne horizontale" class="contenuChapitre">
    <h1><code>&#x3C;hr&#x3E;</code></h1>
    <p class="codepen" data-height="208" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="ExWbEmj" style="height: 208px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Ligne horisontale"><span>See the Pen <a href="https://codepen.io/c64ren/pen/ExWbEmj">
                Ligne horisontale</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Conserver la mise en forme" class="contenuChapitre">
    <h1><code>&#x3C;pre&#x3E;&#x3C;/pre&#x3E;</code></h1>
    <p>Tout texte entre la balise d'ouverture <code>&#x3C;pre&#x3E;</code> et la balise de fermeture <code>&#x3C;/pre&#x3E;</code> conservera le formatage du document source. </p>
    <p class="codepen" data-height="161" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="ExWbEwV" style="height: 161px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Conserver la mise en forme"><span>See the Pen <a href="https://codepen.io/c64ren/pen/ExWbEwV">
                Conserver la mise en forme </a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>)on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Nonbreaking spaces" class="contenuChapitre">
    <h1><code>&#x26;nbsp;</code></h1>
    <p>Là où vous ne voulez pas que le navigateur client coupe le texte, vous devez utiliser nonbreaking space entity</p>
    <p class="codepen" data-height="174" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="xxqPWYO" style="height: 174px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Nonbreaking Spaces"><span>See the Pen <a href="https://codepen.io/c64ren/pen/xxqPWYO">
                Nonbreaking Spaces</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Element HTML vide" class="contenuChapitre">
    <h1><code>&#x3C;img/&#x3E; &#x3C;hr/&#x3E; &#x3C;br/&#x3E;</code></h1>
    <p>
        Certains éléments HTML n'ont pas besoin d'être fermés. Ceux-ci sont connus sous le nom d'éléments vides.
    </p>
    <p class="codepen" data-height="242" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="VwprxvX" style="height: 242px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Élément  vide"><span>See the Pen <a href="https://codepen.io/c64ren/pen/VwprxvX">
                Élément vide</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Attribut HTML" class="contenuChapitre">
    <h1><code>attribut=&#x22;valeur&#x22;</code></h1>
    <p>
        Les balises HTML peuvent également avoir des attributs, qui sont des informations supplémentaires.
    </p>
    <p>
        Un attribut est utilisé pour définir les caractéristiques d'un élément HTML et est placé à l'intérieur du balise d'ouverture de l'élément.
    </p>
    <p>
        Tous les attributs sont constitués de deux parties: un nom et une valeur.
    </p>
    <p>
        Les noms d'attribut et les valeurs d'attribut ne sont pas sensibles à la casse.
    </p>
    <p>
        Ci-dessous, <code>align</code> est le nom de l'attribut et les valeurs sont <code>="left"</code> <code>="center"</code> et <code>="right"</code>
    </p>
    <p class="codepen" data-height="288" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="vYxWjGa" style="height: 288px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Attribut HTML"><span>See the Pen <a href="https://codepen.io/c64ren/pen/vYxWjGa">
                Attribut HTML</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Attributs de base" class="contenuChapitre">
    <h1>Attributs de base</h1>
    <p>
        Les quatre attributs de base qui peuvent être utilisés par la majorité des éléments HTML sont:
    </p>
    <p>
        <code>
            id=""<br>
            class=""<br>
            title=""<br>
            style=""<br>
        </code>
    </p>
</section>
<section id="L'attribut Id" class="contenuChapitre">
    <h1><code>id=&#x22;&#x22;</code></h1>
    <p>L'attribut <code>id=&#x22;&#x22;</code> d'une balise HTML peut être utilisé pour identifier de manière unique tout élément dans une page HTML.</p>
    <p>Si un élément porte un attribut <code>id=&#x22;&#x22;</code> comme identifiant unique, il est possible d'identifier uniquement cet élément et son contenu.</p>
    <p>
        Si vous avez deux éléments du même nom dans une page Web (ou une feuille de style), vous pouvez utiliser l'attribut <code>id=&#x22;&#x22;</code> pour distinguer les éléments qui ont le même nom.
    </p>
    <p class="codepen" data-height="170" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="WNpzEJP" style="height: 170px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="L’attribut Id"><span>See the Pen <a href="https://codepen.io/c64ren/pen/WNpzEJP">
                L’attribut Id</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="L'attribut title" class="contenuChapitre">
    <h1><code>title=&#x22;&#x22;</code></h1>
    <p>L'attribut <code>title=&#x22;&#x22;</code> donne un titre suggéré pour l'élément</p>
    <p>C'est souvent affiché sous forme d'infobulle lorsque le curseur survole l'élément.</p>
    <p class="codepen" data-height="168" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="rNydzQx" style="height: 168px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" ata-pen-title="L’attribut title"><span>See the Pen <a href="https://codepen.io/c64ren/pen/rNydzQx">
                L’attribut title</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="L'attribut class" class="contenuChapitre">
    <h1><code>class=&#x22;&#x22;</code></h1>
    <p>L'attribut <code>class=&#x22;&#x22;</code> est utilisé pour associer un élément à une feuille de style et spécifie la classe d'élément.</p>
    <p>
        La valeur de l'attribut peut également être une liste de noms de classe séparés par des espaces. Par example:
    </p>
    <p class="codepen" data-height="204" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="QWpmMzR" style="height: 204px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="L’attribut class"><span>See the Pen <a href="https://codepen.io/c64ren/pen/QWpmMzR">
                L’attribut class</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="L'attribut style" class="contenuChapitre">
    <h1><code>style=&#x22;&#x22;</code></h1>
    <p>
        L'attribut <code>style=&#x22;&#x22;</code> vous permet de spécifier des règles de feuille de style en cascade (CSS) dans l'élément.
    </p>
    <p class="codepen" data-height="164" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="abJYyMp" style="height: 164px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="L’attribut style"><span>See the Pen <a href="https://codepen.io/c64ren/pen/abJYyMp">
                L’attribut style</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="L'attribut d'internationalisation" class="contenuChapitre">
    <h1>L'attribut d'internationalisation</h1>
    <p>
        Il existe trois attributs d'internationalisation:
    </p>
    <p>
        <code>
            dir=""<br>
            lang=""<br>
            xml:lang=""<br>
        </code>
    </p>
</section>
<section id="L'attribut dir" class="contenuChapitre">
    <h1><code>dir=&#x22;&#x22;</code></h1>
    <p>L'attribut dir vous permet d'indiquer au navigateur la direction dans laquelle le texte doit afficher.</p>
    <p>L'attribut dir peut prendre l'une des deux valeurs</p>
    <table>
        <caption>L'attribut dir</caption>
        <tr>
            <th>Valeur</th>
            <th>Signification</th>
        </tr>
        <tr>
            <td><code>="ltr"</code></td>
            <td>De gauche à droite (la valeur par défaut)</td>
        </tr>
        <tr>
            <td><code>="rtl"</code></td>
            <td>De droite à gauche (pour les langues telles que l'arabe ou l'hébreu qui se lisent de droite à gauche)</td>
        </tr>
    </table>
    <p class="codepen" data-height="287" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="oNZqGNp" style="height: 287px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="L’attribut dir"><span>See the Pen <a href="https://codepen.io/c64ren/pen/oNZqGNp">
                L’attribut dir</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
    <p>
        Lorsque l'attribut <code>dir=&#x22;&#x22;</code> est utilisé dans la balise <code>&#x3C;html&#x3E;</code>, il détermine la manière dont le texte sera présenté dans tout le document. Lorsqu'il est utilisé dans une autre balise, il contrôle la direction du texte uniquement pour le contenu de cette balise.
    </p>
</section>
<section id="L'attribut lang" class="contenuChapitre">
    <h1><code>lang=&#x22;&#x22;</code></h1>
    <p>
        L'attribut <code>lang=&#x22;&#x22;</code> vous permet d'indiquer la langue principale utilisée dans un document, mais cet attribut a été conservé en <code>HTML</code> uniquement pour une compatibilité descendante avec les versions antérieures de <code>HTML</code>.
    </p>
    <p>
        Les valeurs de l'attribut <code>lang=&#x22;&#x22;</code> sont des codes de langue à deux caractères standard <code>ISO-639</code>
    </p>
    <p class="codepen" data-height="315" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="RwpMjVP" style="height: 315px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="L’attribut lang"><span>See the Pen <a href="https://codepen.io/c64ren/pen/RwpMjVP">
                L’attribut lang</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
    <p>
        <code>ISO-639</code> pour une liste complète des codes de langue<br>
        <a href="https://www.tutorialspoint.com/html/language_iso_codes.htm">
            https://www.tutorialspoint.com/html/language_iso_codes.htm
        </a></br>
    </p>

</section>
<section id="L'attribut xml:lang" class="contenuChapitre">
    <h1><code>xml:lang=&#x22;&#x22;</code></h1>
    <p>L'attribut <code>xml:lang=&#x22;&#x22;</code> est le remplacement <code>XHTML</code> de l'attribut <code>lang=&#x22;&#x22;</code>. La valeur de l'attribut <code>xml:lang=&#x22;&#x22;</code> doit être un code de pays <code>ISO-639</code></p>
    <p>
        Pour une liste complète des balises HTML et des attributs associés, veuillez consulter la référence<br>
        <a href="https://www.tutorialspoint.com/html/html_tags_ref.htm">https://www.tutorialspoint.com/html/html_tags_ref.htm</a></br>
    </p>
</section>

<section id="Formatage HTML" class="contenuChapitre">
    <h1><code>&#x3C;b&#x3E;&#x3C;/b&#x3E;</code></h1>
    <p>
        Tout ce qui apparaît dans l'élément <code>&#x3C;b&#x3E;&#x3C;/b&#x3E;</code> est affiché en gras
    </p>
    <p class="codepen" data-height="163" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="mdWqjqq" style="height: 163px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte en gras"><span>See the Pen <a href="https://codepen.io/c64ren/pen/mdWqjqq">
                Texte en gras</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte en italique" class="contenuChapitre">
    <h1><code>&#x3C;i&#x3E;&#x3C;/i&#x3E;</code></h1>
    <p>
        Tout ce qui apparaît dans l'élément <code>&#x3C;i&#x3E;&#x3C;/i&#x3E;</code> est affiché en italique
    </p>
    <p class="codepen" data-height="163" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="LYWOBzR" style="height: 163px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte en italique"><span>See the Pen <a href="https://codepen.io/c64ren/pen/LYWOBzR">
                Texte en italique</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte souligné" class="contenuChapitre">
    <h1><code>&#x3C;u&#x3E;&#x3C;/u&#x3E;</code></h1>
    <p>
        Le contenu d'un élément <code>&#x3C;u&#x3E;&#x3C;/u&#x3E;</code> est écrit en indice.
    </p>
    <p class="codepen" data-height="165" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="OJpOwjv" style="height: 165px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte souligné"><span>See the Pen <a href="https://codepen.io/c64ren/pen/OJpOwjv">
                Texte souligné</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte en exposant" class="contenuChapitre">
    <h1><code>&#x3C;sup&#x3E;&#x3C;/sup&#x3E;</code></h1>
    <p>Le contenu d'un élément <code>&#x3C;sup&#x3E;&#x3C;/sup&#x3E;</code> est écrit en exposant</p>
    <p class="codepen" data-height="163" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="VwprBzp" style="height: 163px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte en exposant"><span>See the Pen <a href="https://codepen.io/c64ren/pen/VwprBzp">Texte en exposant</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Exercice 1" class="contenuChapitre">
    <h1>Exercice 1</h1>
    <p>Ecrire un programme HTLM permettant d’afficher la page suivante.</p>
    <p class="codepen" data-height="506" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="oNZoMWz" style="height: 506px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Exercice 1"><span>See the Pen <a href="https://codepen.io/c64ren/pen/oNZoMWz">
                Exercice 1</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte en indice" class="contenuChapitre">
    <h1><code>&#x3C;sub&#x3E;&#x3C;/sub&#x3E;</code></h1>
    <p>
        Le contenu d'un élément <code>&#x3C;sub&#x3E;&#x3C;/sub&#x3E;</code> est écrit en indice.
    </p>
    <p class="codepen" data-height="169" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="eYvejZa" style="height: 169px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte en indice"><span>See the Pen <a href="https://codepen.io/c64ren/pen/eYvejZa">
                Texte en indice</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte plus grand" class="contenuChapitre">
    <h1><code>&#x3C;big&#x3E;&#x3C;/big&#x3E;</code></h1>
    <p>
        Le contenu de l'élément <code>&#x3C;big&#x3E;&#x3C;/big&#x3E;</code> est affiché une taille de police plus grande que le reste du texte qui l'entoure.
    </p>
    <p class="codepen" data-height="171" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="MWpOBKL" style="height: 171px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte plus grand"><span>See the Pen <a href="https://codepen.io/c64ren/pen/MWpOBKL">
                Texte plus grand</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte plus petit" class="contenuChapitre">
    <h1><code>&#x3C;small&#x3E;&#x3C;/small&#x3E;</code></h1>
    <p>
        Le contenu de l'élément <code>&#x3C;small&#x3E;&#x3C;/small&#x3E;</code> est affiché une taille de police plus petite que le reste du texte qui l'entoure
    </p>
    <p class="codepen" data-height="168" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="MWpOBwL" style="height: 168px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Text plus petit"><span>See the Pen <a href="https://codepen.io/c64ren/pen/MWpOBwL">
                Text plus petit</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte accentué" class="contenuChapitre">
    <h1><code>&#x3C;em&#x3E;&#x3C;/em&#x3E;</code></h1>
    <p>
        Tout ce qui apparaît dans l'élément <code>&#x3C;em&#x3E;&#x3C;/em&#x3E;</code> est affiché sous forme de texte mis en valeur.
    </p>
    <p class="codepen" data-height="167" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="MWpOBYZ" style="height: 167px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte accentué"><span>See the Pen <a href="https://codepen.io/c64ren/pen/MWpOBYZ">
                Texte accentué</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte marqué" class="contenuChapitre">
    <h1><code>&#x3C;mark&#x3E;&#x3C;/mark&#x3E;</code></h1>
    <p>
        Tout ce qui apparaît avec l'élément <code>&#x3C;mark&#x3E;&#x3C;/mark&#x3E;</code> est affiché comme marqué à l'encre
    </p>
    <p class="codepen" data-height="167" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="oNZoMgb" style="height: 167px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte marqué"><span>See the Pen <a href="https://codepen.io/c64ren/pen/oNZoMgb">
                Texte marqué</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte fort" class="contenuChapitre">
    <h1><code>&#x3C;strong&#x3E;&#x3C;/strong&#x3E;</code></h1>
    <p>
        Tout ce qui apparaît dans l'élément <code>&#x3C;strong&#x3E;&#x3C;/strong&#x3E;</code> est affiché en tant que texte important.
    </p>
    <p class="codepen" data-height="167" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="dyvZjyM" style="height: 167px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte fort"><span>See the Pen <a href="https://codepen.io/c64ren/pen/dyvZjyM">
                Texte fort</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Terme spécial" class="contenuChapitre">
    <h1><code>&#x3C;dfn&#x3E;&#x3C;/dfn&#x3E;</code></h1>
    <p>
        L'élément <code>&#x3C;dfn&#x3E;&#x3C;/dfn&#x3E;</code> (ou élément de définition HTML) vous permet de spécifier que vous introduisez un terme spécial. Son utilisation est similaire aux mots en italique au milieu d'un paragraphe.
    </p>
    <p class="codepen" data-height="167" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="gOmXKVW" style="height: 167px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Terme spécial"><span>See the Pen <a href="https://codepen.io/c64ren/pen/gOmXKVW">
                Terme spécial</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Citation" class="contenuChapitre">
    <h1><code>&#x3C;q&#x3E;&#x3C;/q&#x3E;</code></h1>
    <p>
        L'élément <code>&#x3C;q&#x3E;&#x3C;/q&#x3E;</code> est utilisé lorsque vous souhaitez ajouter un guillemet double dans une phrase
    </p>
    <p class="codepen" data-height="171" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="vYxWrMK" style="height: 171px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Citation"><span>See the Pen <a href="https://codepen.io/c64ren/pen/vYxWrMK">
                Citation</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Code informatique" class="contenuChapitre">
    <h1><code>&#x3C;code&#x3E;&#x3C;/code&#x3E;</code></h1>
    <p>
        Tout code de programmation devant apparaître sur une page Web doit être placé à l'intérieur des balises <code>&#x3C;code&#x3E;&#x3C;/code&#x3E;</code>
    </p>
    <p class="codepen" data-height="170" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="rNyYKoo" style="height: 170px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Code informatique"><span>See the Pen <a href="https://codepen.io/c64ren/pen/rNyYKoo">
                Code informatique</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Sortie du programme" class="contenuChapitre">
    <h1><code>&#x3C;samp&#x3E;&#x3C;/samp&#x3E;</code></h1>
    <p>
        L'élément <code>&#x3C;samp&#x3E;&#x3C;/samp&#x3E;</code> indique un exemple de sortie d'un programme ou un script, etc.Il est principalement utilisé pour documenter des concepts de programmation ou de codage.
    </p>
    <p class="codepen" data-height="168" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="Vwprdqv" style="height: 168px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Sortie du programme"><span>See the Pen <a href="https://codepen.io/c64ren/pen/Vwprdqv">
                Sortie du programme</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>
<section id="Texte d'adresse" class="contenuChapitre">
    <h1><code>&#x3C;address&#x3E;&#x3C;/address&#x3E;</code></h1>
    <p>
        L'élément <code>&#x3C;address&#x3E;&#x3C;/address&#x3E;</code> est utilisé pour contenir n'importe quelle adresse.
    </p>
    <p class="codepen" data-height="171" data-theme-id="dark" data-default-tab="html" data-user="c64ren" data-slug-hash="KKWyexo" style="height: 171px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Texte d'adresse"><span>See the Pen <a href="https://codepen.io/c64ren/pen/KKWyexo">
                Texte d'adresse</a></br> by c64ren (<a href="https://codepen.io/c64ren">@c64ren</a></br>) on <a href="https://codepen.io">CodePen</a></br>.</span>
    </p>
</section>

<?php include '../bibliographie.php'; ?>