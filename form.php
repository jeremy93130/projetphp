<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>


    <form method="POST" action="action.php">
        <h1>Mon Formulaire PHP</h1>

        <div>
            <div>
                <label for="pet-select">Civilité</label><br>
                <select name="sexe" id="pet-select">
                    <option value="">--Sexe--</option>
                    <option value="homme">M</option>
                    <option value="femme">F</option>
                </select> <br>
            </div>
            <div>
                <label for="firstname">firstName :</label><br>
                <input type="text" name="firstname"><br>
            </div>
            <div>
                <label for="lastName">lastName :</label><br>
                <input type="text" name="lastName"><br>
            </div>
            <div>
                <label for="email">E-Mail :</label><br>
                <input type="email" name="email"><br>
            </div>
            <div>
                <label for="tel">Tel :</label><br>
                <input type="number" name="tel"><br>
            </div>
            <div>
                <label for="birthday">date de naissance : </label> <br>
                <input type="date">
            </div>

            <fieldset>
                <legend>De quel pays venez-vous?</legend>

                <div>
                    <input type="radio" id="allemagne" name="pays" value="allemagne" />
                    <label for="allemagne">Allemagne</label>
                </div>

                <div>
                    <input type="radio" id="france" name="pays" value="france" />
                    <label for="france">France</label>
                </div>
                <div>
                    <input type="radio" id="italie" name="pays" value="italie" />
                    <label for="italie">Italie</label>
                </div>
            </fieldset>
            <label for="story">Message : </label>

            <textarea id="story" name="story" rows="5" cols="33">
            </textarea><br>
            <label id="conditions">J'accepte les conditions générales d'utilisation</label>
            <input type="checkbox" id="conditions" name="conditions" /><br>

            <input type="submit" class="envoyer">
        </div>
        <p>
            <?php echo "Bonjour " . $_POST["firstName"] . " " . $_POST["lastName"] . " et Bienvenue" ?>
        </p>
    </form>
</body>

</html>