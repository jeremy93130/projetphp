<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Remplaçant</title>
</head>

<body>
    <?php echo '<p> Bonjour tout le monde </p>';

    $prenom = "Karima"; // String
    $nom = "Dupont"; // String
    $number = 100; // Integer (entier)
    $num2 = 1.4; // Décimal
    $somme = $number + $num2;
    $bool = false; // Boolean
    $age = 22;
    $tab = [
        'nom' => 'test',
        'prenom' => 'test',
    ]; // Array
    $tab2 = array(); // Array
    $val = null; // Null 
    
    // echo 'la somme de ' . $number . ' + ' . $num2 . ' est égal à : ' . $somme;
    
    if ($age >= 18) {
        echo '<p class="success">Vous pouvez suivre </p>';
    } else {
        echo '<p class="text">Vous ne pouvez pas suivre </p>';
    }


    ?>
    <style>
        .text {
            color: red;
        }

        .success {
            color: chartreuse;
        }
    </style>
</body>

</html>