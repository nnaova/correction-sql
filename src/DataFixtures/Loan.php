<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Loan extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 loans
        for ($i = 1; $i <= 20; $i++) {
            $loan = new \App\Entity\Loan();
            $loan->setPrice(rand(1, 100));
            $loan->setStartDate(new \DateTime('now - ' . rand(1, 20) . ' days'));
            $loan->setEndDate(new \DateTime('now + ' . rand(1, 20) . ' days'));
            $loan->setCreatedAt(new \DateTime('now'));
            $loan->setUpdatedAt(new \DateTime('now'));
            $book = $manager->getRepository(\App\Entity\Book::class)->find(rand(1, 20));
            $loan->setBook($book);
            $lector = $manager->getRepository(\App\Entity\Lector::class)->find(rand(1, 20));
            $loan->setLector($lector);

            $manager->persist($loan);
        }

        $manager->flush();
    }
}
