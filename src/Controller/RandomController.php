<?php

namespace App\Controller;

use App\Repository\SnowflakeRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RandomController extends AbstractController
{
    /**
     * @Route("/", name="app_random_index")
     */
    public function index(): Response
    {
        
        return $this->render('random/index.html.twig', [
            'controller_name' => 'RandomController',
        ]);
    }

    /**
     * @Route("/random", name="app_random_random")
     */
    public function random(): Response
    {   
        $number = random_int(0, 100);
        return $this->render('random/random.html.twig', ['number' => $number]);
    }

    /**
     * @Route("/id_ninja", name="app_random_id")
     */
    public function id_ninja(SnowflakeRepository $fileRepository): Response
    {   
        $fileninja = $fileRepository->findAll();

        return $this->render('id_ninja/id_ninja.html.twig', ['snowflakes' => $fileninja]);
    }
}
