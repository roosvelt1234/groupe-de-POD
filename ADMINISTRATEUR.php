<!DOCTYPE html>
<html>
<HEad>
    <TItle>DEMANDE DE CONGE </TItle>
</HEad>
<BOdy>
    <H1>DEMANDE DE CONGE</H1>
    <FOrm
        action="envoyer une demande.php"
        method="post">
        <label for="nom">nom :</label>
        <input type="text"id="nom" name="nom"
        require> <br>
        <label 
        for="date_debut">date de debut:</label>
        <input type="date"
        id="date_debut"
        name=date_debut"
        require> <br>
        <label for="date_fin">date de fin:</label>
        <input type="date"
        id="date_fin" name="date_fin"
        required>
        <br>
        <label for="motif">:</label>
        <textarea name="motif" id="motif" cols="30" rows="10"></textarea>
        <br>
        <input type="submit"
        value="envoyer">
    </FOrm>
</BOdy>

</html>
