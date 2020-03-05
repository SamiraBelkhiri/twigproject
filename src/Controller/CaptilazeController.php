<?php

namespace App\Controller;

use App\Entity\Captilaze;
use App\Entity\Spacedash;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CaptilazeController extends AbstractController
{
    /**
     * @Route("/captilaze", name="captilaze")
     */
    public function index()
    {
        if (!isset($_POST['sentence']))
        {
            $_POST['sentence'] = "";
        }
        if (!isset($_POST['sentence2']))
        {
            $_POST['sentence2'] = "";
        }
        $capitlaze = new Captilaze();
        $dashes = new Spacedash();
        return $this->render('captilaze/index.html.twig', [
            'controller_name' => 'CaptilazeController',
            'sentence'=>$capitlaze->transform($_POST['sentence']),
            'sentence2'=>$dashes->transform($_POST['sentence2']),
        ]);
    }
}
