<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CaptilazeController extends AbstractController
{
    /**
     * @Route("/", name="captilaze")
     */
    public function index()
    {
        return $this->render('captilaze/index.html.twig', [
            'controller_name' => 'CaptilazeController',
        ]);
    }
}
