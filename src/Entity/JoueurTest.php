<?php

namespace App\Tests\Entity;

use App\Entity\Joueur;
use App\Entity\Voiture;
use PHPUnit\Framework\TestCase;

class JoueurTest extends TestCase
{
    public function testGetId(): void
    {
        $joueur = new Joueur();
        $this->assertNull($joueur->getId());
    }

    public function testGetPrenom(): void
    {
        $joueur = new Joueur();
        $this->assertNull($joueur->getPrenom());
    }

    public function testSetPrenom(): void
    {
        $joueur = new Joueur();
        $prenom = 'John';
        $joueur->setPrenom($prenom);
        $this->assertEquals($prenom, $joueur->getPrenom());
    }

    public function testGetEmail(): void
    {
        $joueur = new Joueur();
        $this->assertNull($joueur->getEmail());
    }

    public function testSetEmail(): void
    {
        $joueur = new Joueur();
        $email = 'john@example.com';
        $joueur->setEmail($email);
        $this->assertEquals($email, $joueur->getEmail());
    }

    public function testGetVoiture(): void
    {
        $joueur = new Joueur();
        $this->assertInstanceOf(\Doctrine\Common\Collections\Collection::class, $joueur->getVoiture());
    }

    public function testAddVoiture(): void
    {
        $joueur = new Joueur();
        $voiture = new Voiture();
        $joueur->addVoiture($voiture);
        $this->assertTrue($joueur->getVoiture()->contains($voiture));
        $this->assertEquals($joueur, $voiture->getJoueur());
    }

    public function testRemoveVoiture(): void
    {
        $joueur = new Joueur();
        $voiture = new Voiture();
        $joueur->addVoiture($voiture);
        $joueur->removeVoiture($voiture);
        $this->assertFalse($joueur->getVoiture()->contains($voiture));
        $this->assertNull($voiture->getJoueur());
    }
}