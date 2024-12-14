<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Optionally, call BookFixtures here if you want to use AppFixtures as the main entry point
        $bookFixtures = new BookFixtures();
        $bookFixtures->load($manager);
    }
}
