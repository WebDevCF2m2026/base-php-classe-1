# Exercice MVC | mvc-19

## Marche à suivre préparation TI1

### Phase 1

1) On part de votre ordinateur
- Création d'un dossier sur votre ordinateur : `git init`
- Création d'un `repository` sur `Github`, puis on le lien en local : `git remote add origin KEY@SSH`

#### Ou

2) On part de `github`
- On crée un `fork` du `repository` "**upstream**" sur `Github`
- On clone le `fork` du `repository` depuis `Github` (utilisation de `SSH` de préférence) sur votre ordinateur mais **pas dans un projet git existant ni un endroit suivi par une synchronisation (OneDrive, Dropbox, ICloud etc..., )**

#### Ensuite

- Ajout de l'upstream (pour le `pull request` final) : `git remote add upstream KEY@SSH`
- Création du `.gitignore` vide (**! Important**)
- Dossiers vide ? `.gitkeep`
- Informer sur le projet ? `README.md`

### Phase 2

Création des dossiers importants du site pour le MVC (Model View Controller)
- `public` Dossier accessible à tous (**frontend**)
- `model` Dossier gère l'accès aux données (**Backend**)
- `view` Dossier contenant les vues (templates **Backend**)
- `controller` Dossier qui gère le lien entre les `view` et les `model` (Entre **Backend** et **Middle-end**)
- `datas` - nos fichiers de préparation du travail

#### .gitkeep

Mettez-y des `.gitkeep` dans chaque dossier et faîtes des commit.

#### Création du config.php

**AVANT** la création de `Stagiaire/Michael/mvc-19/config.php`, ouvrez `.gitignore` et mettez-y : 

```bash
<?php
# Stagiaire/Michael/mvc-19/config.php 

// constante (variable qui ne peut être 
// redéfinie pendant la durée du script )

# __DIR__ constante magique qui donnera
# le chemin absolu vers la racine du projet
const ROOT_PATH = __DIR__;

// constante contenant les pages accessibles sans être connecté
const PUBLIC_PAGES = [
    'home',
    'about',
    'contact',
    'login',
    'register',
];
```

Créez le fichier `config.php` à la racine du projet. Il est protégé grâce au `.gitconfig`.

#### Création du config.ini.php

Pour les besoins de l'exercice, nous allons créer un fichier de configuration `config.ini.php` qui contiendra des constantes de sécurité. Ce fichier doit être suivi par `git` et permet de le copier pour créer le `config.php` qui lui ne doit pas être suivi par `git` et qui contiendra les 'vraies' valeurs de sécurité.

### Phase 3

#### Création du contôlleur frontal

Le front controller, nommé `public/index.php`, est le seul fichier `php` qui sera accessible à un utilisateur externe.

####

Il va devoir Recréer config.php pour accéder aux contantes de sécurité.
     config.ini.php config.php

