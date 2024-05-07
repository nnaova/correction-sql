<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Book extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 40 books
        for ($i = 1; $i <= 40; $i++) {
            $book = new \App\Entity\Book();
            $book->setTitle('Title ' . $i);
            $book->setDescription('Description ' . $i);
            $book->setPublicationDate(new \DateTime('now - ' . rand(1, 20) . ' years'));
            $book->setCreatedAt(new \DateTime('now'));
            $book->setUpdatedAt(new \DateTime('now'));
            $author = $manager->getRepository(\App\Entity\Author::class)->find(rand(1, 20));
            $book->setAuthor($author);
            $genre = $manager->getRepository(\App\Entity\Genre::class)->find(rand(1, 20));
            $book->setGenre($genre);

            $manager->persist($book);
        }

        $manager->flush();
    }
}
