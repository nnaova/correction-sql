<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class Lector extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 lectors
        for ($i = 1; $i <= 20; $i++) {
            $lector = new \App\Entity\Lector();
            $lector->setFirstname('Firstname' . $i);
            $lector->setLastname('Lastname' . $i);
            $lector->setEmail('email' . $i . '@example.com');
            $lector->setPassword('password' . $i);
            $lector->setBirthdate(new \DateTime('now - ' . rand(20, 60) . ' years'));
            $lector->setRegisteredAt(new \DateTime('now'));
            $lector->setCreatedAt(new \DateTime('now'));
            $lector->setUpdatedAt(new \DateTime('now'));
            $address = $manager->getRepository(\App\Entity\Address::class)->find(rand(1, 20));
            $lector->setAddress($address);

            $manager->persist($lector);
        }

        $manager->flush();
    }
}
