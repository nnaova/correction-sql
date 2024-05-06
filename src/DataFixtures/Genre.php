<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Genre extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 genres
        for ($i = 0; $i < 20; $i++) {
            $genre = new \App\Entity\Genre();
            $genre->setName('Genre ' . $i);
            $genre->setDeescription('Description ' . $i);
            $genre->setCreatedAt(new \DateTime('now'));
            $genre->setUpdatedAt(new \DateTime('now'));

            $manager->persist($genre);
        }

        $manager->flush();
    }
}
