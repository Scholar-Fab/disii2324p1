<?php

namespace App\DataFixtures;

use App\Entity\Joueur;
use App\Entity\Voiture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $voiture1 = new Voiture();
        $voiture1->setCouleur('bleu');
        $voiture1->setMarque('Renault');
        $voiture1->setModele('Clio');
        $voiture1->setHybride(true);
        $manager->persist($voiture1);
        $joueur1 = new Joueur();
        $joueur1->setPrenom("Guillaume")
            ->setEmail("guillaume.thiery@scholarfab.com");
        $joueur1->addVoiture($voiture1);
        $manager->persist($joueur1);

        $manager->flush();
    }
}
