<?php

namespace App\Controller;

use App\Entity\Snowflake;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FileIdController extends AbstractController
{
    /**
     * @Route("/id_ninja/{id}", name="app_fileId_file", requirements={"id"="\d+"} )
     */
    public function fileId(Snowflake $file): Response
    {
        return $this->render('file_id/id.html.twig', [
            'snowflake' => $file,
        ]);
    }
}
