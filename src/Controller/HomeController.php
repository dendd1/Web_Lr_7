<?php

namespace App\Controller;

use App\Entity\TestClass;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $product = $doctrine->getRepository(TestClass::class)->findBy([],['id' => 'DESC'],4);

        return $this->render('home/index.html.twig', [
            'products' => $product,
        ]);
    }
}
