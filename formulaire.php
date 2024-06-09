
<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resources_humaines";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupération des données du formulaire
$nom = $_POST['nom'];
$poste = $_POST['poste'];
$date = $_POST['date'];
$objectifs = $_POST['objectifs'];
$evaluation = $_POST['evaluation'];
$competences = $_POST['competences'];
$connaissances = $_POST['connaissances'];
$realisations = $_POST['realisations'];
$objectif = $_POST['objectif'];
$capacites = $_POST['capacites'];
$exemples = $_POST['exemples'];
$competences_comm = $_POST['competences_comm'];
$exemples_comm = $_POST['exemples_comm'];
$capacites_init = $_POST['capacites_init'];
$exemples_init = $_POST['exemples_init'];
$besoins_formation = $_POST['besoins_formation'];
$domaines_dev = $_POST['domaines_dev'];
$commentaires = $_POST['commentaires'];

// Préparation de la requête SQL
$sql = "INSERT INTO formulaire1(nom, poste, date, objectifs, evaluation, competences, connaissances, realisations, objectif, capacites, exemples, competences_comm, exemples_comm, capacites_init, exemples_init, besoins_formation, domaines_dev, commentaires) VALUES ('$nom', '$poste', '$date','$objectifs','$evaluation','$competences','$connaissances','$realisations','$objectif','$capacites','$exemples','$competences_comm','$exemples_comm','$capacites_init','$exemples_init','$besoins_formation','$domaines_dev','$commentaires')";

// Exécution de la requête SQL
if ($conn->query($sql) === TRUE) {
    echo "Données enregistrées avec succès !";
   // Récupération de l'URL de la page précédente
   $connexion_php= parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
    
   // Redirection vers la page précédente
   header("Location: " . $connexion_php);
   exit();
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}

// Fermeture de la connexion
$conn->close();  
?>
