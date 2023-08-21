<?php
// Le reste de votre code PHP
if (isset($_POST['envoi'])) {
    //récupération des données
    $nom = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $confirm = htmlspecialchars($_POST['confirm']);
    $mdp = htmlspecialchars($_POST['mdp']);

    if (empty($nom) || empty($email) || empty($confirm) || empty($mdp)) {
        echo "Veuillez remplir tous les champs !";
    } else if ($_POST['mdp'] != $_POST['confirm']) {
        echo "<p> OUPS, LES MOTS DE PASSE NE CORRESPONDENT PAS</p>";
    } else {
        echo "<h1> Bienvenue " . $nom;
    }
}

?>