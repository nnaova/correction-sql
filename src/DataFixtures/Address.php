<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Address extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 addresses
        for ($i = 1; $i <= 20; $i++) {
            $address = new \App\Entity\Address();
            $address->setNumber(rand(1, 100));
            $address->setStreetName('Street Name ' . $i);
            $address->setCity('City ' . $i);
            $address->setCountry('Country ' . $i);
            $address->setPostalCode(rand(1000, 9999));
            $address->setCreatedAt(new \DateTime('now'));
            $address->setUpdatedAt(new \DateTime('now'));

            $manager->persist($address);
        }

        $manager->flush();
    }
}
