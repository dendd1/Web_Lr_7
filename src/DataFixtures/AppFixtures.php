<?php

namespace App\DataFixtures;

use App\Entity\TestClass;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new TestClass();
            $product->setName('Name'.$i);
            $product->setSername('serName'.$i);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
