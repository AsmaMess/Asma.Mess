<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AsmaController extends AbstractController
{
    /**
     * @Route("/asma", name="asma")
     */
    public function index(): Response
    {
        return $this->render('asma/index.html.twig', [
            'controller_name' => 'AsmaController',
        ]);
    }
}
