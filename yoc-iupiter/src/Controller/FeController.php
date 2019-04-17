<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FeController extends AbstractController
{
    /**
     * @Route("/fe", name="fe")
     * @Template()
     */
    public function index()
    {
        return $this->render('fe/index.html.twig', [
            'controller_name' => 'FeController',
        ]);
    }
}
