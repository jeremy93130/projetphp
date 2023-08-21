<p>
    <?php echo "Bonjour " . $_POST["firstname"] . " " . $_POST["lastname"] . " et Bienvenue" ?>
</p>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "biblio";
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

echo "<pre>";
var_dump($_POST);
echo "</pre>";
// die;

// // Données à insérer
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $message = "Hi, It's my first message.";

if (isset($_POST['envoyer'])) {
    //récupération des données
    $nom = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $prenom = htmlspecialchars($_POST['firstname']);

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $imgName = $_FILES['image']['name']; // Nom de l'image
    $tmpName = $_FILES['image']['tmp_name']; // Localisation temporaire sur le serveur (php s'en occupe automatiquement)

    // $_SERVER['DOCUMENT_ROOT'] pointe à la racine du serveur, c'est à dire le dossier principal
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/projet/images/" . $imgName; // Destination finale de mon image.
    echo $destination;
    move_uploaded_file($tmpName, $destination);
}
// // Requête d'insertion préparée
// $sql = "INSERT INTO user (firstname, lastname, email, message) VALUES (:firstname, :lastname, :email, :message)";
// $stmt = $pdo->prepare($sql);

// // Associer les valeurs aux paramètres
// $stmt->bindParam(':firstname', $firstname);
// $stmt->bindParam(':lastname', $lastname);
// $stmt->bindParam(':email', $email);
// $stmt->bindParam(':message', $message);

// // Exécuter la requête
// try {
//     $stmt->execute();
//     echo "Données insérées avec succès.";
// } catch (PDOException $e) {
//     echo "Erreur d'insertion : " . $e->getMessage();
// }


?>