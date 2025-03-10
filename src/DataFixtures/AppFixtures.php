<?php

namespace App\DataFixtures;

use App\Entity\Application;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $application = new Application();
        $application->setName('My app');
        $application->setDescription('This is my app');
        $application->setLogo('logo.png');
        $application->setCreated(new \DateTime());

        $manager->persist($application);

        $manager->flush();
    }
}
