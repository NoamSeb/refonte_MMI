L'URL du site en ligne : 
https://mmi-champs.noamsebahoun.fr

Installation du site sur un autre serveur :

I. Base de donnée

Si sur serveur pour hébergé en ligne
1) Créer une nouvelle base de donnée refonte_MMI ainsi que son identifiant et son mot de passe 
2) Dans phpMyAdmin, importer dans cette base, le fichier "refonte_MMI.sql"

Si serveur local
1) Créer une nouvelle base de donnée refonte_MMI
2) Dans phpMyAdmin, importer dans cette base, le fichier "refonte_MMI.sql"

II. Importer les fichiers

Si sur serveur pour hébergé en ligne
1) Établissez une connexion vers ce serveur avec le logiciel FileZilla
2) Rendre vous le dans le dossier "public_html" et créer un dossier "refonte_mmi"
3) Glisser le code source depuis votre ordinateur jusqu'a dans le dosser "refonte_mmi"

Si serveur local
1) Ouvrez dans l'explorateur de fichier, l'application de serveur local que vous utilisez (ex:XAMPP)
2) Rendrez vous dans le dossier htdocs
3) Créer un dossier "refonte_mmi" et glisser y le code source

III. Connecter le code à la base de donnée

Si sur serveur pour hébergé en ligne
1) Dans le fichier "model.php" regarder la fonction "dbConnect"
2) Il y a dedans une requête SQL qui permet d'établir une connexion avec la base. Changer le nom de la base en le nom que celle-ci porte sur votre phpMyAdmin. A la place de root et root à la fin, mettez l'identifiant relié à la base ainsi que le mot de passe de celui-ci.

Si serveur local
1) Dans le fichier "model.php" regarder la fonction "dbConnect"
2) Il y a dedans une requête SQL qui permet d'établir une connexion avec la base. Changer le nom de la base en le nom que celle-ci porte sur votre phpMyAdmin et laissez root en guise de login et de mot de passe. (il se peut que votre logiciel ne necessite pas de mot de passe, dans ce cas là, laisser le champs de mot de passe(les derniers '')vide.)

IV. L'exploitation

Si serveur hébergé en ligne
1) Créer un sous domaine de votre domaine existant
2) Relié ce sous dommaine à /public_html/refonte_mmi/
3) tappez votre sous domaine dans votre barre d'URL et si tout est bon, vous devriez arriver sur la page d'accueil

Si serveur local
1) Lancer le serveur apache de votre logiciel
2) Dans votre barre d'URL, tappez localhost/refonte_mmi . Si tout est bon, vous devriez arriver sur la page d'accueil