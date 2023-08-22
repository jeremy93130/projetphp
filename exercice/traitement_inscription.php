<?php
// Le reste de votre code PHP
require_once("../database.php");
if (isset($_POST['envoi'])) {
    //récupération des données
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $mdp = htmlspecialchars($_POST['mdp']);

    // Crypter le mdp:

    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

    // il faut se connecter à la base de données : 

    $db = dBConnexion();

    // var_dump($db);

    // Préparation de la requête

    $request = $db->prepare("INSERT INTO utilisateurs (nom,prenom,email,mdp) VALUES (?,?,?,?)");

    // exercution de la requête 

    try { // Essaye d'enregistrer les infos la table utilisateurs
        $request->execute(array($nom, $prenom, $email, $mdpCrypt));
    } catch (PDOexception $error) {
        echo $error->getMessage();// Afficher l'erreur sql générée 
    }

    // if (empty($nom) || empty($email) || empty($confirm) || empty($mdp)) {
    //     echo "Veuillez remplir tous les champs !";
    // } else {
    //     echo "<h1> Bienvenue " . $nom;
    // }
}


?>