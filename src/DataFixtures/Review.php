<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Review extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 reviews
        for ($i = 0; $i < 20; $i++) {
            $review = new \App\Entity\Review();
            $review->setComment('Comment ' . $i);
            $review->setMark(rand(1, 5));
            $review->setCreatedAt(new \DateTime('now'));
            $review->setUpdatedAt(new \DateTime('now'));
            //TODO add book
            //TODO add lector

            $manager->persist($review);
        }

        $manager->flush();
    }
}
