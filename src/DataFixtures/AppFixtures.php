<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Category;
use App\Entity\Question;
use App\Entity\Role;
use App\Entity\TestClass;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use http\QueryString;

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
            $role = new Role();
            $role->setName('NRole'.$i);
            $manager->persist($role);
            $user = new User();
            $user->setName('NUser'.$i);
            $user->setEmail('Mail' .$i);
            $user->setPhone('Fone' .$i);
            $user->setPass('Pass' .$i);
            $user->setDateVisit(new \DateTime('now'));
            $user->setRole($role);
            $manager->persist($user);
            $category = new Category();
            $category->setName('NCategory' .$i);
            $manager->persist($category);
            $question = new Question();
            $question->setTitle('Title' .$i);
            $question->setText('Text' .$i);
            $question->setDate(new \DateTime('now'));
            $question->setUser($user);
            $question->setCategory($category);
            $manager->persist($question);
            $answer = new Answer();
            $answer->setText('Text' .$i);
            $answer->setDate(new \DateTime('now'));
            $answer->setUser($user);
            $answer->setQuestion($question);
            $manager->persist($answer);

        }

        $manager->flush();
    }
}
