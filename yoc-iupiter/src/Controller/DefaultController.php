<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home_fe")
     */
    public function index()
    {
        return $this->redirectToRoute('sonata_admin_dashboard');
    }
}
