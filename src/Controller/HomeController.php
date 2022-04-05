<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Question;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $category = $doctrine->getRepository(Category::class)->findBy([],['id' => 'DESC'],7);
        $question = $doctrine->getRepository(Question::class)->findBy([],['date' => 'DESC']);
        return $this->render('home/index.html.twig', [
            'category' => $category,
            'question' => $question,
        ]);
    }

}
