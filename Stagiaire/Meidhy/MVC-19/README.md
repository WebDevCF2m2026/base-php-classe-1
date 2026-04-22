<!-- Ex MVC | mvc-19 -->
<!-- Marche à suivre préparation T.I -->

<!-- Phase 1 -->

1) On part de votre ordinateur
- création d'un dossier sur votre ordinateur : "git init"
- création d'un "repository" sur "Github" : "git remote add origin KEY@SSH"

2) On part de github
- on crée un "fork" du "repository" **! upstream** sur "Github"
- on clone le "fork" du "repository" depuis "Github" (utilisation "SSH"de préférence) sur votre ordinateur mais **!pas dans un projet git existant ni un endroit suivi par une synchronisation (Onedrive, Dropbox, Icloud etc ...,)**

#### Ensuite 

- Ajout de l'upstream (pour le "pull request" final) : "git remote add upstream KEY@SSH"
- création du ".gitignore" vide (**! Important**)
- Dossier vide ? ".gitkeep"
- informer sur le projet ? "README.md"

<!-- Phase 2 -->

Création des dossiers importants du site pour le MVC (Model View Controller)
- 'Public' (accessible à tous)

(***Frontend**)
- 'Model' (Dossier qui gère l'accès aux données)

(***Backend**)
- 'View' (Dossier contenant les vues (Templates))
- 'Controller' (Dossier qui gère le lien entre les "view" et les "model") Entre **Backend** et **Middle-end**
- 'Data' - Nos fichiers de préparation du travail

#### .gitkeep

Mettez-y des '.gitkeep' dans chaque dossier et faites des commits. 


#### Création du config.php 

**Avant** La création de 'Stagiaire/Meidhy/MVC-19/config.php' ouvrez '.gitignore' et mettez-y : 

'''bash 

# 'Stagiaire/Meidhy/MVC-19/.gitignore'

'''

Créez le fichier 'config.php' à la racine du projet, il es protégé grâce au '.gitconfig'

### Phase 3

#### Création du controlleur frontal

Le front controlleur, nommé 'MVC-19\public\index.php' est le seul fichier 'php' qui sera accessiblé à un utilisateur externe. 

#### Création du config.php

Il va devoir recréer config.php pour accéder aux constantes de sécurité.
        cp config.ini.php config.php 
