<?php
use PHPUnit\Framework\TestCase;

require 'inscription.php'; 
// Remplacez par le chemin vers votre fichier d'inscription les gars c omportant

class InscriptionTest extends TestCase
{

    public function testInscriptionSuccess()
    {
        $inscription = new Inscription();
        $result = $inscription->register('utilisateur_valide', 'motdepasse_valide');
        $this->assertTrue($result);
    }

    
    public function testInscriptionFailure()
    {
        $inscription = new Inscription();
        $result = $inscription->register('utilisateur_invalide', 'motdepasse_invalide');
        $this->assertFalse($result);
    }
}
