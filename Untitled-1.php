<!DOCTYPE html>
<html>

<head>
    <title>Résultat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 class="title">Résultat</h1>

    <div class="result">
        <?php
        // Connexion à la base de données
        $servername = "localhost";
        $username = "votre_nom_utilisateur";
        $password = "votre_mot_de_passe";
        $dbname = "nom_de_votre_base_de_donnees";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérification de la connexion
        if ($conn->connect_error) {
            die("La connexion a échoué : " . $conn->connect_error);
        }

        // Récupération des données du formulaire
        $nom = $_POST["nom"];
        $poste = $_POST["poste"];

        // Requête SQL pour récupérer le salaire de l'employé
        $sql = "SELECT salaire FROM employes WHERE nom='$nom' AND poste='$poste'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Affichage du salaire
            $row = $result->fetch_assoc();
            $salaire = $row["salaire"];
            echo "Le salaire de $nom pour le poste de $poste est de $salaire";
        } else {
            echo "Aucun résultat trouvé pour cet employé.";
        }

        // Fermeture de la connexion à la base de données
        $conn->close();
        ?>
    </div>
</body>

</html>