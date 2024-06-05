<?php
use PHPUnit\Framework\TestCase;

require 'connexion.php';

class ConnexionTest extends TestCase
{
    private $connexion;

    // jappelle cette methode avant chaque test les bros
    protected function setUp(): void
    {
        $this->connexion = new Connexion();
    }

    // ici je Teste si la connexion reussit avec des identifiants valides
    public function testLoginSuccess()
    {
        $result = $this->connexion->login('utilisateur_valide', 'motdepasse_valide');
        $this->assertTrue($result);
    }

    // Teste si la connexion echoue avec des identifiants invalides
    public function testLoginFailure()
    {
        $result = $this->connexion->login('utilisateur_invalide', 'motdepasse_invalide');
        $this->assertFalse($result);
    }

    // Cette methode est call apres chaque test
    protected function tearDown(): void
    {
        $this->connexion = null;
    }
}
