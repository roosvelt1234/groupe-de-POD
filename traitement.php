<?php


$bd=null;
$telephone=$_POST['telephone'];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"]; 
$poste=$_POST["poste"];
$email=$_POST['email'];
$type_conge=$_POST['type_conge'];
$date_debut=$_POST["date_debut"];
$date_fin=$_POST['date_fin'];
$motif=$_POST["motif"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "resources_humaines";
$conn = new mysqli($servername, $username, $password, $dbname);
        if(!$conn){
                die("Connexion echouer:" . mysqli_connect_error());
        }else
        {
                echo "Connexion reussie";
          
	     }
 

	 $sql="INSERT INTO conges(telephone,nom,prenom,poste,email,type_conge,date_debut,date_fin,motif) VALUES ('".$telephone."','".$nom."','".$prenom."','".$poste."','".$email."','".$type_conge."','".$date_debut."','".$date_fin."','".$motif."')";
	// $sql = "INSERT INTO inscription(email,mdp,telephone,nom) VALUES('".$email."','".$mdp."','".$telephone."','".$nom."')";

 
        $result=$conn->query($sql);
       if($result){
		echo 'insertion reussit ';
	   }else{

		echo 'echec de l\'insertion';
	   }
 
 
 
    /*     if($_SERVER["request_method"]
		 ==post){
			$directeur_email="guyleneatoo@gmail.com";
			//ADRESSE E_MAIL DU DIRECTEUR
		 }
		 $nom=$_POST["nom"];
		 $prenom=$_POST["prenom"]; 
		 $poste=$_POST["poste"];
		 $date_debut=
		 $date_debut=$_POST["date_debut"];
		 $date_fin=
		 $date_fin=$_POST["date_fin"];
		 $motif=$_POST["motif"];
		 //construction du message
		 $suje="DEMANDE DE CONGE -$nom";
		 $message="une nouvelle demande de conge a ete soumise :\n\n";
		 $message  .="nom : $nom\n";
		 $message  .="prenom : $prenom\n";
		 $message  .="poste : $poste\n";
		 $message  .="date de fin : $date_fin\n";
		 $message  .="motif : $motif\n";
//envoie de l'email au directeur
$headers ="form: $nom\r\n";
if(
	mail($directeur_email,
	$sujet ,$message, $headers))
	{ echo"la demande de conge a ete envoyer avec succes.";

		}
		{

		
		echo"une erreur s'est produite lors de l'envoi de la demande de conge.";
	}*/
?>