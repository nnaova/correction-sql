<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Book extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 books
        for ($i = 0; $i < 20; $i++) {
            $book = new \App\Entity\Book();
            $book->setTitle('Title ' . $i);
            $book->setDescription('Description ' . $i);
            $book->setPublicationDate(new \DateTime('now - ' . rand(1, 20) . ' years'));
            $book->setCreatedAt(new \DateTime('now'));
            $book->setUpdatedAt(new \DateTime('now'));
            //TODO add author
            //TODO add genre

            $manager->persist($book);
        }

        $manager->flush();
    }
}
