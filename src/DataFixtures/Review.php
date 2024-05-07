<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Review extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 reviews
        for ($i = 1; $i <= 20; $i++) {
            $review = new \App\Entity\Review();
            $review->setComment('Comment ' . $i);
            $review->setMark(rand(1, 5));
            $review->setCreatedAt(new \DateTime('now'));
            $review->setUpdatedAt(new \DateTime('now'));
            $book = $manager->getRepository(\App\Entity\Book::class)->find(rand(1, 20));
            $review->setBook($book);
            $lector = $manager->getRepository(\App\Entity\Lector::class)->find(rand(1, 20));
            $review->setLector($lector);

            $manager->persist($review);
        }

        $manager->flush();
    }
}
