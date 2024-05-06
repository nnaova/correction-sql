<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Loan extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 loans
        for ($i = 0; $i < 20; $i++) {
            $loan = new \App\Entity\Loan();
            $loan->setPrice(rand(1, 100));
            $loan->setStartDate(new \DateTime('now - ' . rand(1, 20) . ' days'));
            $loan->setEndDate(new \DateTime('now + ' . rand(1, 20) . ' days'));
            $loan->setCreatedAt(new \DateTime('now'));
            $loan->setUpdatedAt(new \DateTime('now'));
            //TODO add book
            //TODO add user

            $manager->persist($loan);
        }

        $manager->flush();
    }
}
