<?php

namespace App\DataFixtures;

use App\Entity\MotCle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MotCleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Liste des noms de mots-clés à ajouter
        $nomsMotsCles = ['Technologie', 'Innovation', 'Science', 'Éducation', 'Santé'];

        foreach ($nomsMotsCles as $nom) {
            $motCle = new MotCle();
            $motCle->setNom($nom);
            $manager->persist($motCle);
        }

        $manager->flush();
    }
}