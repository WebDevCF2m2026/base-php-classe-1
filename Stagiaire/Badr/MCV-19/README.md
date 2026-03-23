# exercice MVC 
## Marche a suivre preparation 

### Phrase 1

1) on part de votre ordinateur 
- Creation d'un dossier sur votre ordinateur : ``git init``
- Creéation d'un `repository` sur `github`, puis on lien local  : `git remote add origin  KEY@SSH`


2) on part de `github`
- on cree un `fork` du `repository` "**upstream**" sur `Github`
- on clone de `flok` du `repository` depuis `Github` (utilisation de `SSH` de preference) sur votre ordinateur mais **pas dans un projet git existant ni un endroit suivi par une synchronisation (oneDrive, Dropbox, iCloud etc...,)** 
##### Ensuite
- Ajouter de l'upstream : (pour le pull request final) : ``git remote add upstream KEY@SSH`




- Ajouter de l'upstream (pour le pull `REQUEST`)
- Création du `.gitignore` vide (**! important**)



- dossier vide ?  `gitkeep`
- information sur le projet ? `READMR.md`

### Phase 2 
- Creation des dossiers importants du site pourr le MVC (Model View controller)
- Public `accessible au punlic`
- `model` il gére l'accés aux données 
- `view ` Dossier contanant les vues (temlates **backend**) 
- `controlleur ` Dossier qui gére le lien entre la `view` et les `model` (entre **Backend** et **Middele-end**)
- `datas` - nos fichiers de préparation du travail