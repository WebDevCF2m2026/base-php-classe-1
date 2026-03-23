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