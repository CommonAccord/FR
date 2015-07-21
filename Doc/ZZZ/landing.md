Model.Root=<body style="margin:40;padding:0"><p align="center">{Logo}</p>{Table.sec}

Logo=<img src="visual/cmacc-trans.png" style="width:25%" />

Table.sec=<table><tr><td width="60%">{IntroContent}</td><td> &emsp; </td><td valign="top">{TwitterBlock.sec}<br> {ListOfSites.sec}</td></tr></table>

IntroContent={Introduction.sec}<br><br>{DocumentsFolder.sec}<br><br>{PageSource.sec}

DocumentsFolder.sec=<a href="index.php?action=list&file=/">Folder with all the documents.</a>

//We draw from a common list, hosted at GitHub:

=[?https://raw.githubusercontent.com/CommonAccord/Site-Org/master/Doc/Website/ListOfCommonAccordWebsites.md]

Introduction.sec={Phase1}<br><br>{Phase2}<br><br>{Phase3}<br><br>{Phase3Plus}<br><br>{AuthorLien}<br><br>{Exemple.sec}<br><br>{CodeCivil3.0}

Phase1=La première phase de l’informatisation juridique a consisté à stocker les textes sous une forme numérique, permettant simplement de les consulter.

Phase2=Une deuxième phase a entrepris de coder des contenus spécialisés (fiscalité, finances, médecine) pour les  soumettre à des règles et ouvrir la voie à des prises de décision automatisées.

Phase3=Nous entrons depuis peu dans une troisième phase, celle des contrats intelligents « auto exécutoires » : la technologie ne sera plus seulement une aide à la prise de décision, mais également un moyen de faire respecter les règles. Ainsi, les systèmes de Gestion des Droits Numériques intègrent-t-ils les règles légales du droit d’auteur dans des dispositifs techniques de protection. Les contrats intelligents éliminent toute ambiguïté d’interprétation, ils ne nécessitent plus l’existence d’un lien de confiance entre les parties, car elles sont assurées d’une exécution conforme à la convention.

Phase3Plus=C’est ainsi que CommonAccord automatise la rédaction de documents juridiques, en créant un modèle global de textes juridiques codifiés semblable aux règles Incoterms pour les transactions commerciales. Les documents sont à ce point modulaires qu’une grande partie du texte n’est plus affiché, laissant aux parties le soin de ne traiter que les seuls points spécifiques, ce qui clarifie les relations. Accessibles en « open source », les textes peuvent être améliorés, prolongés et utilisés par la communauté. Ce système permet d’envisager la création dynamique de contrats intelligents sophistiqués et hautement personnalisés, automatiquement restituables dans un document juridique exécutoire entre les parties.

AuthorLien=<a href="https://github.com/jjveron">( Introduction par jjveron )</a>

Exemple.sec=Exemple (Cliquer ensuite sur Source et Edit pour visualiser les détails) : <a href="http://www.commonaccord.org/index.php?action=doc&file=/FR/AdC/CNRS_AdC_Demo.md">Accord de confidentialité</a>

CodeCivil3.0=Vers un <a href="http://bitly.com/1DWGTxs">Code Civil 3.0</a>

=[?https://raw.githubusercontent.com/CommonAccord/Site-Org/master/Doc/Website/ListOfCommonAccordWebsites.md]
