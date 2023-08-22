<?php
require_once '../database.php';

// Se connecter à la base de données : 

$db = dBConnexion();

// Préparation de la requête 
$request = $db->prepare("SELECT * FROM utilisateurs");
// executer la requête :
try {
    $request->execute();
    $users = $request->fetchAll();
} catch (PDOException $error) {
    $error->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Afficher les informations des utilisateurs dans un tableau HTML -->
            <?php foreach ($users as $u) { ?>
                <tr>
                    <td>
                        <?= $u["nom"]; ?>
                    </td>
                    <td>
                        <?= $u["prenom"]; ?>
                    </td>
                    <td>
                        <?= $u["email"]; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</body>

</html>