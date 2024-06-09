<!DOCTYPE html>
<html>
<head>
  <title>Formulaire d'évaluation</title>
  <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
  <form method="post" action="formulaire.php">
    <h1>Formulaire d'évaluation</h1>
    
    <!-- Section 1 : Informations générales -->
    <h2>Informations générales</h2>
     
    <label for="nom">Nom de l'employé :</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
    
    <label for="poste">Poste occupé :</label>
    <input type="text" id="poste" name="poste" placeholder="Entrez votre poste" required>
    
    <label for="date">Date de l'évaluation :</label>
    <input type="date" id="date" name="date" required>


    <!-- Section 2 : Objectifs et attentes -->
    <h2>Objectifs et attentes</h2>
    <label for="objectifs">Récapitulez les objectifs fixés précédemment :</label>
    <textarea id="objectifs" name="objectifs" placeholder="Récapitulez les objectifs assignés lors de la dernière évaluation" rows="4" required></textarea>
    
    <label for="evaluation">Comment évaluez-vous les objectifs qui vous ont été fixés ? Avez-vous rencontré des difficultés particulières pour les atteindre ?</label>
    <textarea id="evaluation" name="evaluation" placeholder="Donnez votre avis sur les objectifs et partagez vos commentaires" rows="4" required></textarea>
    

     <!-- Section 3 : Compétences et connaissances -->
     <h2>Compétences et connaissances</h2>
    
     <label for="competences">Quelles compétences clés sont nécessaires pour votre poste ? Dans quelle mesure estimez-vous les maîtriser ?</label>
     <textarea id="competences" name="competences" placeholder="Évaluez les compétences clés requises pour votre poste et votre niveau de maîtrise" rows="4" required></textarea>
     
     <label for="connaissances">Quelles sont les connaissances techniques essentielles pour votre rôle ? Comment évaluez-vous votre niveau d'expertise dans ces domaines ?</label>
     <textarea id="connaissances" name="connaissances" placeholder="Évaluez les connaissances techniques essentielles et votre niveau d'expertise" rows="4" required></textarea>
     
     <!-- Section 4 : Résultats et réalisations -->
     <h2>Résultats et réalisations</h2>
     <label for="realisations">Quelles sont vos réalisations les plus remarquables au cours de la période évaluée ?</label>
     <textarea id="realisations" name="realisations" placeholder="Décrivez vos réalisations les plus significatives lors de la période évaluée" rows="4" required></textarea>
    
    <label for="objectifs">Dans quelle mesure pensez-vous avoir atteint les objectifs qui vous ont été fixés ? Pouvez-vous fournir des exemples concrets de vos résultats ?</label>
    <textarea id="objectif" name="objectif" placeholder="Évaluez votre réussite par rapport aux objectifs et donnez des exemples de vos résultats" rows="4" required></textarea>
    
    
    <!-- Section 5 : Collaboration et travail d'équipe -->
     <h2>Collaboration et travail d'équipe</h2>
     <label for="capacites">Comment évaluez-vous votre capacité à travailler en équipe et à collaborer avec vos collègues ?</label>
     <textarea id="capacite" name="capacites" placeholder="Évaluez votre capacité à travailler en équipe et à collaborer avec vos collègues" rows="4" required></textarea>
     
     <label for="exemples">Pouvez-vous partager un exemple de collaboration réussie avec un collègue ? Avez-vous rencontré des difficultés dans une situation de travail d'équipe et comment les avez-vous gérées ?</label>
     <textarea id="exemples" name="exemples" placeholder="Donnez des exemples de collaboration réussie ou de difficultés rencontrées en équipe" rows="4" required></textarea>
    
     
     <!-- Section 6 : Communication -->
    <h2>Communication</h2>
    <label for="competences_comm">Comment évaluez-vous vos compétences en communication verbale et écrite ?</label>
    <textarea id="competence_comm" name="competences_comm" placeholder="évaluez vos compétences en communication verbale et écrite" rows="4"required></textarea>
    <label for="exemples_comm">Pouvez-vous donnez un exemple de communication efficace que vous avez eu avec un collègue ou un client récement ?</label>
    <textarea id="exemple_comm" name="exemples_comm" placeholder="donnez un exemplede communication efficace avec un collègue ou un client récent" rows="4" required></textarea>
    
    
    <!-- Section 7 : Initiative et autonomie -->
    <h2>Initiative et autonomie</h2>
   
    <label for="capacites_init">dans quelle mesure estimez-vous etre capable de prendre des initiatives et de travailler de manière autonome dans votre role ?</label>
    <textarea id="capacite_init" name="capacites_init" placeholder="évaluez votre capacité à prendre des initiatives et à travailler de manière autonome" rows="4" required></textarea>
    <label for="exemples_init">Pouvez-vous fournir un exemple de projet ou de tache que vous avez entrepris de manière proactive, sans y etre spécifiquement assigné ?</label>
    <textarea id="exemple_init" name="exemples_init" placeholder="donnez un exemple de projet ou tache que vous avez réalisé de manière proactive" rows="4" required></textarea>
    
    
     <!-- Section 8 : Développement professionnel -->
     <h2>Développement professionnel</h2>
     <label for="besoins_formation">Avez-vous identifié des besoins en formation ou en développement professionnel pour améliorer vos compétences ?</label>
     <textarea id="besoins_formation" name="besoins_formation" placeholder="Identifiez vos besoins en formation ou en développement professionnel" rows="4" required></textarea>
      
    <label for="domaines_dev">Dans quels domaines spécifiques souhaitez-vous vous développer davantage sur le plan professionnel ?</label>
    <textarea id="domaines_dev" name="domaines_dev" placeholder="Identifiez les domaines dans lesquels vous souhaitez vous développer professionnellement" rows="4" required></textarea>
    
    
    <!-- Section 9 : Commentaires supplémentaires -->
    <h2>Commentaires supplémentaires</h2>
    <label for="commentaires">Avez-vous d'autres commentaires, suggestions ou préoccupations que vous souhaitez partager dans le cadre de cette évaluation ?</label>
    <textarea id="commentaires" name="commentaires" placeholder="Ajoutez vos commentaires, suggestions ou préoccupations supplémentaires" rows="4"></textarea>
    
    
    <button type="submit">Soumettre</button>
  </form>
</body>
</html>