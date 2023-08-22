<?php
// require_once("database.php")
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    # Exercice : Formulaire d'Inscription
    /*
    Dans cet exercice, vous allez créer un formulaire d'inscription en HTML et traiter les données soumises en utilisant
    PHP. Le formulaire d'inscription demandera aux utilisateurs de saisir leur nom, leur adresse e-mail, un mot de passe
    et de confirmer le mot de passe.

    Créez un fichier HTML nommé formulaire_inscription.html contenant un formulaire d'inscription avec les champs
    suivants :
    Nom complet (input de type texte)
    Adresse e-mail (input de type email)
    Mot de passe (input de type password)
    Confirmer le mot de passe (input de type password)
    Créez un fichier PHP nommé traitement_inscription.php pour traiter les données du formulaire d'inscription. Dans ce
    fichier :

    Utilisez la méthode POST pour récupérer les données soumises du formulaire ($_POST).
    Vérifiez si les champs nom, adresse e-mail, mot de passe et confirmation du mot de passe ne sont pas vides.
    Vérifiez si le mot de passe et la confirmation du mot de passe correspondent.
    Si tous les champs sont remplis et les mots de passe correspondent, affichez un message de confirmation.
    Si au moins un champ est vide ou les mots de passe ne correspondent pas, affichez un message d'erreur et indiquez
    les champs manquants ou incohérents.
    Dans le fichier HTML, assurez-vous que le formulaire envoie les données soumises à la page de traitement PHP
    (traitement_inscription.php) en utilisant la méthode POST. */

    ?>
<form method="POST" action="traitement_inscription.php">
    <div>
        <div>
            <label for="name">Nom</label><br>
            <input type="text" name="nom"><br>
        </div>
        <div>
            <label for="name">Prenom</label><br>
            <input type="text" name="prenom"><br>
        </div>
        <div>
            <label for="email">E-Mail :</label><br>
            <input type="email" name="email"><br>
        </div>
        <div>
            <input type="password" name="mdp" placeholder="Mot de Passe"><br>
        </div>

        <input type="submit" class="envoi" name="envoi">
    </div>
</form>
</body>

</html>