<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Author extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 authors
        for ($i = 1; $i <= 20; $i++) {
            $author = new \App\Entity\Author();
            $author->setFirstname('Firstname' . $i);
            $author->setLastname('Lastname' . $i);
            $author->setBirthdate(new \DateTime('now - ' . rand(20, 60) . ' years'));
            $author->setCarrerStartedAt(new \DateTime('now'));
            $author->setCreatedAt(new \DateTime('now'));
            $author->setUpdatedAt(new \DateTime('now'));

            $manager->persist($author);
        }

        $manager->flush();
    }
}
